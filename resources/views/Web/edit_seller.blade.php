<!DOCTYPE html>
<html>

<head>
    <meta name="user-id" content="{{ Auth::id() }}">
    <title>Kantin FILKOM | Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
            position: relative;
        }

        .toko-image img {
            margin-top: 50px;
            margin-bottom: 50px;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }

        .edit-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
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
            position: relative;
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

        .tambah-item-btn {
            text-align: right;
            margin: 10px;
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
        <img src="{{ asset($seller->picture) }}" alt="">
        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#editTokoModal">&#9998;</span>
    </div>

    <div class="toko-info">
        <h3>{{ $seller->name }}</h3>
        @auth
        @if(Auth::user()->is_seller)
        <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#editTokoNameModal">&#9998;</span>
        @endif
        @endauth
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
                <div class="tambah-item-btn">
                    @auth
                    @if(Auth::user()->is_seller)
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambahItemModal">Tambah Item +</button>
                    @endif
                    @endauth
                </div>
                <div class="row justify-content-center d-flex ">
                    @foreach ($makanan as $item)
                    <div class="col-md-6">
                        <div class="card mb-4 card-menus">
                            <div class="row ">
                                <div class="menu-image col-md-6">
                                    <img src="{{ asset($item->images) }}" class="card-img" alt="Gambar Makanan">
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{ $item->menus_name }}</h6>
                                            @auth
                                            @if(Auth::user()->is_seller)
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#editMenuModal-{{ $item->id }}">&#9998;</span>
                                            @endif
                                            @endauth
                                        </div>
                                        <div class="text-center mb-2">
                                            <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tambah-btn my-2 d-md-flex justify-content-md-center">
                                            @if ($is_open)
                                            <button class="btn btn-outline-success btn-tambah" data-menu-id="{{ $item->id }}" type="submit">Tambah</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk Edit Menu -->
                    <div class="modal fade" id="editMenuModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editMenuModalLabel-{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editMenuModalLabel-{{ $item->id }}">Edit Menu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('menu.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="menuName" class="form-label">Nama Menu</label>
                                            <input type="text" class="form-control" id="menuName" name="menuName" value="{{ $item->menus_name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="menuPrice" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="menuPrice" name="menuPrice" value="{{ $item->price }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
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
                <h4 id="scrollspyHeading1">Minuman</h4>
                <div class="tambah-item-btn">
                    @auth
                    @if(Auth::user()->is_seller)
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambahItemModal">Tambah Item +</button>
                    @endif
                    @endauth
                </div>
                <div class="row justify-content-center d-flex">
                    @foreach ($minuman as $item)
                    <div class="col-md-6">
                        <div class="card mb-4 card-menus">
                            <div class="row">
                                <div class="menu-image col-md-6">
                                    <img src="{{ asset($item->images) }}" class="card-img" alt="Gambar Minuman">
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{ $item->menus_name }}</h6>
                                            @auth
                                            @if(Auth::user()->is_seller)
                                            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#editMenuModal-{{ $item->id }}">&#9998;</span>
                                            @endif
                                            @endauth
                                        </div>
                                        <div class="text-center mb-2">
                                            <p class="m-0">{{ number_format($item->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tambah-btn my-2 d-md-flex justify-content-md-center">
                                            @if ($is_open)
                                            <button class="btn btn-outline-success btn-tambah" data-menu-id="{{ $item->id }}" type="submit">Tambah</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk Edit Menu -->
                    <div class="modal fade" id="editMenuModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editMenuModalLabel-{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editMenuModalLabel-{{ $item->id }}">Edit Menu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('menu.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="menuName" class="form-label">Nama Menu</label>
                                            <input type="text" class="form-control" id="menuName" name="menuName" value="{{ $item->menus_name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="menuPrice" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="menuPrice" name="menuPrice" value="{{ $item->price }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Edit Toko -->
    <div class="modal fade" id="editTokoModal" tabindex="-1" aria-labelledby="editTokoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTokoModalLabel">Edit Toko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('toko.update', $seller->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="tokoName" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control" id="tokoName" name="tokoName" value="{{ $seller->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tokoImage" class="form-label">Gambar Toko</label>
                            <input type="file" class="form-control" id="tokoImage" name="tokoImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Tambah Item -->
    <div class="modal fade" id="tambahItemModal" tabindex="-1" aria-labelledby="tambahItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahItemModalLabel">Tambah Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="menuName" class="form-label">Nama Menu</label>
                            <input type="text" class="form-control" id="menuName" name="menuName" required>
                        </div>
                        <div class="mb-3">
                            <label for="menuPrice" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="menuPrice" name="menuPrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="menuImage" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="menuImage" name="menuImage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>