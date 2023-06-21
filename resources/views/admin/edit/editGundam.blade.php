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

        #headjumb {
            text-align: center;
        }

        .map-container-2 {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container-2 iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 89%;
            /* The width is the width of the web page */
        }
    </style>
</head>

<body class="" style="background-color: #2a2822">
    {{-- Navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style="background-color: #2F2963">
        <div class="container">

            <a class="navbar-brand" href="/home"><img class="" src="{{ asset('img/logowhite.png') }}"
                    alt="" width="100%" height="50"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="fw-bold nav-link {{ $title === 'dashboard' ? 'active' : '' }}" href="/admin/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link {{ $title === 'gundam' ? 'active' : '' }}" href="/admin/gundam">Gundam</a>
                    </li>
                </ul>

                <a href="/home" class="btn rounded-pill me-4 text-dark" role="button"
                    style="background-color: #FFFFFF">
                    <small class="fw-normal px-4">Back</small>
                </a>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}

    {{-- Form Edit --}}
    <div class="container text-light">
        <br><br><br>
        <div class="container" style="background-color: #2F2963">
            <h1 class="py-2">Edit Data Gundam</h1>
            <form action="/admin/gundam/{{ $id }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] }}">
                </div>
                <div class="form-group mb-3">
                    <label for="formGroupExampleInput2">Serier</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $data['series'] }}">
                </div>
                <div class="form-group mb-3">
                    <label for="formGroupExampleInput2">Description</label>
                    <input type="text" class="form-control" id="desc" name="desc" value="{{ $data['desc'] }}">
                </div>
                <div class="form-group mb-3">
                    <label for="formGroupExampleInput2">Img Url</label>
                    <input type="text" class="form-control" id="img" name="img" value="{{ $data['img'] }}">
                </div>
                <div class="container py-2"><button type="submit" class="btn btn-outline-light px-3">Submit</button></div>
            </form>
            <br>
        </div>
    </div>   
    {{-- Form Edit --}}

</body>

</html>
