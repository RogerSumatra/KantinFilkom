@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <img src="{{ asset('path_to_placeholder_image') }}" alt="Placeholder Image" class="header-image">
            <h1>{{ $seller->nama_toko }}</h1>
            <span class="badge badge-success">Buka</span>
            <p>{{ $seller->jam_buka }}</p>
        </div>
        <!-- <div class="categories">
            @foreach (['Jenis1', 'Jenis2', 'Jenis3', 'Jenis4', 'Jenis5'] as $category)
                <button>{{ $category }}</button>
            @endforeach
        </div> -->
        <div class="menu-section">
            <h2>Jenis1</h2>
            <div class="row">
                @foreach ($menus as $menu)
                    <div class="col-md-4">
                        <div class="menu-item">
                            <img src="{{ asset('path_to_placeholder_image') }}" alt="Menu Image" class="menu-image">
                            <h3>{{ $menu->name }}</h3>
                            <p>{{ $menu->description }}</p>
                            <p>${{ $menu->price }}</p>
                            <form action="{{ route('cart.add', $menu) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="1" min="1">
                                <button type="submit" class="btn btn-success">+</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
