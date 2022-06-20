@extends('layouts.Admin')
@section('content')

    <style>


        @media (max-width: 576px) {
            th td {
                display: block;


            }

        }

        .table {
            margin-top: 20px;

        }


    </style>
    <!--foreach trip-->
    <!--table responsive-->
    <div class="container ">
        <!--button add trip-->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <button class="btn btn-lg btn-secondary text-black p-2"><i class="bi bi-house text-warning p-2"></i>
                        Boekingen
                    </button>
                </a>
            </div>
            <div class="col-md-6 w-50">
                <!--search-->
                <form class="w-100" action="{{route('search')}}" method="get">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <div class="input-group-append w-auto">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--responsive table-->
        <table class="table table-striped table-dark ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Klant</th>
                <th scope="col">Start Datum</th>
                <th scope="col">Pincode</th>
                <th scope="col">Eind Datum</th>
                <th scope="col">Trip</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <td>{{$booking->user->name}}</td>
                    <td>{{date('d-m-Y', strtotime($booking->StartDatum))}}</td>
                    <td>{{$booking->PINCode}}</td>
                    <td>{{date('d-m-Y', strtotime($booking->StartDatum . ' + ' . $booking->trips->AantalDagen . ' days'))}}</td>
                    <td class="">{{$booking->trips->Route}}lol</td>
                    <td class="">{{$booking->Status}}</td>
                    <td>
                        <form action="{{ route('booking.edit', $booking->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-warning">
                                <i class="bi-gear "></i>
                                Bewerken
                            </button>
                        </form>

                        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi-trash "></i>
                                Verwijderen
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
