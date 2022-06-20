@extends('layouts.Admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1> Restaurant Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        <a href="{{ route('restaurant.index') }}">
                            <button class="btn btn-lg btn-info float-end text-white">
                                Terug naar overzicht
                            </button>
                        </a>
                    </div>
                </div>
                <form action="{{ route('restaurant.update', $restaurant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Naam"> Naam</label>
                                <input type="text" class="form-control" id="Naam" name="Naam"
                                       placeholder="Enter Naam" value="{{ $restaurant->Naam }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Adres">Adres</label>
                                <input type="text" class="form-control" id="Adres" name="Adres"
                                       placeholder="Enter Adres" value="{{ $restaurant->Adres }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Email"> Email</label>
                                <!--min="1" max="10"-->
                                <input type="email" class="form-control" id="Email" name="Email"
                                       placeholder="Enter Email" value="{{ $restaurant->Email }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Telefoon">Telefoon</label>
                                <input type="tel" class="form-control" id="Telefoon" name="Telefoon"
                                       placeholder="Enter Telefoon" value="{{ $restaurant->Telefoon }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Coordinaten">Coordinaten</label>
                                <input type="text" class="form-control" id="Coordinaten" name="Coordinaten"
                                       placeholder="Enter Beschrijving" value="{{ $restaurant->Coordinaten }}">
                            </div>
                        </div>

                        <!--update knop-->
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success  text-white">
                                    <i class="bi bi-check-all"></i>
                                    Wijzigen
                                </button>

                                <a href="{{ route('restaurant.index') }}">
                                    <button type="button" class="btn btn-lg btn-danger  text-white">
                                        <i class="bi bi-x"></i>
                                        Annuleren
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



