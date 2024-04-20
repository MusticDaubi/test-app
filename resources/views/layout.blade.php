<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/starter-template.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="fs-4">Test</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('main')}}">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('categories')}}">Категории</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('basket')}}">Корзина</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('about')}}">О нас</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#">Login</a>
    </nav>
</div>
<div class="container mt-3">
    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif
    @yield('main-content')
</div>
