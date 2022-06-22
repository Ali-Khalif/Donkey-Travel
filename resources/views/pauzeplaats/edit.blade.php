@extends('layouts.Admin')
@section('content')
    <div class="container">
        <form action="{{ route('pauzeplaatsen.update', $pauzeplaatsen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="Naam">Pauzeplaats ID</label>
                        <input type="text" class="form-control" id="id" name="id"
                               value="{{ $pauzeplaatsen->id }}" readonly>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="Boeking">Boeking</label>
                        <select class="form-control" id="Booking" name="booking_id">
                            @foreach($bookings as $booking)
                                @if($booking->id == $pauzeplaatsen->Booking_id)
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
                <!--Restaurant_id-->
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="Restaurant_id">Restaurant</label>
                        <select class="form-control" id="Restaurant_id" name="restaurant_id">
                            @foreach($restaurants as $restaurant)
                                @if($restaurant->id == $pauzeplaatsen->Restaurant_id)
                                    <option value="{{ $restaurant->id }}" selected>{{ $restaurant->Naam }}</option>
                                @else
                                    <option value="{{ $restaurant->id }}">{{ $restaurant->Naam }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="Postcode">Status</label>
                        <select class="form-control" id="Status" name="status_id">
                            @foreach($statuses as $status)
                                @if($status->id == $pauzeplaatsen->Status_id)
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

                <!--opslaan-->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg text-white">
                                <i class="bi bi-check"></i>
                                Bevestig
                            </button>

                            <a href="{{ route('pauzeplaatsen.index') }}" class="btn btn-danger btn-lg text-white">
                                <i class="bi bi-x"></i>
                                Annuleer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
