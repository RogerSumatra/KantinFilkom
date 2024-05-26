<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        .nav-pills{
            width: 80%;
            margin: auto;
            margin-bottom: 10px !important;
        }

        .toko-image {
            width: 65%;
            margin: auto;
        }

        .toko-image img {
            margin-top: 50px;
            margin-bottom: 50px;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }

        .border {
            margin: auto;
            justify-content: center;
            height: 3px;
            width: 80%;
            background-color: lightgrey;
            margin-bottom: 10px;
        }

        .toko-info {
            margin: auto;
            justify-content: space-between;
            width: 75%;
            display: flex;
            margin-bottom: 10px;
        }

        .status-buka h3 {
            border-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
            margin-right: 20px;
            padding-bottom: 5px;
            color: white;
        }

        .jam-buka {
            display: flex;
            align-items: flex-end;
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

        .card-body h5 {
            margin-bottom: 40px;
        }

        .align-right {
            margin-left: auto;
        }

        .footer {
            height: 50px;
        }
    </style>
</head>

<body>

    @auth
    @include('web.loggedin')
    @else
    @include('web.default')
    @endauth

    <div class="toko-image">
        <img src="{{ asset($toko->picture) }}" alt="">
    </div>

    <div class="toko-info">
        <h3>{{ $toko->name }}</h3>
        <div class="jam-buka">
            <div class="status-buka">
                @if ($is_open)
                <h3 style="background-color: green;">Buka</h3>
                @else
                <h3 style="background-color: red;">Tutup</h3>
                @endif
            </div>
            <h3>{{ $jam_operasional }}</h3>
        </div>
    </div>

    <div class="border"></div>

    <ul class="nav nav-pills" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan" type="button" role="tab" aria-controls="makanan" aria-selected="true">Makanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="minuman-tab" data-bs-toggle="tab" data-bs-target="#minuman" type="button" role="tab" aria-controls="minuman" aria-selected="false">Minuman</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
            <div class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <h4 id="scrollspyHeading1">Makanan</h4>
                <div class="row justify-content-center d-flex">
                    @foreach ($makanan as $item)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="row">
                                <div class="menu-image col-md-6">
                                    <img src="{{ asset($item->images) }}" class="card-img" alt="Gambar Makanan">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $item->menus_name }}</h5>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="align-items-center">
                                    <button class="btn btn-outline-success btn-tambah" type="submit">Tambah</button>
                                    <button class="btn btn-outline-success btn-min" type="submit">
                                        <h6>-</h6>
                                    </button>
                                    <span class="counter-item"></span>

                                    <button class="btn btn-outline-success btn-pls" type="submit">
                                        <h6>+</h6>

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
            <div class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <h4 id="scrollspyHeading2">Minuman</h4>
                <div class="row justify-content-center d-flex">
                    @foreach ($minuman as $item)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="row">
                                <div class="menu-image col-md-6">
                                    <img src="{{ asset($item->images) }}" class="card-img" alt="Gambar Minuman">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $item->menus_name }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                            <button class="btn btn-outline-success" type="submit">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil referensi tombol-tambah
        const btnTambah = document.querySelector('.btn-tambah');

        // Ambil referensi tombol-min
        const btnMin = document.querySelector('.btn-min');

        // Ambil referensi tombol-pls
        const btnPls = document.querySelector('.btn-pls');

        // Ambil referensi elemen yang menampilkan jumlah item
        const jumlahItem = document.querySelector('.counter-item');

        // Inisialisasi jumlah item
        let itemCounter = 1;

        // Fungsi untuk mengubah tampilan tombol
        function toggleButtons() {
            btnTambah.style.display = 'none';
            btnMin.style.display = 'block';
            btnPls.style.display = 'block';
        }

        // Event listener untuk tombol-tambah
        btnTambah.addEventListener('click', () => {
            toggleButtons();
            jumlahItem.textContent = itemCounter;
        });

        // Event listener untuk tombol-min
        btnMin.addEventListener('click', () => {
            if (itemCounter > 1) {
                itemCounter--;
                jumlahItem.textContent = itemCounter;
            }
        });

        // Event listener untuk tombol-pls
        btnPls.addEventListener('click', () => {
            itemCounter++;
            jumlahItem.textContent = itemCounter;
        });
    </script>
</body>

</html>