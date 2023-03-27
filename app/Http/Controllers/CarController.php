<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    public function create_step1()
    {
        return view('cars.createCarForm');
    }

    public function create_step2(Request $request){
        $api = Http::get('https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken='.$request->kenteken.'&$limit=1000&$$app_token=84A6fXMy11X3HoLa8GVLKhahJ');
        $jsonData = json_decode($api);
        if($jsonData == null) {
            return redirect()->route('cars.create')->withErrors(['kenteken' => 'Kenteken niet gevonden']);
        }
        
        return view('cars.CarInfoForm', ['jsonData' => $jsonData]);
    }
}
