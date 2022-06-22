@extends('layouts.app')
@section('content')
    <style>
        form{
            display: inline-block;
        }
    </style>
    <div class="container min-vh-100">
        <div class="form-footer">
            <h3>Boekingen</h3>
            @if(Auth::check())
                @if(count($bookings) > 0)
                    <table class="table table-striped table-dark ">
                        <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Start Datum</th>
                            <th scope="col">Eind Datum</th>
                            <th scope="col">Tocht</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aanpassen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{$booking->user->name}} </td>
                                <td>{{date('d-m-Y', strtotime($booking->StartDatum))}}</td>
                                <td>{{date('d-m-Y', strtotime($booking->StartDatum . ' + ' . $booking->trips->AantalDagen . ' days'))}}</td>
                                <td class="text-warning">{{$booking->trips->Route}}lol</td>
                                <td class="text-warning">{{$booking->status->Status}}</td>


                                <td>
                                    <!--form edit-->
                                    <form action="{{ route('booking.edit', $booking->id) }}" method="GET">
                                        <button class="btn  btn-warning" type="submit">
                                            <i class="bi-gear "></i>
                                            Bewerken
                                        </button>
                                    </form>

                                    <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Weet je zeker dat je deze Boeking wilt verwijderen?')">
                                            <i class="bi-trash "></i>
                                            Verwijderen
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Je hebt nog geen boekingen</p>
                @endif
            @else
                <p>Je moet ingelogd zijn om boekingen te kunnen zien</p>
            @endif
        </div>
    </div>

@endsection
