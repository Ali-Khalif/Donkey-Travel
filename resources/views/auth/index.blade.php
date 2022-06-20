@extends('layouts.app')

@section('content')

    <!--user profile-->
    <div class="container-xxl bg-secondary p-4">

        <div class="row justify-content-center">
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


                        <table class="table table-striped table-dark"></button>
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
                                    <!--form delete user-->
                                    <form action="#" method="POST">
                                        @csrf
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
