<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .back-btn {
            margin: 20px 0px 20px 20px;
            width: 50px;

        .header-pembayaran {
            margin: 80px 0px 100px 0px;
        }

        .subtotal {
            margin-bottom: 10px;
            justify-content: end;
        }

        .pajak {
            margin-bottom: 10px;
            justify-content: end;
        }

        .total {
            border-top: 1px solid black;
            margin-bottom: 10px;
            justify-content: end;
        }

        .membayar-btn {

            margin-top: 100px;
            width: 700px;
        }
    </style>

</head>

<body>
    <main>
        <a href="">
            <img src="{{asset ('img/back.png')}}" alt="" class="back-btn">
        </a>
        <div class="container-lg">

            <div class="header-pembayaran">

                <h3 class="nama-toko">
                    "{{$toko}}"
                </h3>
                <p>
                    Silahkan lanjut ke pembayaran
                </p>

            </div>
            <div class="content">
                <div class="container-lg">
                    <div class="row subtotal">
                        {{$item->menus_price}}
                    </div>
                    <div class="row pajak">
                        <!-- please fix this :3 -->
                        {{$item->menus_price}} *10
                    </div>
                    <div class="row total">
                        {{$item->total}}
                    </div>
                </div>
                <a href="">
                    <img src="{{asset ('img/membayar.png')}}" alt="" class="membayar-btn">
                </a>

                </a>
            </div>
    </main>

</body>

</html>