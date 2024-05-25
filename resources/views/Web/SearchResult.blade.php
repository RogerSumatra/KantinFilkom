<?php
$search_res = 3;
$harga_menu = "eek";
$nama_menu = "nama menu eek";
$nama_toko = "modol";
?>


<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .form-control {
            width: 50%;
        }

        .search-text {
            margin-left: 50px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .footer {
            height: 50px;
        }
    </style>
</head>

<body>
    <div>
        <form class="search-container d-flex" role="search" action="{{route('menus.search')}}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Mau makan apa?" aria-label="Search" name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <h3 class="search-text">

        Toko yang memiliki "{{$query}}"
    </h3>

    <div class="row justify-content-center d-flex px-5">
        @foreach ($menus as $item)
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="nama-toko" id="nama-toko">

                                @foreach ($toko as $tokos)
                                @if ($tokos->id==$item->seller_id)
                                {{$tokos->nama_toko}}
                                @endif
                                @endforeach
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body text-end">
                            <button class="btn btn-outline-success" type="submit">Lihat Toko</button>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="img/HomepageTop.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$item->menus_name}}
                            </h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="harga-menu">
                                    {{$item->menus_price}}
                                </p>
                                <button class="btn btn-outline-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>

</body>

</html>