<!-- resources/views/web/konfirmasiPembayaran.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Kantin FILKOM | Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <button class="btn-pay" onclick="prosesPembayaran()">Klik untuk membayar</button>
    </div>
</body>
</html>
