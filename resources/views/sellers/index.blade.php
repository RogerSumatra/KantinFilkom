@extends('layouts.app')

@section('content')
    <h1>All Sellers</h1>
    @foreach ($sellers as $seller)
        <a href="{{ route('sellers.show', $seller) }}">{{ $seller->name }}</a><br>
    @endforeach
@endsection
