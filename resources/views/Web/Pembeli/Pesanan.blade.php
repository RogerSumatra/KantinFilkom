<?php
$nama_toko = "didi";
$total_harga = "eek";
$item = 5;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
    </style>

</head>

<body>
    <main>
        <div class="container-lg">
            <div class="header-history">
                <h3>Daftar Pesanan</h3>
            </div>
            <div class="content">
                <div class="col-mb-12">
                    <div class="card mb-4">
                        <div class="row">
                            <div class="menu-image col-md-6">
                                <img src="{{$menus->picture}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        <?php
                                        echo $nama_toko;
                                        ?>
                                    </h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="total-harga">
                                            <?php
                                            echo $total_harga;
                                            ?>
                                        </p>
                                        <button class="btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Rincian</button>

                                    </div>
                                    </>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Rincian Pesanan</h1>
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
                                
                            </div>
                        </div>';
                                    }
                                    ?>

                                </div>
                                <div class="modal-footer">
                                    <p class="total-harga">
                                        <?php
                                        echo $total_harga;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

</body>

</html>