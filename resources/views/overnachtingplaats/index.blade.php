@extends('layouts.Admin')
@section('content')

    <div class="container ">
        <!--button add trip-->
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('overnachtingen.create')}}">
                    <button class="btn btn-lg btn-info text-black p-2"><i class="bi bi-plus-lg text-white p-2"></i>overnachtingplaats
                        toevoegen
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
                <th scope="col">Naam</th>
                <th scope="col">Adres</th>
                <th scope="col">Email</th>
                <th scope="col">Telefoon</th>
                <th scope="col">Coordinaten</th>
                <th scope="col"> Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($overnachtingens as $overnachtingen)
                <tr>
                    <th scope="row">{{$overnachtingen->id}}</th>
                    <td>{{$overnachtingen->herberg->Naam}}</td>
                    <td>{{$overnachtingen->herberg->Adres}}</td>
                    <td>{{$overnachtingen->herberg->Email}}</td>
                    <td>{{$overnachtingen->herberg->Telefoon}}</td>
                    <td>{{$overnachtingen->herberg->Coordinaten}}</td>
                    <td>{{$overnachtingen->status->Status}}</td>
                    <td class="p-2">
                        <a href="{{route('overnachtingen.edit', $overnachtingen)}}">
                            <button class="btn btn-warning">
                                <i class="bi bi-pencil text-light "></i>
                            </button>
                        </a>
                        <form action="{{route('overnachtingen.destroy', $overnachtingen)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

@endsection
