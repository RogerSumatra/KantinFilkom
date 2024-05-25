<?php
$isLoggedin = true;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .form-control {
            width: 50%;
        }

        .container {
            margin-top: 30px;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .card-link:hover .card {
            transform: scale(1.02);
            transition: transform 0.2s;
        }

        .daftar-toko {
            margin-top: 70px;
            margin-bottom: 20px;
        }


        .footer {
            height: 50px;
        }
    </style>
</head>

<body>

    @auth
        @include('web.loggedin')
    @else
        @include('web.default')
    @endauth


    <div>
        <form class="search-container d-flex" role="search" action="{{route('menus.search')}}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Mau makan apa?" aria-label="Search"
                name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <div class="container text-center">
        <div class="row daftar-toko">
            <h1>Daftar Toko</h1>
        </div>
        <div class="row justify-content-center d-flex">
            @foreach($toko as $item)
                <div class="col-md-4">
                    <a href="{{ url('/menu', $item->id)}}" class="card-link">
                        <div class="card mb-4">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->nama_toko}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach



        </div>
    </div>
    <div class="footer"></div>


</body>

</html>
