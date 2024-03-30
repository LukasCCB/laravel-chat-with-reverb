<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Jeremias extends Component
{

    public int $count = 0;

    //public array $users = [];

    public function render()
    {
        return view('livewire.jeremias');
    }

//    #[On('echo-presence:chat,joining')]
//    public function joining($data)
//    {
//        $this->users[] = $data;
//    }

    #[On('echo:jetete,TestingReverbEvent')]
    public function add()
    {
        $this->count++;
    }
}
