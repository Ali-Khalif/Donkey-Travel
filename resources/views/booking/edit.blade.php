@extends('layouts.Admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Status Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        @if(Auth::user()->is_admin == true)
                            <a href="{{ route('booking.index') }}">
                                <button class="btn btn-lg btn-info float-end text-white">
                                    Terug naar overzicht
                                </button>
                            </a>
                        @else
                            <a href="{{ route('booking.MijnBooking') }}">
                                <button class="btn btn-lg btn-info float-end text-white">
                                    Terug naar overzicht
                                </button>
                            </a>
                        @endif

                    </div>
                </div>
                <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Route">Status Omschrijving</label>
                                <input type="text" class="form-control" id="Status" name="Status"
                                       VALUE="{{$booking->StartDatum}}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Verwijderbaar">Tocht</label>
                                <select name="Trip_id" id="Trip_id" class="form-control">
                                    @foreach($trips as $trip)
                                        <option value="{{ $trip->id }}">{{ $trip->Omschrijving }}
                                            ({{ $trip->AantalDagen }} dagen)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success  text-white">
                                    <i class="bi bi-check-all"></i>
                                    Wijzigen
                                </button>

                                <a href="{{ route('booking.MijnBooking') }}">
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
