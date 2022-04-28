<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Illuminate\Support\Carbon;

class EntriesDisplay extends Component
{

    public $userEntries, $userHours, $userMinutes;
    public $formattedHours, $formattedMinutes, $totalTime;
    public $isCollectionEmpty;
    public $dateForHumans;
    public $dateArray;


    protected $listeners = ['findEntriesMatchingDate' => 'displayEntriesMatchingDateSelected', 'resetDate' => 'resetEntriesToTodaysDate'];

    public function mount()
    {
        $this->userEntries = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', Carbon::now())
                                    ->get();

        $this->isCollectionEmpty = $this->userEntries->isEmpty();

        $this->dateForHumans = Carbon::now()->toFormattedDateString();

        $this->userHours = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', '=', Carbon::now())
                                    ->sum('hours');

        $this->userMinutes = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', '=', CArbon::now())
                                    ->sum('minutes');
        
        $this->dateArray = Carbon::now()->format('y-m-d');

        if ($this->userHours < 10){
            $this->userHours = str_pad($this->userHours, 2, "0", STR_PAD_LEFT);
            }else {
                $this->userHours = $this->userHours;
            }
    
            if ($this->userMinutes < 10){
                $this->userMinutes = str_pad($this->userMinutes, 2, "0", STR_PAD_LEFT);
            }else {
                $this->userMinutes = $this->userMinutes;
            }

        $this->formattedHours;
        $this->formattedMinutes;
        $this->totalTime;

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
        $this->dateArray = Carbon::now()->format('y-m-d');

        $this->resetLoggedHours();
    }

    public function displayEntriesMatchingDateSelected($selectedDate)
    {
        $this->userEntries = Entry::where('user_id', auth()->user()->id)
                              ->whereDate('created_at', '=', $selectedDate)
                              ->get();

        $this->userHours = Entry::where('user_id', auth()->user()->id)
                            ->whereDate('created_at', '=', $selectedDate)
                            ->sum('hours');

        $this->userMinutes = Entry::where('user_id', auth()->user()->id)
                              ->whereDate('created_at', '=', $selectedDate)
                              ->sum('minutes');

        $this->dateArray = $selectedDate;


        if ($this->userHours < 10){
        $this->userHours = str_pad($this->userHours, 2, "0", STR_PAD_LEFT);
        }else {
            $this->userHours = $this->userHours;
        }

        if ($this->userMinutes < 10){
            $this->userMinutes = str_pad($this->userMinutes, 2, "0", STR_PAD_LEFT);
        }else {
            $this->userMinutes = $this->userMinutes;
        }
        
        //$this->formattedHours = $this->formatUserEntryDuration($this->userHours);
        //$this->formattedMinutes = $this->formatUserEntryDuration($this->userMinutes);
        
        $this->totalTime = $this->userHours . ":" . $this->userMinutes;
        $this->isCollectionEmpty = $this->userEntries->isEmpty();

        $createdAt = Carbon::parse($selectedDate);
        $this->dateForHumans = $createdAt->toFormattedDateString();

         
    }

    public function formatUserEntryDuration($time)
    {
        if ($time < 10){
            $time = str_pad($time, 2, "0", STR_PAD_LEFT);
            }else {
                $time = $time;
            }
    }

    public function resetLoggedHours()
    {
        $this->userHours = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', '=', Carbon::now())
                                    ->sum('hours');

        $this->userMinutes = Entry::where('user_id', auth()->user()->id)
                                    ->whereDate('created_at', '=', Carbon::now())
                                    ->sum('minutes');


        if ($this->userHours < 10){
                $this->userHours = str_pad($this->userHours, 2, "0", STR_PAD_LEFT);
            }else {
                $this->userHours = $this->userHours;
            }

        if ($this->userMinutes < 10){
            $this->userMinutes = str_pad($this->userMinutes, 2, "0", STR_PAD_LEFT);
        }else {
            $this->userMinutes = $this->userMinutes;
        }
    }

    
}
