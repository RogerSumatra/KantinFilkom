@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>
    @foreach ($menus as $menu)
        <div>
            <h3>{{ $menu->name }}</h3>
            <p>{{ $menu->description }}</p>
            <p>${{ $menu->price }}</p>
            <form action="{{ route('cart.add', $menu) }}" method="POST">
                @csrf
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    @endforeach
@endsection
