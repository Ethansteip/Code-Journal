<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Entry;

class ProgressComponent extends Component
{

    public $hoursLoggedThisWeek;
    public $weeklyGoal;

    public function findHoursLoggedThisWeek()
    {
        $weeklyGoal = 20;
        $now = Carbon::now();
        $startOfWeek = $now->startOfWeek()->format('y-m-d');
        $endOfWeek = $now->endOfWeek()->format('y-m-d');

        $this->hoursLoggedThisWeek = Entry::whereBetween('created_at', [$startOfWeek, $endOfWeek])->sum('hours');

        dd($this->hoursLoggedThisWeek) / 20;


    }

    public function render()
    {
        return view('livewire.progress-component');
    }
}
