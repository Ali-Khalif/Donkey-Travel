@extends('layouts.Admin')
@section('content')
a
    <div class="container">
        <form action="{{ route('overnachtingen.store') }}" method="POST">
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
                                        <select class="form-control" name="Booking_id">
                                            @foreach($bookings as $boeking)
                                                <option value="{{ $boeking->id }}">{{ $boeking->user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Herberg</label>
                                        <select class="form-control" name="Herberg_id">
                                            @foreach($herbergs as $herberg)
                                                <option value="{{ $herberg->id }}">{{ $herberg->Naam }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="Status_id" readonly="readonly">
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

                                            <a href="{{ route('overnachtingen.index') }}">
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
