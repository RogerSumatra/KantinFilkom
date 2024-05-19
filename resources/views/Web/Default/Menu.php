<?php

?>

<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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
        }

        .border {
            margin: auto;
            justify-content: center;
            height: 3px;
            width: 80%;
            background-color: lightgrey;
            margin-bottom: 10px;
        }

        .resto-info {
            margin: auto;
            justify-content: space-between;
            width: 75%;
            display: flex;
        }

        .resto-info h2 {
            position: rela tive;
            margin-right: 10px;
        }

        .jam-buka {
            display: flex;
            align-items: flex-end;
        }

        .nav-pills {
            margin: auto;
            width: 75%;
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

        .align-right {
            margin-left: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Homepage.php">
                <img src="img/Logo.png" alt="Kantin FILKOM" width="80px">

            </a>
            <div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="resto-info">
        <h3>Nama Toko</h3>
        <div class="jam-buka">
            <h3>Buka</h3>
            <h3>8.00 - 16.00</h3>
        </div>
    </div>

    <div class="border"></div>

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">Makanan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Minuman</a>
        </li>
    </ul>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h4 id="scrollspyHeading1">Makanan</h4>
        <div class="row justify-content-center d-flex">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 id="scrollspyHeading2">Minuman</h4>
        <div class="row justify-content-center d-flex">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row">
                        <div class="menu-image col-md-6">
                            <img src="img/HomepageTop.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary align-right">Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>