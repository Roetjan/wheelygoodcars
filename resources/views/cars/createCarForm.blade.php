@extends('layouts.app')

@section('main')
    <form action="{{ route('cars.create')}}" class="mx-auto" method="post">
        @csrf
        <div class="form-control w-50 mx-auto mt-4">
            <label for="kenteken">Vul hier uw kenteken in</label>
            <input type="text" class="zoek_kentekenplaat" name="kenteken" id="kenteken" placeholder="DBB-11-B">

            <button type="submit" class="btn btn-primary">Zoek</button>
        </div>
    </form>
    @error('kenteken')
                <div class="alert alert-danger w-50 mx-auto">{{ $message }}</div>
                @enderror
@endsection
