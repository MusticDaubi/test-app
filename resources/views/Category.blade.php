@extends('layout')
@section('title', 'Категория ' . $category->name)
@section('main-content')
    <div class="container">
        <div class="starter-template">
            <h1>
               {{$category->name}}
            </h1>
            <p>
                {{$category->description}}
            </p>
            <div class="row">
                @foreach($category->products as $product)
                    @include('card', compact('product'))
                @endforeach
            </div>
        </div>
    </div>
@endsection
