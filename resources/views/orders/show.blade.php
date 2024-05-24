@extends('layouts.app')

@section('content')
    <h1>Order #{{ $order->id }}</h1>
    <p>Status: {{ $order->status }}</p>
    <h2>Items</h2>
    <ul>
        @foreach ($order->orderItems as $item)
            <li>{{ $item->menu->name }} - {{ $item->quantity }} x ${{ $item->price }}</li>
        @endforeach
    </ul>
    <p>Total: ${{ $order->total_price }}</p>
@endsection
