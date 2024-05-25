<?php
$makanan = 20;
$minuman = 20;
$makanan_string = 'ayam';
$toko_status = 'buka';
$jam_buka = '8.00 - 16.00';
$isLoggedIn = isset($_SESSION['user_id']);
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
        .toko-image {
            width: 65%;
            margin: auto;
        }

        .toko-image img {
            margin-top: 50px;
            margin-bottom: 50px;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }


        .border {
            margin: auto;
            justify-content: center;
            height: 3px;
            width: 80%;
            background-color: lightgrey;
            margin-bottom: 10px;
        }

        .toko-info {
            margin: auto;
            justify-content: space-between;
            width: 75%;
            display: flex;
            margin-bottom: 10px;
        }

        .status-buka h3 {
            border-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
            margin-right: 20px;
            padding-bottom: 5px;
            color: white;
        }

        .jam-buka {
            display: flex;
            align-items: flex-end;
        }

        .scrollspy-example {
            margin: auto;
            width: 80%;
        }

        .menu-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-image img {
            height: 100%;
            object-fit: cover;
        }

        .card-body h5 {
            margin-bottom: 40px;
        }

        .align-right {
            margin-left: auto;
        }

        .footer {
            height: 50px;
        }
    </style>
</head>

<body>

    @auth
        @include('web.navbar.loggedin')
    @else
        @include('web.navbar.default')
    @endauth


    <div class="toko-image">
        <img src="img/HomepageTop.png" alt="">
    </div>

    <div class="toko-info">
        <h3>Nama Toko</h3>
        <div class="jam-buka">
            <div class="status-buka">

                @if ($toko->jam_buka == 'buka')
                {
                <h3 style="background-color: green;">Buka</h3>
                }
                @elseif ($toko->jam_buka == 'tutup')
                {
                <h3 style="background-color: red;">Tutup</h3>'
                }
                @endif
            </div>

            <h3>{{ $toko->jam_buka }}</h3>

        </div>
    </div>

    <div class="border"></div>

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">
                <h5>Makanan</h5>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">
                <h5>Minuman</h5>
            </a>
        </li>
    </ul>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h4 id="    ">Makanan</h4>
        <div class="row justify-content-center d-flex" id="scrollspyHeading1">
            @foreach ($menu as $item)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="row">
                            <div class="menu-image col-md-6">
                                <img src="img/HomepageTop.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $item->menus_name }}</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                        <button class="btn btn-outline-success" type="submit">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <h4 id="">Minuman</h4>
        <div class="row justify-content-center d-flex" id="scrollspyHeading2">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-center">
                                <h5 class="card-title">Card title</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0">harga</p>
                                    <button class="btn btn-outline-success" type="submit">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="footer"></div>
</body>

</html>
