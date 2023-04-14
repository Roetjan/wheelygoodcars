<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    public function create_step1()
    {
        return view('cars.createCarForm');
    }

    public function create_step2(Request $request){
        $kenteken = str_replace('-','',$request->kenteken);
        $kenteken = strtoupper($kenteken);
        $api = Http::get('https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken='. $kenteken .'&$limit=1000&$$app_token=84A6fXMy11X3HoLa8GVLKhahJ');
        $jsonData = json_decode($api);
        if($jsonData == null) {
            return redirect()->route('cars.create')->withErrors(['kenteken' => 'Kenteken niet gevonden']);
        }
        
        return view('cars.CarInfoForm', ['jsonData' => $jsonData]);
    }

    public function create_car(Request $request){
        $car = new Car();
        $car->license_plate = $request->kenteken;
        $car->make = $request->merk;
        $car->model = $request->model;
        $car->weight = intval($request->massa);
        $car->production_year = substr($request->bouwjaar, 0, 4);
        $car->color = $request->kleur;
        $car->doors = $request->aantal_deuren;
        $car->seats = $request->aantal_zitplaatsen;
        $car->mileage = $request->kilometer_stand;
        $car->price = $request->vraagprijs;
        $car->user_id = Auth::user()->id;
        $car->save();
        return redirect()->route('home');
    }

    public function edit($id) {
        $car = Car::findOrFail($id);
        return view('cars.editCarForm', ['car' => $car]);
    }
}
