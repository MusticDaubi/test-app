@extends('layout')
@section('title')Все категории@endsection
@section('main-content')
    <div class="container">
        <div class="starter-template">
            @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category', $category->code)}}">
                    <img src="http://laravel-diplom-1.rdavydov.ru/storage/categories/mobile.jpg">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
            @endforeach
        </div>
    </div>

@endsection
