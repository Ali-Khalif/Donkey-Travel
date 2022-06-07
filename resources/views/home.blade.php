@extends('layouts.app')

@section('content')
    <div class="container-xxl">
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
                        Welcome {{ Auth::user()->name }} dit is uw profiel pagina.<br>

                        @if(Auth::user()->is_admin == true)
                            Als admin krijg je toegang tot de volgende pagina's klik hier:
                            <a href="{{route('status.index')}}"> Admin panel</a>
                        @endif

                    </div>
                    <!--bootstrap 5 table-->
                    <div class="container-xxl">
                        <!--responsive table-->
                        <table class="table table-striped table-dark ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tele</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{Auth::user()->email}}</td>
                                <td>tele</td>
                                <!--let user edit his profile-->
                                <td>
                                    <a href="#">
                                        <button class="btn btn-lg btn-info text-black p-2">
                                            Edit
                                        </button>
                                    </a>

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
