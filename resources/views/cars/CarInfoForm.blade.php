@extends('layouts.app')

@section('main')
<form action="" method="post" class="form-control w-50 mx-auto mt-4">
@csrf

<div class="row">
    <div class="form-group">
            <label for="kenteken">kenteken</label>
            <input type="text" class="form-control" readonly value="{{ $jsonData[0]->kenteken }}">
    </div>

    <div class="form-group">
        <label for="brand">merk</label>
        <input type="text" class="form-control" readonly value="{{$jsonData[0]->merk}}">
    </div>
</div>
      
<div class="row">
    <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" readonly value="{{ $jsonData[0]->voertuigsoort}}">
    </div>

    <div class="form-group">
        <label for="production_year">Bouwjaar</label>
        <input type="datetime" class="form-control"  readonly value="{{ $jsonData[0]->datum_eerste_tenaamstelling_in_nederland_dt }}">
    </div>
    <div class="form-group">
        <label for="Seats">aantal zitplaatsen</label>
        <input type="number" class="form-control" readonly value="{{ $jsonData[0]->aantal_zitplaatsen}}">
    </div>
    <div class="form-group">
        <label for="Doors">aantal_deuren</label>
        <input type="number" class="form-control" readonly value="{{ $jsonData[0]->aantal_deuren}}">
    </div>
    <div class="form-group">
        <label for="Doors">aantal_deuren</label>
        <input type="number" class="form-control" readonly value="{{ $jsonData[0]->aantal_deuren}}">
    </div>
    <div class="form-group">
        <label for="weight">Gewicht</label>
        <input type="text" class="form-control" readonly value="{{ $jsonData[0]->massa_rijklaar . "kg"}}">
    </div>
    <div class="form-group">
        <label for="color">Kleur</label>
        <input type="text" class="form-control" readonly value="{{ $jsonData[0]->eerste_kleur}}">
    </div>
    <div class="form-group">
        <label for="km_stand">Kilometer Stand</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Vraagprijs</label>
        <input type="number" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary w-50 mt-2">aanbod plaatsen</button>
</form>
    
@endsection