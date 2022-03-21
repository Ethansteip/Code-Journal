<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Illuminate\Support\Carbon;

class EntriesDisplay extends Component
{

    public $userEntries;
    public $isCollectionEmpty;
    public $dateForHumans;


    protected $listeners = ['findEntriesMatchingDate' => 'displayEntriesMatchingDateSelected', 'resetDate' => 'resetEntriesToTodaysDate'];

    public function mount()
    {
        $this->userEntries = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', Carbon::now())
                                    ->get();

        $this->isCollectionEmpty = $this->userEntries->isEmpty();
        $this->dateForHumans = Carbon::now()->toFormattedDateString();

    }

    public function render()
    {
        return view('livewire.entries-display');
    }

    public function resetEntriesToTodaysDate()
    {
        $this->userEntries = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', Carbon::now())
                                    ->get();

        $this->isCollectionEmpty = $this->userEntries->isEmpty();
        $this->dateForHumans = Carbon::now()->toFormattedDateString();
    }

    public function displayEntriesMatchingDateSelected($selectedDate)
    {
        $this->userEntries = Entry::where('user_id', auth()->user()->id)
                              ->whereDate('created_at', '=', $selectedDate)
                              ->get();

        $this->isCollectionEmpty = $this->userEntries->isEmpty();

        $createdAt = Carbon::parse($selectedDate);
        $this->dateForHumans = $createdAt->toFormattedDateString();

         
    }
}
