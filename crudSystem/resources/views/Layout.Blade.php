<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title','Table')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarTogglerDemo01" 
                        aria-controls="navbarTogglerDemo01" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Consorcio Dominguez</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('stores') ? 'nav-focus' : ''}}" aria-current="page" href="{{route('stores')}}">Negocios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('managers') ? 'nav-focus' : ''}}" href="{{route('managers')}}">Encargados</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" 
                               type="search" 
                               placeholder="Search" 
                               aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="container-sm" style="margin-top:20px;">
            <h1>Crud System (@yield('header'))</h1>
            <hr>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert" style="padding-bottom:5px">
                @foreach ($errors->all() as $error)
                    <p>{{$errors}}</p>       
                @endforeach
            </div>
                
            @endif
            <table class="table table-hover" style="border:2px solid; ">
                <thead>
                    @yield('hd-table')
                </thead>
                <tbody>
                    @yield('bd-table')
                </tbody>
            </table>
            <hr style="margin-top:50px;">
            
            @include('Sections/Modal')
        </main>

        <script src="{{asset("js/events.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
                crossorigin="anonymous"></script>
    </body>
</html>