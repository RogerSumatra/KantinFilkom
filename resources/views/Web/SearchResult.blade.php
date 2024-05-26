<!DOCTYPE html>
<html>

<head>
    <meta name="user-id" content="{{ Auth::id() }}">
    <title>Kantin FILKOM | Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .form-control {
            width: 50%;
        }

        .search-text {
            margin-left: 50px;
            margin-top: 20px;
            margin-bottom: 20px;
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
    <div class="container-lg">
        <div>
            <form class="search-container d-flex" role="search" action="{{ route('menus.search') }}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Mau makan apa?" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <h3 class="search-text">
            Toko yang memiliki "{{ $query }}"
        </h3>

        <div class="row justify-content-center d-flex px-5">
            @foreach ($menus as $item)

            <div class="card mb-4">
                <div class="row m-2">
                    <div class="col-md-9">
                        <h5 class="nama-toko" id="nama-toko">
                            @foreach ($toko as $tokos)
                            @if ($tokos->id == $item->seller_id)
                            {{ $tokos->nama_toko }}
                            @endif
                            @endforeach
                        </h5>

                    </div>
                    <div class="col-md-3  d-flex justify-content-center align-items-center">
                        <a href="{{ route('seller', $tokos->id) }}"><button class="btn btn-outline-success" type="submit">Lihat Toko</button></a>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 d-flex justify-content-center align-items-center mb-2">
                        <img src="{{ asset($tokos->images) }}" class="card-img" alt="Gambar Makanan">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title text-center">
                                    {{ $item->menus_name }}
                                </h5>
                                <div class="text-center">
                                    <p class="harga-menu">
                                        {{ $item->price }}
                                    </p>
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
            </div>

            @endforeach
        </div>
    </div>

    <script>
        // Ambil ID pengguna dari meta tag
        const userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

        // Fungsi untuk menambah item ke keranjang
        function addToCart(menuId, quantity = 1) {
            $.ajax({
                url: '{{ route("cart.add") }}',
                method: 'POST',
                data: {
                    menu_id: menuId,
                    quantity: quantity,
                    user_id: userId, // Sertakan user_id
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert(response.message);
                    // Perbarui tampilan keranjang di sini jika diperlukan
                },
                error: function(response) {
                    console.error('Error:', response); // Log error di sini
                    alert('Gagal menambahkan ke keranjang');
                }
            });
        }

        // Event listener untuk tombol "Tambah"
        $(document).on('click', '.btn-tambah', function() {
            const menuId = $(this).data('menu-id');
            if (userId) {
                addToCart(menuId);
            } else {
                // Jika pengguna belum login, arahkan ke halaman login
                window.location.href = '{{ route("login") }}';
            }
        });
    </script>
</body>

</html>