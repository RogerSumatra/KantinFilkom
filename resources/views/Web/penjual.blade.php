<!DOCTYPE html>
<html>

<head>
    <meta name="user-id" content="{{ Auth::id() }}">
    <title>Kantin FILKOM | Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <style>
        .nav-pills {
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
            max-height: 180px;
        }

        .card-menus {
            padding: 15px;

        }

        .card-body h5 {
            margin-bottom: 40px;
        }

        .align-right {
            margin-left: auto;
        }

        .btn-edit {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-edit:active {
            border: 0px;
        }


        .img-edit {
            width: 23px;
        }

        .footer {
            height: 50px;
        }

        .edit-container {
            margin-top: 20px !important;
        }

        .edit-jam {
            margin-bottom: 5px;
            margin-left: 10px;
        }

        .edit-toko {
            background: whitesmoke;
            padding: 5px 5px 5px 5px;
        }

        .img-preview {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    @auth
        @include('web.loggedin')
    @else
        @include('web.default')
    @endauth

    <div class="toko-image position-relative">
        <button class="btn btn-edit position-absolute" data-bs-toggle="modal" data-bs-target="#ubahGambarToko"
            type="submit">
            <img class="img-edit edit-toko" src="{{ asset('img/edit.png') }}" alt="">
        </button>
        <img src="{{ asset('storage/' . $toko->picture) }}" alt="{{ asset($toko->picture) }}">
    </div>

    <div class="toko-info">
        <h3>{{ $toko->nama_toko }}</h3>
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
            <button class="nav-link active" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan"
                type="button" role="tab" aria-controls="makanan" aria-selected="true">Makanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="minuman-tab" data-bs-toggle="tab" data-bs-target="#minuman" type="button"
                role="tab" aria-controls="minuman" aria-selected="false">Minuman</button>
        </li>
        <li>
            <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#tambahMenu" type="submit"><img
                    class="img-edit" src="{{ asset('img/edit.png') }}" alt=""></button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
            <div class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <h4 id="scrollspyHeading1">Makanan</h4>
                <div class="row justify-content-center d-flex ">
                    @foreach ($makanan as $item)
                        <div class="col-md-6">
                            <div class="card mb-4 card-menus">
                                <div class="row ">
                                    <div class="menu-image col-md-6">
                                        <img src="{{ asset('storage/' . $item->images) }}" class="card-img"
                                            alt="Gambar Makanan">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">{{ $item->menus_name }}</h6>
                                            </div>
                                            <div class="text-center mb-2">
                                                <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="row edit-container">
                                            <div class="tambah-btn my-2 d-md-flex justify-content-md-end">

                                                <button class="btn btn-edit" data-menu-id="{{ $item->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#ubahMenu" type="submit"><img
                                                        class="img-edit" src="{{ asset('img/edit.png') }}" alt=""></button>

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

        <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
            <div class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <h4 id="scrollspyHeading2">Minuman</h4>
                <div class="row justify-content-center d-flex">
                    @foreach ($minuman as $item)
                        <div class="col-md-6">
                            <div class="card mb-4 card-menus">
                                <div class="row ">
                                    <div class="menu-image col-md-6">
                                        <img src="{{ asset('storage/' . $item->images) }}" class="card-img"
                                            alt="Gambar Minuman">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">{{ $item->menus_name }}</h6>
                                            </div>
                                            <div class="text-center mb-2">
                                                <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="row edit-container">
                                            <div class="tambah-btn my-2 d-md-flex justify-content-md-end">

                                                <button class="btn btn-edit" data-menu-id="{{ $item->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#ubahMenu" type="submit"><img
                                                        class="img-edit" src="{{ asset('img/edit.png') }}" alt=""></button>

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
        // Ambil ID pengguna dari meta tag
        const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

        // Fungsi untuk menambah item ke keranjang
        function addToCart(menuId, quantity = 1) {
            $.ajax({
                url: '{{ route('cart.add') }}',
                method: 'POST',
                data: {
                    menu_id: menuId,
                    quantity: quantity,
                    user_id: userId, // Sertakan user_id
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert(response.message);
                    // Perbarui tampilan keranjang di sini jika diperlukan
                },
                error: function (response) {
                    console.error('Error:', response); // Log error di sini
                    alert('Gagal menambahkan ke keranjang');
                }
            });
        }

        // Event listener untuk tombol "Tambah"
        $(document).on('click', '.btn-tambah', function () {
            const menuId = $(this).data('menu-id');
            if (userId) {
                addToCart(menuId);
            } else {
                // Jika pengguna belum login, arahkan ke halaman login
                window.location.href = '{{ route('login') }}';
            }
        });

        // Event listener untuk tombol plus dan minus untuk memperbarui jumlah item
        $(document).on('click', '.btn-pls', function () {
            const menuId = $(this).data('menu-id');
            const counter = $(this).siblings('.counter-item');
            let quantity = parseInt(counter.text()) + 1;
            counter.text(quantity);
            addToCart(menuId, quantity);
        });

        $(document).on('click', '.btn-min', function () {
            const menuId = $(this).data('menu-id');
            const counter = $(this).siblings('.counter-item');
            let quantity = parseInt(counter.text()) - 1;
            if (quantity >= 1) {
                counter.text(quantity);
                addToCart(menuId, quantity);
            }
        });

        function previewFile() {
            const preview = document.getElementById('filePreview');
            const file = document.getElementById('fileUpload').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                // Convert file to base64 string and set as src of preview element
                preview.src = reader.result;
                preview.style.display = 'block';
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

    <!-- Modal -->
    <div class="modal fade" id="ubahGambarToko" tabindex="-1" aria-labelledby="ubahGambarTokoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ubahGambarTokoLabel">Ubah Gambar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('seller.updatePhoto') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Include CSRF token for security -->
                        <div class="form-group">
                            <label for="fileUpload">Upload File</label>
                            <input type="file" class="form-control-file" id="fileUpload" name="fileUpload"
                                onchange="previewFile()">
                        </div>
                        <div class="form-group img-preview">
                            <img id="filePreview" src="" alt="File Preview"
                                style="display: none; max-width: 100%; height: auto;">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahMenu" tabindex="-1" aria-labelledby="tambahMenuLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahMenuLabel">Tambah Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 justify-content-center d-flex">
                            <form action="{{ route('seller.tambahMenu') }}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Include CSRF token for security -->
                                <div class="form-group">
                                    <label for="fileUpload">Upload File</label>
                                    <input type="file" class="form-control-file" id="fileUpload" name="images"
                                        onchange="previewFile()">
                                </div>
                                <div class="form-group img-preview">
                                    <img id="filePreview" src="" alt="File Preview"
                                        style="display: none; max-width: 100%; height: auto;">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Menu</label>
                                    <input type="text" class="form-control" id="nama" name="menus_name">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label">Jenis</label>
                                    <select class="form-select" id="jenis" name="types">
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="price">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah Menu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubahMenu" tabindex="-1" aria-labelledby="ubahMenuLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ubahMenuLabel">Ubah Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 justify-content-center d-flex">
                            <form action="{{ route('seller.updatePhoto') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf <!-- Include CSRF token for security -->
                                <div class="form-group">
                                    <label for="fileUpload">Upload File</label>
                                    <input type="file" class="form-control-file" id="fileUpload" name="fileUpload"
                                        onchange="previewFile()">
                                </div>
                                <div class="form-group img-preview">
                                    <img id="filePreview" src="" alt="File Preview"
                                        style="display: none; max-width: 100%; height: auto;">
                                </div>


                            </form>
                        </div>
                        <div class="col-md-6">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>