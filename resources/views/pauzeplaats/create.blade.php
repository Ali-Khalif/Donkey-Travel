@extends('layouts.Admin')
@section('content')

    <div class="container">
        <form action="{{ route('pauzeplaatsen.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Overnachtingplaats toevoegen</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Boeking</label>
                                        <select class="form-control" name="booking_id">
                                            @foreach($bookings as $boeking)
                                                <option value="{{ $boeking->id }}">{{ $boeking->trips->Route }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Herberg</label>
                                        <select class="form-control" name="restaurant_id">
                                            @foreach($restaurants as $restaurant)
                                                <option value="{{ $restaurant->id }}">{{ $restaurant->Naam }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="status_id" readonly="readonly">
                                            @foreach($statuses as $status)
                                                @if($status->id == 1)
                                                    <option value="{{ $status->id }}" selected="selected">{{ $status->Status }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-lg text-white">
                                                <i class="bi bi-check"></i>
                                                Bevestig</button>

                                            <a href="{{ route('pauzeplaatsen.index') }}">
                                                <button class="btn btn-lg btn-info text-white">
                                                    <i class="bi bi-house"></i>
                                                    Annuleren
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
