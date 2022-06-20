@extends('layouts.app')

@section('content')
    <style>
        form {
            display: inline-block;
        }
    </style>
    <div class="container-xxl min-vh-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body px-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Welcome: <span
                            class="text-uppercase text-lg text-success opacity-75  ">{{ Auth::user()->name }}</span> dit
                        is uw profiel pagina.<br>

                        @if(Auth::user()->is_admin == true)
                            Als admin krijg je toegang tot de volgende pagina's klik hier:
                            <a href="{{url('admin')}}"> Admin panel</a>
                        @endif
                    </div>
                    <div class="container-xxl">
                        <!--responsive table-->
                        <table class="table table-striped table-dark ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefoonnummer</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{Auth::user()->email}}</td>
                                <td>{{Auth::user()->telefoonnummer}}</td>
                                <!--let user edit his profile-->
                                <td>
                                    <a href="{{route('profile.edit', Auth::user()->id)}}">
                                        <button class="btn btn-warning text-black px-3">
                                            Edit
                                        </button>
                                    </a>
                                    <!--user kan delete zijn account-->
                                    <form action="{{route('profile.destroy', Auth::user()->id)}}" method="POST"
                                          onclick="return confirm('{{Auth::user()->name}} Weet je zeker dat je je account wilt verwijderen? dit kan niet ongedaan gemaakt worden.')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-black px-3">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
