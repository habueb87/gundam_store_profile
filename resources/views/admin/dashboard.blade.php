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

    {{-- Table --}}
    <div class="container" style="background-color: #2a2822">
        <br><br><br>
        <div class="text-center text-light"><p>Dashboard Admin</p></div>
        <div class="row mb-4 text-light">
            <div class="col-8">
                <div class="card d-flex h-100" style="background-color: #38362e;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">Satria Alief Pratama Sofyan</div>
                            <div class="row">Pemrograman Berbasis Framework</div>
                            <div class="row">2041720183</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card d-flex h-100" style="background-color: #38362e;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row mb-2">Tugas Akhir Project Framework</div>
                            <div class="row">
                                <a href="https://www.google.com" class="btn btn-light" target="_blank">Go To GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="card" style="background-color: #38362e">
            <div class="card-body">
                <div class="container">
                    <div class="text-light text-center py-5"><h2>Gundam List Table</h2></div>
                    <div class="mb-5 px-4">
                        <div class="table">
                            <table class="table table-bordered text-light">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Gundam</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Img Url</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gundam as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->series }}</td>
                                            <td>{{ $item->desc }}</td>
                                            <td>{{ $item->img }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Table --}}

</body>

</html>
