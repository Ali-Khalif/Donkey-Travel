@extends('layouts.Admin')
@section('content')

    <div class="container">
        <!--button add trip-->
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('herbergen.create')}}">
                    <button class="btn btn-lg btn-info text-black p-2"><i class="bi bi-plus-lg text-white  p-2"></i>herbergen
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
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($herbergens as $herbergen)
                <tr>
                    <th scope="row">{{$herbergen->id}}</th>
                    <td>{{$herbergen->Naam}}</td>
                    <td>{{$herbergen->Adres}}</td>
                    <td>{{$herbergen->Email}}</td>
                    <td>{{$herbergen->Telefoon}}</td>
                    <td>{{$herbergen->Coordinaten}}</td>
                    <td class="p-2">
                        <a href="{{route('herbergen.edit', $herbergen)}}">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi-gear "></i>
                                Bewerken
                            </button>
                        </a>

                        <form action="{{ route('herbergen.destroy', $herbergen) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Weet je zeker dat je  herberg met ID={{$herbergen->id}} uit de database wilt verwijderen?')">
                                <i class="bi-trash "></i>
                            </button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection

