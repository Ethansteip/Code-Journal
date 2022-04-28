<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entry;

class NewTrackingEntry extends Component
{

    public $showModal = false;
    public $dateMatchingEntry;
    public $project, $title, $notes, $hours, $minutes, $entry_date;

    protected $listeners = ['findEntriesMatchingDate' => 'entryDate'];

    protected $rules = [
        'project' => 'required',
        'title' => 'required',
        'notes' => 'required',
        'hours' => 'required', 
        'minutes' => 'required',
        'entry_date' => 'required'
    ];
    

    public function render()
    {
        return view('livewire.new-tracking-entry');
    }

    public function entryDate($selectedDate)
    {
        $this->dateMatchingEntry = $selectedDate;
    }

    public function submit(){

        $this->validate();

        Entry::create([
            'user_id' => auth()->user()->id,
            'project' => $this->project,
            'title' => $this->title,
            'notes' => $this->notes,
            'hours' =>  $this->hours,
            'minutes' => $this->minutes,
            'entry_date' =>$this->entry_date
        ]);

    }
}
