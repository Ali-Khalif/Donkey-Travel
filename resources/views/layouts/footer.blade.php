<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<footer class="bg-dark text-white">
    <div class="row">
        <div class=" col-md-4">
            <a href="{{url('/')}}" class="text-white nav-item list-unstyled">
            <h5 class="">Donkey Travel</h5>
            </a>
            <!--link-->
            <ul class="list-unstyled bg-opacity-25">
                <li class="nav-item">
                    <a href="{{route('booking.MijnBooking')}}" class="nav-link text-white :">Mijn Boeking</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white :">Mijn Account</a>
                </li>
            </ul>
        </div>

        <div class="col-md-4">
            <h5 class="text-info opacity-50">infomatie</h5>
            <ul class="list-unstyled bg-opacity-25">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white :">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white :">Privacy</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>Contact</h5>
            <ul class="list-unstyled bg-opacity-25">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white :">Facebook</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white :">Twitter</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12 mt-2">
            <div class="footer-copyright text-center text-lg">
                <p>Copyright &copy; 2022 All rights reserved.
                    Author: Ali Khalif & Tiago Moniz Olim
                </p>
            </div>
        </div>
    </div>
</footer>
@yield('footer')

</body>
</html>
