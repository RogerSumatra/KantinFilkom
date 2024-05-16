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
            color: white !important;
        }

        .nav-link {
            justify-content: center;
            display: flex;
            border-radius: 15px;
            width: 100px;
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            /* Tambahkan margin top agar search bar tidak terlalu dekat dengan navigasi */
        }

        .form-control {
            width: 50%;
        }

        .container {
            margin-top: 30px;
        }

        .navbar-toggler {
            margin-bottom: 20px;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .card-link:hover .card {
            transform: scale(1.02);
            transition: transform 0.2s;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            position: relative;
            /* Dibutuhkan untuk penggunaan pseudo-element */
            background-color: transparent;
            /* Mengatur latar belakang ikon menjadi transparan */
        }

        .carousel-control-prev-icon::before,
        .carousel-control-next-icon::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna latar belakang yang akan diburamkan */
            filter: blur(5px);
            /* Menambahkan efek blur */
            z-index: -1;
            /* Menempatkan pseudo-element di belakang ikon */
            border-radius: 50%;
            /* Opsional: agar bentuk buram mengikuti bentuk ikon */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            z-index: 1;
            /* Memastikan ikon tetap di atas pseudo-element */
        }

        .daftar-toko{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand collapse" href="#">
                <img src="img/Logo.png" alt="Kantin FILKOM" width="8%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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

    <div>
        <form class="search-container" role="search" action="search_results.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Mau makan apa?" aria-label="Search"
                name="query">
        </form>

    </div>

    <div class="container text-center">
        <div class="row daftar-toko"><h1>Daftar Toko</h1></div>
        <div class="row justify-content-center d-none d-md-flex">
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card-link">
                    <div class="card mb-3">
                        <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div id="cardCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="" class="card-link">
                        <div class="card mb-3">
                            <img src="img/HomepageTop.png" class="card-img-top" alt="Toko Logo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Repeat the above block for each card, ensuring only one has "active" class -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


</body>

</html>