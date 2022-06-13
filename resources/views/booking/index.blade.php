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
    <div class="container  ">
        <!--button add trip-->
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('status.create')}}"> <button class="btn btn-lg btn-info text-black p-2"><i class="bi bi-plus-lg text-white p-2"></i>Voeg nieuwe status toe</button></a>
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
                <th scope="col">StatusCode</th>
                <th scope="col">Status</th>
                <th scope="col">Verwijderbaar</th>
                <th scope="col">PIN</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($statuses as $status)
                <tr>
                    <td>{{$status->id}}</td>
                    <td>{{$status->statusCode}}</td>
                    <td>{{$status->status}}</td>
                    <td>{{$status->verwijderbaar}}</td>
                    <td>{{$status->pin}}</td>
                    <td>
                        <form action="{{route('status.destroy', $status->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
