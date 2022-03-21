<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function apiFun(){

        try {
            $response = Http::get('https://swapi.dev/api/people/1/', [
              
            ]);
        } catch (Exception $e) {
            $response = $e->getMessage();
        };

        return view('dashboard.starwars', ['response' => $response]);


    }
}
