<!DOCTYPE html>
<html>

<head>
    <meta name="user-id" content="{{ Auth::id() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


    <style>
        .nav-link:hover {
            background-color: black;
            color: white;
        }

        .nav-link {
            justify-content: center;
            display: flex;
            border-radius: 15px;
            width: 100px;
        }

        .navbar-nav {
            display: flex;
            flex-direction: row;
        }

        .nav-item {
            margin-right: 10px;
            margin-left: 10px;
            margin-top: auto;
            margin-bottom: auto;
        }

        .menu-image {
            margin-top: 10px;
        }

        .text-harga {
            align-self: flex-end;
            margin-bottom: 10px;
        }

        .text-nama {
            margin-top: 10px;
        }

        .card-body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-body button {
            margin: 0 10px;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 10px;
        }

        .card-body h5 {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ asset('img/Logo.png') }}" alt="Kantin FILKOM" width="80px">
            </a>
            <div id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a type="button" href="{{ route('pesanan') }}">
                            <img src="{{ asset('img/list.png') }}" alt="" width="25px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="{{ asset('img/cart.png') }}" alt="" width="25px">
                        </button>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="cart-items" class="row justify-content-center d-flex px-3">
                        <!-- Daftar Pesanan Akan Dimuat di Sini -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="confirm-order">Konfirmasi Pesanan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $('#confirm-order').on('click', function () {
                window.location.href = '{{ route("konfirmasiPembayaran") }}';
            });
            
            // Memuat item di keranjang saat modal dibuka
            $('#exampleModal').on('show.bs.modal', function () {
                loadCartItems();
            });

            // Menambahkan item ke keranjang
            $('.add-to-cart').on('click', function () {
                var menuId = $(this).data('menu-id');
                var quantity = $(this).data('quantity');

                $.ajax({
                    url: '{{ route('cart.add') }}',
                    method: 'POST',
                    data: {
                        menu_id: menuId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert(response.message);
                        loadCartItems();
                    }
                });
            });

            // Memuat item di keranjang
            function loadCartItems() {
                $.ajax({
                    url: '{{ route('cart.items') }}',
                    method: 'GET',
                    success: function (response) {
                        var items = response.items;
                        var cartItemsHtml = '';
                        var modalfooter = '';
                        var subtotal = 0;
                        var cartItemsData = JSON.stringify(items);


                        items.forEach(function (item) {
                            subtotal += item.menu.price * item
                                .quantity; // assuming 'price' and 'quantity' are correct fields

                            cartItemsHtml += `
                            <div class="card mb-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div>
                                            <h5 class="text-nama">${item.menu.menus_name}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="menu-image">
                                            <img src="${item.menu.images}" class="card-img" alt="${item.menu.menus_name}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-harga col-md-8">
                                        ${numeral(item.menu.price).format('0,0')}
                                    </div>
                                    <div class="card-body text-center col-md-4">
                                        <button class="btn btn-outline-success update-cart-item" data-id="${item.id}" data-quantity="${item.quantity - 1}">
                                            <h6>-</h6>
                                        </button>
                                        <h5>${item.quantity}</h5>
                                        <button class="btn btn-outline-success update-cart-item" data-id="${item.id}" data-quantity="${item.quantity + 1}">
                                            <h6>+</h6>
                                        </button>
                                        <button class="btn btn-danger remove-cart-item" data-id="${item.id}">
                                            <h6>x</h6>
                                        </button>
                                    </div>
                                </div>
                            </div>`;
                        });


                        modalfooter += `
                        <h5>${numeral(subtotal).format('0,0')}</h5>`;

                        $('#cart-items').html(cartItemsHtml);
                        $('#modalfooter').html(modalfooter);
                        $('#cart-items-data').val(cartItemsData);

                    }
                });
            }

            // Memperbarui item di keranjang
            $(document).on('click', '.update-cart-item', function () {
                var itemId = $(this).data('id');
                var quantity = $(this).data('quantity');

                if (quantity < 1) return;

                $.ajax({
                    url: `/cart/items/${itemId}`,
                    method: 'PUT',
                    data: {
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert(response.message);
                        loadCartItems();
                    }
                });
            });

            // Menghapus item dari keranjang
            $(document).on('click', '.remove-cart-item', function () {
                var itemId = $(this).data('id');

                $.ajax({
                    url: `/cart/items/${itemId}`,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert(response.message);
                        loadCartItems();
                    }
                });
            });
        });
    </script>


</body>

</html>