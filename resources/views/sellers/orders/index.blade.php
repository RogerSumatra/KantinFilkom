@extends('layouts.app')

@section('content')
    <h1>Seller Orders</h1>
    @foreach ($orders as $order)
        <div>
            <h3>Order #{{ $order->id }}</h3>
            <p>Status: {{ $order->status }}</p>
            <form action="{{ route('seller.orders.updateStatus', $order) }}" method="POST">
                @csrf
                @method('PATCH')
                <select name="status">
                    <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="preparing" {{ $order->status == 'preparing' ? 'selected' : '' }}>Preparing</option>
                    <option value="ready" {{ $order->status == 'ready' ? 'selected' : '' }}>Ready</option>
                </select>
                <button type="submit">Update Status</button>
            </form>
        </div>
    @endforeach
@endsection
