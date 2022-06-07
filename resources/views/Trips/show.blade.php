@extends('layouts.Admin')
@section('content')

    <!--foreach a specific trip-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Tocht Verwijderen</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="Route">Route naam</label>
                            <input type="text" class="form-control" id="Route" name="Route" readonly
                                   value="{{ $trip->Route }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="Omschrijving">Omschrijving</label>
                            <input type="text" class="form-control" id="Omschrijving" name="Omschrijving" readonly
                                   value="{{$trip->Omschrijving  }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="AantalDagen">Aantal Dagen</label>
                            <!--min="1" max="10"-->
                            <input type="number" class="form-control" id="AantalDagen" readonly
                                   name="AantalDagen" value="{{ $trip->AantalDagen }}">

                        </div>
                    </div>
                </div>
                <!--button anuleren-->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <!--2 buttons side by side-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="{{ route('trips.index') }}">
                                        <button class="btn  btn-info  text-white">
                                            <i class="fas fa-arrow-left"></i>
                                            Annuleren
                                        </button>
                                    </a>
                                    <form action="{{ route('trips.destroy', $trip) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Weet je zeker dat je  tocht met ID={{$trip->id}} en de Naam: {{$trip->Route}} uit de database wilt verwijderen?')">
                                            <i class="bi-trash "></i>
                                            Verwijderen
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--verwijder-->
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
