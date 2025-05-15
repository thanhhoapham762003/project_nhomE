@extends('app')
@section('content')
    @foreach ($cartItems as $item => $value)
        {{ $value['productId'] }}
    @endforeach
@endsection
