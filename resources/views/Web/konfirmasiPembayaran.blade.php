<!-- resources/views/web/konfirmasiPembayaran.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <style>
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-pay {
            display: block;
            width: 100%;
            background-color: #ff4d4d;
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .check-image{
            width: 300px;
        }

        .modal-text{
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">{{ $toko->nama_toko }}</h1>
        <p class="text-center">Silahkan lanjut ke pembayaran</p>
        <hr>
        <div class="d-flex justify-content-between">
            <span>Subtotal</span>
            <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
        </div>
        <div class="d-flex justify-content-between">
            <span>PPN</span>
            <span>Rp {{ number_format($ppn, 0, ',', '.') }}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <strong>Total Harga</strong>
            <strong>Rp {{ number_format($totalHarga, 0, ',', '.') }}</strong>
        </div>
        <button type="button" class="btn btn-pay" data-bs-toggle="modal" data-bs-target="#exampleModal">Klik untuk
            membayar</button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <form action="{{route('homepage')}}">
                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </form>
                </div>
                <div class="modal-body row justify-content-center">
                    <img class="check-image" src="{{asset('img/checked.png')}}" alt="">
                    <div class="modal-text">
                        Hore, pembayaran berhasil
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
