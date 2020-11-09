<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('laman-utama') }}">Laman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bilik.index') }}">Bilik</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('daftar.papar') }}">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('log-masuk.papar') }}">Log Masuk</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('log-keluar') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Keluar</a>
                        </li>
                        <form id="logout-form" action="{{ route('log-keluar') }}" method="post">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>    
        </div>     
    </nav>

    {{-- @if (session()->has('mesej_aplikasi'))
        <div class="alert {{ session()->has('mesej_aplikasi_class') ? session('mesej_aplikasi_class') : 'alert-success' }}">
            <div class="container">
                {{ session('mesej_aplikasi') }}
            </div>
        </div>
    @endif --}}

    <main class="my-5">@yield('content')</main>

    @yield('modal')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>