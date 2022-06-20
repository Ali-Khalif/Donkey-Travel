@extends('layouts.Admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Herberg Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        <a href="{{ route('herbergen.index') }}">
                            <button class="btn btn-lg btn-info float-end text-white">
                                Terug naar overzicht
                            </button>
                        </a>
                    </div>
                </div>

                <form action="{{ route('herbergen.update', $herbergen->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Naam"> Naam</label>
                                <input type="text" class="form-control" id="Naam" name="Naam"
                                       placeholder="Enter Naam" value="{{ $herbergen->Naam }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Adres">Adres</label>
                                <input type="text" class="form-control" id="Adres" name="Adres"
                                       placeholder="Enter Adres" value="{{ $herbergen->Adres }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Email"> Email</label>
                                <!--min="1" max="10"-->
                                <input type="email" class="form-control" id="Email" name="Email"
                                       placeholder="Enter Email" value="{{ $herbergen->Email }}">
                            </div>

                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Telefoon">Telefoon</label>
                                <input type="tel" class="form-control" id="Telefoon" name="Telefoon"
                                       placeholder="Enter Telefoon" value="{{ $herbergen->Telefoon }}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Coordinaten">Coordinaten</label>
                                <input type="text" class="form-control" id="Coordinaten" name="Coordinaten"
                                       placeholder="Enter Coordinaten" value="{{ $herbergen->Coordinaten }}">
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success  text-white">
                                    <i class="bi bi-check-all"></i>
                                    Wijzigen
                                </button>

                                <a href="{{ route('herbergen.index') }}">
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

