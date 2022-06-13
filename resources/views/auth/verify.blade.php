@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning">Verify Email Address</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        Voordat u toegang krijgt tot deze website, moet u eerst uw e-mailadres verifiëren.
                        Als u nog geen e-mail ontvangen hebt, klik dan op de knop hieronder.<br>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary p-2 m-0 align-baseline mt-3">
                                Klik hier voor een nieuwe verificatie Email
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
