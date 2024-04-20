@extends('layout')
@section('title')Главная страница@endsection
@section('main-content')
    <div class="container">
        <div class="starter-template">
            <h1>Все товары</h1>

            <div class="row">
                @foreach($products as $product)
                    @include('card', compact('product'))
                @endforeach
            </div>
        </div>
    </div>
@endsection
