@extends('layouts.app')

@section('content')
    <style>
        form {
            display: inline-block;
        }
    </style>
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
                        Welcome: <span class="text-uppercase text-lg text-success opacity-75  ">{{ Auth::user()->name }}</span> dit is uw profiel pagina.<br>

                        @if(Auth::user()->is_admin == true)
                            Als admin krijg je toegang tot de volgende pagina's klik hier:
                            <a href="{{url('admin')}}"> Admin panel</a>
                        @endif
                    </div>

                    <!--button toggle first element-->


                    <!--bootstrap 5 table-->
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
                                    <a href="#">
                                        <button class="btn btn-warning text-black px-3">
                                            Edit
                                        </button>
                                    </a>
                                    <!--form delete user-->
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-black px-3">
                                            Verwijder account
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--bootstrap 5 acordion-->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body justify-content-center">
                                    <!--edit profile-->
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Naam</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                           value="{{Auth::user()->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" readonly
                                                           value="{{Auth::user()->email}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tele">Telefoon</label>
                                                    <input type="text" class="form-control" id="tele" name="tele"
                                                           value="{{Auth::user()->telefoonnummer}}">
                                                </div>
                                            </div>



                                        </div>


                                        <button type="submit" class="btn btn-primary">Opslaan</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--accordion collapse when clicked again-->
                    <script>
                        var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
                        var collapseList = collapseElementList.map(function (collapseEl) {
                            return new bootstrap.Collapse(collapseEl)
                        })

                        var myCollapsible = document.getElementById('myCollapsible')
                        myCollapsible.addEventListener('hidden.bs.collapse', function () {
                            // do something...
                        })
                        </script>


                </div>
            </div>

        </div>

@endsection
