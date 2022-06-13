<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Donkey travel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/donkey.css') }}" rel="stylesheet">
</head>
<body>
<div class="app" id="app">
    <header>
        <nav class="navbar navbar-expand-md bg-white navbar-light shadow-sm">
            <div class="container-xl">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Donkey Travel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('trips.index')}}">Trip</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('status.index')}}">Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('restaurant.index')}}">restaurant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <ul class="nav-bar navbar-nav dropdown px-lg-5">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth::user()->name}}
                            </li>
                            <ul class="dropdown-menu w-auto" aria-labelledby="dropdownMenuButton1">
                                <li class="dropdown-item">
                                    <a class="dropdown-item" href="{{route('home')}}">Profile</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Right Side Of Navbar -->
    </header>
</div>
<div>


    @if(session()->has('succes'))
        <div class="alert alert-success text-lg-center">
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('succes') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger text-lg-center">
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> {{ session()->get('error') }}
        </div>
    @endif


<!--end alert message-->

    @yield('content')


    <script src="{{ asset('js/app.js') }}" defer>
    </script>
    <script src="{{ asset('js/donkey.js') }}">
    </script>

</div>
</body>
</html>
