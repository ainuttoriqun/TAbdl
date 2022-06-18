<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeCOmponent extends Component
{
    public function render()
    {
        return view('livewire.home-c-omponent')->layout('layouts.base');
    }
}
