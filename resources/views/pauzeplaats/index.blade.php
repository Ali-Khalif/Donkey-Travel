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
                <a href="{{route('pauzeplaatsen.create')}}">
                    <button class="btn btn-lg btn-info text-black p-2"><i class="bi bi-plus text-white  p-2"></i>
                        Pauzeplaats toevoegen
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
                <th scope="col">ID</th>
                <th scope="col">Omschrijving</th>
                <th scope="col">Route</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pauzeplaatsenn as $pauzeplaatsen)
                <tbody>
                <tr>
                    <td>{{$pauzeplaatsen->id}}</td>
                    <td>{{$pauzeplaatsen->booking_id}}</td>
                    <td>{{$pauzeplaatsen->restaurant->Naam}}</td>
                    <td>{{$pauzeplaatsen->status->Status}}</td>
                    <td>
                        <a href="{{route('pauzeplaatsen.edit', $pauzeplaatsen->id)}}">
                            <button class="btn btn-info">Edit</button>
                        </a>
                        <form action="{{route('pauzeplaatsen.destroy', $pauzeplaatsen->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection

