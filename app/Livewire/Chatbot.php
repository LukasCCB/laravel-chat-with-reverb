<?php

namespace App\Livewire;

use App\Events\MessageSent;
use Livewire\Attributes\On;
use Livewire\Component;

class Chatbot extends Component
{
    public array $messages = [];
    public string $message = '';

    public function render()
    {
        return view('livewire.chatbot');
    }

    public function addMessage()
    {
        MessageSent::dispatch(auth()->user()->name, $this->message);

        $this->reset('message');
    }

    #[On('echo-private:messages,MessageSent')]
    public function onMessageSent($event)
    {
        //dd($event);
        $this->messages[] = $event;
    }
}
