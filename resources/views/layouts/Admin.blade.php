<!doctype html>
<html lang="en">
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/donkey.css') }}" rel="stylesheet">
</head>

<body>


<div class="container-xxl">

    <div class="left-nav">
        <ul class="nav flex-column">
            <!-- if user is logged in get users name and show it -->
            <li class="text-center text-capitalize bg-info p-2 xyz">
                <!--- if user is logged in get users name and show it else show a guest -->
                @if(Auth::check())
                    {{Auth::user()->name}}
                @else
                    Guest
                @endif

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('trips.index')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('trips.index')}}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('trips.index')}}">Trips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bookings</a>
            </li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <script>
                                document.getElementById('logout-form').addEventListener('submit', function (e) {
                                    e.preventDefault();
                                    document.getElementById('logout-form').submit();
                                });
                            </script>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</div>
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




<script src="{{ asset('js/app.js') }}" defer>


</script>
<!--container liquid admin panel-->


</body>
</html>
