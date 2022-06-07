@extends('layouts.Admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-header">
                        <h1>Status Wijzigen</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-header">
                        <a href="{{ route('status.index') }}">
                            <button class="btn btn-lg btn-info float-end text-white">
                                Terug naar overzicht
                            </button>
                        </a>
                    </div>
                </div>
                <form action="{{ route('status.update', $status->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Route">Status Code</label>
                                <!--select-->
                                <select class="form-control" id="StatusCode" name="StatusCode">
                                    <!--get values from database-->
                                    <option value="{{$status->StatusCode}}">{{$status->StatusCode}}</option>
                                    <option value="0">0</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Route">Status Omschrijving</label>
                                <input type="text" class="form-control" id="Status" name="Status"
                                       VALUE="{{$status->Status}}">
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="Verwijderbaar">Verwijderbaar</label>
                                <select class="form-control" id="Verwijderbaar" name="Verwijderbaar">
                                    <option value="{{$status->Verwijderbaar}}">{{$status->Verwijderbaar}}</option>
                                    <option value="Ja">Ja</option>
                                    <option value="Nee">Nee</option>
                                </select>
                            </div>
                        </div>
                        <!--PIN toekenning-->
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label for="PinToekenning">Pin Toekenning</label>
                                <select class="form-control" id="PIN" name="PIN">
                                    <option value="{{$status->PIN}}">{{$status->PIN}}</option>
                                    <option value="Ja">Ja</option>
                                    <option value="Nee">Nee</option>
                                </select>
                            </div>
                        </div>
                        <!--submit-->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-success">Opslaan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
