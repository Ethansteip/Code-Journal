<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class DashboardController extends Controller
{
    public function index()
    {
        $entries = Entry::where('user_id', 1)->limit(5)->get();
        //dd($entries);
        return view('dashboard.index', ['entries' => $entries]);
    }
}
