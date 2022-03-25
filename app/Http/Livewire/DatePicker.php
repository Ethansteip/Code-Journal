<?php

namespace App\Http\Livewire;
use Illuminate\Support\Carbon;
use App\Http\Livewire\Request;
use App\Models\Entry;

use Livewire\Component;

class DatePicker extends Component
{   
    public $date;
    public $currentYear;
    public $currentMonth;
    public $thisWeeksArray;
    public $weekDays;
    public $weekStartDate;
    public $dateState;
    public $currentDate;
    public $selectedDate;
    public $whatIsTheCurrentMonday;
    public $datesThatHaveEntries;


    protected $listeners = ['findEntriesMatchingDate' => 'highlightSelectedDate', 'resetDate' => 'displayCurrentWeek'];


    public function mount()
    {
        $this->date = Carbon::now(); 
        $this->currentYear = $this->date->year; 
        $this->currentMonth = $this->date->format('F');
        $this->thisWeeksArray = [];
        $this->weekDays = ['MON', 'TUE', 'WED', 'THUR', 'FRI', 'SAT', 'SUN'];
        $this->datestate = 0;
        //$this->currentDate = Carbon::now()->format('y-m-d');
        $this->selectedDate = Carbon::now()->format('y-m-d');
        $this->datesThatHaveEntries = [];


    }

    //Ensures that this week's dates are displayed in
    //the date selector component on initial page load.
    public function booted()
    {
      $this->navigateWeeks('0');
    }


    public function render()
    {
        return view('livewire.date-picker');
    }

    public function highlightSelectedDate($date)
    {
      //on initial page open, select current date + highlight purple
      //when clicking another date, highlight purple.
      $this->selectedDate = $date;

    }

    //This method takes in a value from the date selector arrows (+7 / -7)
    //in the blade template and passes them here to reset the 
    //$thisWeeksArray collection, allowing users to move through
    //the month, one week at a time.
    public function navigateWeeks($plusMinusDays){
  
      $date = Carbon::now();
      $weekStartDate = $date->subDays($plusMinusDays + $this->dateState)->startOfWeek();
      $thisWeeksArray = [];
      $weekDays = ['MON', 'TUE', 'WED', 'THUR', 'FRI', 'SAT', 'SUN'];
      $this->currentMonth = $weekStartDate->format('F');

      for ($i = 0; $i < 7; $i++){
        if ($i == 0){
          $thisWeeksArray[] = [$this->weekDays[$i], $weekStartDate->format('d'), $weekStartDate->format('y-m-d'), $this->doesDateHaveEntry($weekStartDate->format('y-m-d'))];
        }else {
          $thisWeeksArray[] = [$this->weekDays[$i], $weekStartDate->addDay(1)->format('d'), $weekStartDate->format('y-m-d'), $this->doesDateHaveEntry($weekStartDate->format('y-m-d'))];
        }
      }
      
      $this->dateState += $plusMinusDays;
      $this->thisWeeksArray = $thisWeeksArray;
    }

    public function displayCurrentWeek()
    {
      $this->dateState = 0;
      $this->navigateWeeks('0');
      //$this->selectedDate = $date;
    }

    //Determine if a user has any associated entries on a given date.
    //Return value will be used to determine if the date gets a checkmark above it or not for the user.

    public function doesDateHaveEntry($date)
    {

        return Entry::where('user_id', auth()->user()->id)
          ->whereDate('created_at', $date)
          ->exists();
    }

    public function emitEntriesMatchingDateSelected($selectedDate)
    {
      $this->emit('emitEntriesMatchingDateSelected($selectedDate)');
    }

}
