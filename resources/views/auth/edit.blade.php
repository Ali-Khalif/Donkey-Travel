@extends('layouts.app')

@section('content')

    <div class="container-xl vh-100">

        <h1>Wijzig jouw gegevens</h1>

        <form action="{{route('profile.update', Auth::user()->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{Auth::user()->name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{Auth::user()->email}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefoonnummer">Telefoon</label>
                        <input type="tel" class="form-control" id="tele" name="telefoonnummer"
                               value="{{Auth::user()->telefoonnummer}}">
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                     <i class="bi bi-save"></i> Opslaan</button>
                    <a href="{{route('home')}}">
                        <button type="button" class="btn btn-warning">
                            <!--icon home-->
                            <i class="bi bi-house"></i>
                            Annuleren</button>
                    </a>
                </div>
            </div>




        </form>
    </div>

@endsection
