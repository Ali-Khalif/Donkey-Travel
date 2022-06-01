@extends('layouts.app')
@section('content')

    <!--foreach trip-->
        <!--table responsive-->
        <div class="container">
            <div class="table-responsive bg-white">
                <!--table-->
                <table class="table">
                    <!--table head-->
                    <thead class="bg-success">
                    <tr>
                        <th >#</th>
                        <th class="w-auto" >Omschrijving</th>
                        <th class="w-auto" >Route</th>
                        <th class="w-10" >AantalDagen</th>
                        <th class="w-auto bg-warning" >Action</th>
                    </tr>
                    </thead>
                    <!--table body-->
                    <tbody>
                    <!--foreach trip-->
                    @foreach($trips as $trip)
                        <tr>
                            <th scope="row">{{$trip->id}}</th>
                            <td>{{$trip->Omschrijving}}</td>
                            <td>{{$trip->Route}}</td>
                            <td>{{$trip->AantalDagen}}</td>
                            <td class="">

                               <button class="btn btn-warning">Wijzigen</button>
                                <button class="btn btn-danger">verwijder</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
