<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .history-container {
            margin-top: 50px;
        }
        .order-card {
            margin-bottom: 20px;
        }
        .order-img {
            background-color: #ddd;
            width: 100%;
            height: 100%;
        }
        .order-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .order-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .order-price {
            font-size: 1rem;
        }
        .view-button {
            margin-left: auto;
        }
    </style>
</head>
<body>
    @auth
        @include('web.loggedin')
    @else
        @include('web.default')
    @endauth

    <div class="container history-container">
        <h2>Daftar Pesanan</h2>
        <div class="row">
            @foreach ($transactions as $transaction)
                <div class="col-md-12 order-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="order-img"></div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="order-details">
                                        <div>
                                            <h5 class="order-title">{{ $transaction->menu->menus_name }}</h5>
                                            <p class="order-price">{{ $transaction->total_price }}</p>
                                            <p class="order-shop">{{ $transaction->menu->seller->nama_toko }}</p>
                                        </div>
                                        <a href="{{ route('seller', $transaction->menu->seller->id) }}" class="btn btn-outline-success view-button">Lihat Toko</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
