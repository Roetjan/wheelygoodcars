@extends('layouts.app')

@section('main')
<form action="{{ route('cars.create')}}" method="post" class="form-control w-50 mx-auto mt-4">
@csrf

<div class="row">
    <div class="form-group">
            <label for="kenteken">kenteken</label>
            <input type="text" class="form-control" readonly value="{{ $jsonData[0]->kenteken }}" name="kenteken">
    </div>

    <div class="form-group">
        <label for="brand">merk</label>
        <input type="text" class="form-control" readonly value="{{$jsonData[0]->merk}}" name="merk">
    </div>
</div>
      
<div class="row">
    <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" readonly value="{{ $jsonData[0]->voertuigsoort}}" name="model">
    </div>

    <div class="form-group">
        <label for="production_year">Bouwjaar</label>
        <input type="datetime" class="form-control"  readonly value="{{ $jsonData[0]->datum_eerste_tenaamstelling_in_nederland_dt }}" name="bouwjaar">
    </div>
    <div class="form-group">
        <label for="Seats">aantal zitplaatsen</label>
        <input type="number" class="form-control" readonly value="{{ $jsonData[0]->aantal_zitplaatsen}}" name="aantal_zitplaatsen">
    </div>
    <div class="form-group">
        <label for="Doors">aantal_deuren</label>
        <input type="number" class="form-control" readonly value="{{ $jsonData[0]->aantal_deuren}}" name="aantal_deuren">
    </div>
    <div class="form-group">
        <label for="weight">Gewicht</label>
        <input type="text" class="form-control" readonly value="{{ $jsonData[0]->massa_rijklaar . "kg"}}" name="massa">
    </div>
    <div class="form-group">
        <label for="color">Kleur</label>
        <input type="text" class="form-control" readonly value="{{ $jsonData[0]->eerste_kleur}}" name="kleur">
    </div>
    <div class="form-group">
        <label for="km_stand">Kilometer Stand</label>
        <input type="number" class="form-control" name="kilometer_stand">
    </div>
    <div class="form-group">
        <label for="price">Vraagprijs</label>
        <input type="number" class="form-control" name="vraagprijs">
    </div>

    <button type="submit" class="btn btn-primary w-50 mt-2">aanbod plaatsen</button>
</form>
    
@endsection