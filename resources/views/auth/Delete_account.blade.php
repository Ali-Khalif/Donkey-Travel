@extends('layouts.app')
@section('content')
    <style>
        form {
            display: inline-block;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning">Account verwijderen</div>

                    <div class="card-body">
                        <form action="#" method="">
                            @csrf
                            <div class="form-group">
                                <label for="password">Wachtwoord</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-danger px2 mt-3"
                                    onclick="return confirm('Weet je zeker dat je je account wilt verwijderen?')">
                                Verwijder account
                            </button>
                        </form>
                        <a href="{{route('home')}}" class="btn btn-secondary mt-3 px-3">Terug</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
