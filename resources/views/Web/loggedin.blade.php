<?php
$item = 5;
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        .nav-link:hover {
            background-color: black;
            color: white;
        }
        
        .nav-link {
            justify-content: center;
            display: flex;
            border-radius: 15px;
            width: 100px;
        }

        .navbar-nav {
            display: flex;
            flex-direction: row;
        }

        .nav-item {
            margin-right: 10px;
            margin-left: 10px;
        }

        .nav-pills {
            margin: auto;
            width: 75%;
            margin-bottom: 20px;
        }

        .menu-image {
            margin-top: 10px;
        }

        .text-harga {
            align-self: flex-end;
            margin-bottom: 10px;
        }

        .text-nama {
            margin-top: 10px;
        }

        .card-body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-body button {
            margin: 0 10px;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 10px;
        }

        .card-body h5 {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <img src="{{ asset('img/Logo.png') }}" alt="Kantin FILKOM" width="80px">
            </a>
            <div id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a type="button" href="pesanan.php">
                            <img src="{{asset ('img/list.png')}}" alt="" width="35px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="{{asset ('img/cart.png')}}" alt="" width="25px">
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center d-flex px-3">
                        <?php
                        for ($x = 0; $x < $item; $x++) {
                            echo '<div class="card mb-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div>
                                        <h5 class="text-nama">nama</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="menu-image">
                                        <img src="img/HomepageTop.png" class="card-img" alt="...">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="text-harga col-md-8">
                                    15.000
                                </div>
                                <div class="card-body text-center  col-md-4">
                                    <button class="btn btn-outline-success" type="submit">
                                        <h6>-</h6>
                                    </button>
                                    <h5>1</h5>
                                    <button class="btn btn-outline-success" type="submit">
                                        <h6>+</h6>
                                    </button>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Konfirmasi Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
