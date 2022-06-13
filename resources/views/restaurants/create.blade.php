@extends('layouts.Admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Restaurant Toevoegen</h1>
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
                <form action="{{ route('restaurant.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Naam"> Naam</label>
                                <input type="text" class="form-control" id="Naam" name="Naam"
                                       placeholder="Enter Naam">
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Adres">Adres</label>
                                <input type="text" class="form-control" id="Adres" name="Adres"
                                       placeholder="Enter Adres">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Email"> Email</label>
                                <!--min="1" max="10"-->
                                <input type="email" class="form-control" id="Email" name="Email"
                                       placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Telefoon">Telefoon</label>
                                <input type="tel" class="form-control" id="Telefoon" name="Telefoon"
                                       placeholder="Enter Telefoon">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Coordinaten"> Coordinaten</label>
                                <!--min="1" max="10"-->
                                <input type="text" class="form-control" id="Coordinaten" name="Coordinaten"
                                       placeholder="Enter Coordinaten">
                            </div>
                        </div>

                    </div>

                    <!--submit-->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success">Opslaan</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



@endsection
