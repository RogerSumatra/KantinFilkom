<?php
$search_res = 3;
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

        .card {
            max-height: ;
        }

        .footer {
            height: 50px;
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

    <h1>Toko yang memiliki menu </h1>

    <div class="row justify-content-center d-flex">
        <?php
        for ($x = 0; $x < $search_res; $x++) {
            echo '<div class="col-md-12">
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
            </div>';
        }
        ?>
    </div>

</body>

</html>