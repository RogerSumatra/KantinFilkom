<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        img {
            display: flex;
            width: 40%;
            margin: auto;
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
    </style>
</head>

<body>

    <img src="{{ asset('img/qris.jpg') }}" alt="">
    <button type="button" class="btn btn-pay" data-bs-toggle="modal" data-bs-target="#exampleModal">Konfirmasi Pembayaran</button>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <form action="{{ route('homepage') }}">
                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </form>
                </div>
                <div class="modal-body row justify-content-center">
                    <img class="check-image" src="{{ asset('img/checked.png') }}" alt="">
                    <div class="modal-text">
                        Hore, pembayaran berhasil
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
