<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ReXsteam') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('utility.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('styles')
</head>
<body>
    @php
        $user = Auth::user();
    @endphp

    <nav class="navbar navbar-expand-md navbar-dark bg-dark-blue shadow-sm py-3 fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'ReXsteam') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @if ($user && $user->inRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.games.index') }}">Manage Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.games.create') }}">Create Game</a>
                        </li>
                    @endif
                </ul>
                <form action="{{ route('games.index') }}" class="d-flex" style="margin-right: 15px;" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" name="q" aria-label="Search" value="{{ Request::query('q') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    @if ($user->inRole('member'))
                    <a href="{{ route('transactions.carts') }}"><img src="{{asset('cart.svg')}}"></a>
                    @endif
                    <div class="dropdown offset-md-1">
                        <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $user->full_name }} <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="right: 0; left: auto;">
                            <li><a class="dropdown-item" href="{{ route('profiles.index') }}">Profile</a></li>
                            @if ($user->inRole('member'))
                                <li><a class="dropdown-item" href="{{ route('profiles.friends') }}">Friends</a></li>
                                <li><a class="dropdown-item" href="{{ route('profiles.transactions') }}">Transaction History</a></li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-dark-blue text-secondary pt-4 pb-2 px-3 mt-4 fixed-bottom">
        <div class="d-flex justify-content-between">
            <p>&copy; 2021 ReXsteam. All rights reserved.</p>
            <div>
                <i class="socmed-icon fab fa-facebook"></i>
                <i class="socmed-icon fab fa-twitter"></i>
                <i class="fab fa-steam"></i>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9dec657e70.js"></script>

    @stack('scripts')
</body>
</html>
