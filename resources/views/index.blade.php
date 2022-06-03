@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="booking-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-header">
                        <h1>Booking Form</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--startDatum-->
                                        <label for="startDatum">Start Datum</label>
                                        <input type="date" class="form-control" id="startDatum" name="startDatum" placeholder="Start Datum">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--eindDatum-->
                                        <label for="eindDatum">Eind Datum</label>
                                        <input type="date" class="form-control" id="eindDatum" name="eindDatum" placeholder="Eind Datum">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                                    </div>
                                </div>
                            </div>
                            <!--submit-->
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-success">Boek je reis</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection
