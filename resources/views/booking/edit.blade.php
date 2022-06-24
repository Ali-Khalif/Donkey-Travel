@extends('layouts.app')
@section('content')

    <div class="container vh-100">
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
                                <label for="Route">StartDatum</label>
                                <!--get startdatum from booking  and edit it-->
                                <input type="date" class="form-control" name="StartDatum"
                                       value="{{ $booking->StartDatum }}">
                                <input type="text" class="form-control" name="einddatum"
                                       value="Eind-Datum {{date('d-m-Y', strtotime($booking->StartDatum . ' + ' . $booking->trips->AantalDagen . ' days'))}}"
                                       readonly>
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Verwijderbaar">Tocht</label>
                                <select class="form-control" name="Trip_id">
                                    @foreach($trips as $trip)
                                        @if($trip->id == $booking->Trip_id)
                                            <option value="{{ $trip->id }}"
                                                    selected="selected">{{ $trip->Omschrijving }}
                                                ({{ $trip->AantalDagen }} dagen)
                                            </option>
                                        @else
                                            <option value="{{ $trip->id }}">{{ $trip->Omschrijving }}
                                                ({{ $trip->AantalDagen }} dagen)
                                            </option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Verwijderbaar">Status</label>
                                <select class="form-control" name="Status_id">
                                    @foreach($statuses as $status)
                                        @if($status->id == $booking->status->id)
                                            <option value="{{ $status->id }}"
                                                    selected="selected">{{ $status->Status }}</option>
                                        @else
                                            <option value="{{ $status->id }}">{{ $status->Status }}</option>
                                        @endif
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
                                @if(Auth::user()->is_admin == true)
                                    <a href="{{ route('booking.index') }}">
                                        <button type="button" class="btn btn-lg btn-danger  text-white">
                                            <i class="bi bi-x"></i>
                                            Annuleren
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('booking.MijnBooking') }}">
                                        <button type="button" class="btn btn-lg btn-danger  text-white">
                                            <i class="bi bi-x"></i>
                                            Annuleren
                                        </button>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
