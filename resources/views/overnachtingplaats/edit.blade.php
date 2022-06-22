@extends('layouts.Admin')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Overnachting Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        <a href="{{ route('overnachtingen.index') }}">
                            <button class="btn btn-lg btn-info float-end text-white">
                                Terug naar overzicht
                            </button>
                        </a>
                    </div>
                </div>
                <form action="{{ route('overnachtingen.update', $overnachtingen) }}"
                      method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Naam">Overnachting ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                       value="{{ $overnachtingen->id }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Boeking">Boeking</label>
                                <select class="form-control" id="Booking" name="Booking_id">
                                    @foreach($bookings as $booking)
                                        @if($booking->id == $overnachtingen->Booking_id)
                                            <option value="{{ $booking->id }}" selected>{{ $booking->user->name }}
                                                (Route: {{$booking->trips->Omschrijving}} )
                                            </option>
                                        @else
                                            <option value="{{ $booking->id }}">{{ $booking->user->name}}
                                                (Route: {{$booking->trips->Omschrijving}} )
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--Herberg_id-->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Herberg_id">Herberg</label>
                                <select class="form-control" id="Herberg_id" name="Herberg_id">
                                    @foreach($herbergs as $herberg)
                                        @if($herberg->id == $overnachtingen->Herberg_id)
                                            <option value="{{ $herberg->id }}" selected>{{ $herberg->Naam }}</option>
                                        @else
                                            <option value="{{ $herberg->id }}">{{ $herberg->Naam }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Postcode">Status</label>
                                <select class="form-control" id="Status" name="Status_id">
                                    @foreach($statuses as $status)
                                        @if($status->id == $overnachtingen->Status_id)
                                            <option value="{{ $status->id }}" selected>{{ $status->Status }}
                                                (geselecteerd)
                                            </option>
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

                                <a href="{{ route('overnachtingen.index') }}">
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
