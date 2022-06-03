@extends('layouts.Admin')
@section('content')



    <style>
        td form {
            display: inline-block;
            text-align: center;
        }
        th, td{
            text-align: left;
        }

        @media (max-width: 576px) {
            th td {
                display: block;


            }

        }
        .table{
            margin-top: 20px;

        }


    </style>
    <!--foreach trip-->
    <!--table responsive-->
    <div class="container mt-4">
        <!--button add trip-->
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('status.create')}}"> <button class="btn btn-lg btn-info text-black p-2"><i class="bi bi-plus-lg text-white p-2"></i>Voeg nieuwe tocht toe</button></a>
            </div>
            <div class="col-md-6">
                <!--search-->
                <form action="{{route('search')}}" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
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
                <th scope="col">Aantal dagen</th>
                <th scope="col">PIN</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($statuses as $status)
                <tr>
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->StatusCode }}</td>
                    <td>{{ $status->Status }}</td>
                    <td>{{ $status->Verwijderbaar}}</td>
                    <td>{{ $status->PIN}}</td>
                    <td>
                        <form action="#" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                                <i class="bi-gear "></i>
                                Bewerken
                            </button>
                        </form>

                        <form action="{{ route('status.destroy', $status->id) }}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je zeker dat je  tocht met ID={{$status->id}} uit de database wilt verwijderen?')">
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
