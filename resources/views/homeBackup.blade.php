<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Gundam Store | Profile</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" style="height: 100%" type="">

    <style>
        .jumbotron {
            min-height: 370px;
        }

        #headjumb{
            text-align: center;
        }

        .map-container-2{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        
        .map-container-2 iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        #map{
          height: 400px;
          /* The height is 400 pixels */
          width: 89%;
          /* The width is the width of the web page */
        }

    </style>
</head>

<body class="">
{{-- Navbar --}}
<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style="background-color: #2F2963">
    <div class="container">

        <a class="navbar-brand" href="/home"><img class="" src="{{ asset('img/logowhite.png') }}" alt="" width="100%"
                height="50"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="fw-bold nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link" href="#">About</a>
                </li>
            </ul>

            <a href="/admin/dashboard" class="btn rounded-pill me-4 text-dark" role="button" style="background-color: #FFFFFF">
                <small class="fw-normal px-4">Admin</small>
            </a>
        </div>
    </div>
</nav>
{{-- Navbar --}}

<!-- Hero -->
<div class="container-full-bg" id="home">
    <div class="container-fluid pt-5 pl-5 pr-5 jumbotron text-white jumbotron-image shadow" 
         id="headjumb"
         style="background-image: url('{{ asset('img/banner.jpeg') }}');
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;">

        <br><br><br><br><br><br><br>
        <h1 class="display-3">Get Your Gunpla Now</h1>
        <p class="lead">
            Browse the gunpla you want by clicking the button below.
        </p>
        <br>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse now</a></p>
        <br><br><br>
    </div>
</div>
<!-- Hero -->

<!-- Card -->
<div style="background-color: #9AE19D">
    <div class="container pt-5">
        <div class="text-center px-5 mx-5">
            <h1 style="bold;">Some Gundam That We Sell</h1>
            <p>Lorem ipsum ppppppp pp p pppppppp p p ppppp.</p>
        </div>        
        <br><br>
        <div class="row row-cols-1 row-cols-md-4 g-3">
        @foreach ($gundam->slice(0, 4) as $data)
            <div class="card d-flex" style="width: 18rem; margin-left: 20px;">
                <img src="{{ $data->img }}" class="card-img-top flex-grow-1 py-2" alt="...">
                <div class="card-body px-5 py-5">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text">{{ $data->series }}</p>
                    <p class="card-text">{{ $data->desc }}</p>
                </div>
            </div>
        @endforeach
        </div>
        <br><br>
    </div>
</div>
<!-- Card -->

{{-- Contact --}}

{{-- Contact --}}

{{-- About --}}

{{-- About --}}

</body>

</html>
