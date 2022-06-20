@extends('layouts.app')
@section('content')
    <div class="container mt-4 p-4 min-vh-100">
        <div class="row">
            <div class="booking-form col-md-6 mt-4 p-4 bg-warning bg-opacity-25 min-vh-100">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-header">
                            <h1>Donkey Travel </h1>
                            <h3>Boek hier uw reis</h3>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-body">
                            <form action="{{route('booking.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <!--startDatum-->
                                            <label for="StartDatum">Start Datum:</label>
                                            <!--startDatum date minumum a week from today-->
                                            <input type="date" id="StartDatum" name="StartDatum"
                                                   min="{{date('Y-m-d', strtotime('+1 week'))}}"
                                                   value="{{date('Y-m-d', strtotime('+1 week'))}}"
                                                   class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--eindDatum-->
                                            <label for="eindDatum">Tocht:</label>
                                            <select name="Trip_id" id="Trip_id" class="form-control">
                                                @foreach($trips as $trip)
                                                    <option value="{{ $trip->id }}">{{ $trip->Omschrijving }}
                                                        ({{ $trip->AantalDagen }} dagen)
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-4">
                                        <div class="form-group">
                                            @if(Auth::check())
                                                <input type="hidden" name="Klant_id" value="{{Auth::user()->id}}">
                                            @else

                                                <a href="{{route('login')}}">
                                                    <button class="btn btn-info text-black p-2">
                                                        je moet ingelogd zijn! <i
                                                            class="bi bi-plus-lg text-white p-2"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-4 mb-4">
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-lg btn-success">
                                                <i class="bi bi-sun text-warning"></i>
                                                Boeking Aanvragen
                                                <i class="bi bi-check text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 donkey-bg mt-4 p-4">
                <div class="col-md-12">
                    <div class="form-footer">
                        <h3>Boekingen</h3>
                        <!-- als gebruiker een gast is dan moet hij/zij eerst inloggen-->
                        @if(Auth::guest())
                            <a href="{{route('login')}}">
                                <button class="btn btn-info text-black p-2">
                                    <i class="bi bi-plus-lg text-white p-2"></i>
                                    Login om boekingen te kunnen zien
                                </button>
                            </a>
                        @else
                            <!--Als gebruiker is ingelogd dan krijgt hij/zij een optie om zijn boeking te bekijken-->
                        <a href="{{route('booking.MijnBooking', Auth::user()->id)}}">
                            <button class="btn btn-info text-black  px-3">
                                <i class="bi bi-calendar-check-fill text-dark p-2"></i>
                                Mijn Boekingen
                            </button>
                        </a> <br><br>
                        @endif

                        <a href="{{route('home')}}">
                            <button class="btn btn-info text-black px-3">
                                <i class="bi bi-person text-dark p-2"></i>
                                Mijn Profiel
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
