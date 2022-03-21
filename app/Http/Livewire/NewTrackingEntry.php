<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewTrackingEntry extends Component
{

    public $showModal = false;
    

    public function render()
    {
        return view('livewire.new-tracking-entry');
    }
}
