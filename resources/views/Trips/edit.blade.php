@extends('layouts.Admin')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Tocht Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        <a href="{{ route('trips.index') }}">
                            <button class="btn btn-lg btn-info float-end text-white">
                                Terug naar overzicht
                            </button>
                        </a>
                    </div>
                </div>
                <form action="{{ route('trips.update',$trip->id ) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Route">Route naam</label>
                                <input type="text" class="form-control" id="Route" name="Route"
                                       value="{{ $trip->Route }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Omschrijving">Omschrijving</label>
                                <input type="text" class="form-control" id="Omschrijving" name="Omschrijving"
                                       value="{{$trip->Omschrijving  }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="AantalDagen">Aantal Dagen</label>
                                <!--min="1" max="10"-->
                                <input type="number" class="form-control" id="AantalDagen" min="1" max="10"
                                       name="AantalDagen" value="{{ $trip->AantalDagen }}">

                            </div>
                        </div>
                    </div>

                    <!--submit-->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success">Wijzigingen opslaan</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



@endsection
