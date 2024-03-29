

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Styles -->
   
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <img src="/logomarketingfocus.png" width="270" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-dark bg-dark" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Introducere
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item navbar-dark bg-dark" href="/serviciu">Introducere Servicii</a>
                    <a class="dropdown-item" href="/client">Creare Client</a>
                    <a class="dropdown-item" href="/companypresentation/create">Modificare Servicii</a>
                    <div class="dropdown-divider"></div>
                    
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Vizualizare
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/company">Date Firma</a>
                    <a class="dropdown-item" href="/companypresentation">Prezentare</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pressreleases">Comunicate De Presa</a>
                    <a class="dropdown-item" href="/jobs">Job-uri</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Publicare
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/companypresentation/publishing">Publicare Prezentare</a>
                    <a class="dropdown-item" href="/pressrelease/publishing">Publicare Comunicat de Presa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/job/publishing">Publicare Job</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/subscriptions">Abonamente si
                    servicii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/administration">Administrare</a>
            </li>

        </ul>
        @auth
            <ul class="navbar-nav">
                <li class="nav-link">{{ Auth::user()->name }}</li>
                <!-- logout-->
                <li>
                    <a class="nav-link" href="{{ url('/logout') }}"> logout </a>
                </li>
            </ul>
        @endauth
        @guest
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>
        @endguest
    </div>
</nav>

@yield('content')
@yield('content1')
@yield('content2')
