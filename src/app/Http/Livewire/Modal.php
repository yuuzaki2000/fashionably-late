<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{

    public $text;

    public function render()
    {
        return view('livewire.modal');
    }
}
