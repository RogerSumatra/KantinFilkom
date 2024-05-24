<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        .header-history {
            border-bottom: 1px solid black;
            margin-bottom: 10px;
        }

        .image-pesanan {
            margin: 20px 0px 20px 0px;
            width: 100px;
            height: auto;
        }

        .card-border {
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            border-bottom: 1px solid grey;
            width: 98%;
        }

        .pesanan-list {}
    </style>

</head>

<body>
    <main>
        <div class="container-lg">
            <div class="header-history">
                <h3>Daftar Pesanan</h3>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-mb-12">
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
                            <div class="row card-border"></div>
                            <div class="row px-4">
                                pesnaan1 <br>
                                pesanan2
                            </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

</body>

</html>