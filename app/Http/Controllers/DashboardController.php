<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $date = Carbon::now();

        $contributionChartStartDate = $date;
        $contributionChartEndDate = $date->subYear();

        return view('Dashboard.Home', ['contributionChartEndDate' => $contributionChartEndDate, 'contributionChartEndDate' => $contributionChartEndDate]);
    }
}
