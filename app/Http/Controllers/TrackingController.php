<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrackingController extends Controller
{

    public function index(){

        //Dates
        $date = Carbon::now();
        $currentYear = $date->year;
        $currentMonth = $date->format('F');

        $userEntries = Entry::where('user_id', auth()->user()->id)->get();
        //$sumOfEntryDurations = Entry::where('user_id', auth()->user()->id)->sum('duration');

        return view('dashboard.TrackingComponent', ['userEntries' => $userEntries, 'currentYear' => $currentYear, 'currentMonth' => $currentMonth]);
      
    }

    public function save(Request $request){

        $validated = $request->validate([
            'project' => 'required',
            'title' => 'required',
            'notes' => 'required',
            'hours' => 'required', 
            'minutes' => 'required'
        ]);

        $entry = new Entry;
        $entry->user_id = auth()->user()->id;
        $entry->fill($validated); 
        $entry->save();

        return redirect()->route('TrackingComponent');

    }

public function setWeek($plusMinus){
  
  $now = Carbon::now();
  $weekStartDate = $now->subDays($plusMinus)->startOfWeek();
  $thisWeeksArray = [];
  $weekDays = ['MON', 'TUE', 'WED', 'THUR', 'FRI', 'SAT', 'SUN'];

      for ($i = 0; $i < 7; $i++){
        if ($i == 0){
          $thisWeeksArray[] = [$weekDays[$i] => $weekStartDate->format('m-d')];
        }else {
          $thisWeeksArray[] = [$weekDays[$i] => $weekStartDate->addDay(1)->format('m-d')];
        }

      }

  	return $thisWeeksArray;
}


}