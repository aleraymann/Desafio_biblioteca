<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Library Let's</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="grad1">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/dashboard">Library Let's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i><u>
                                {{ Auth::user()->name }} </i></u><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard"><b>Dashboard</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/users"><b>Employees</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" id="navbarDropdown"
                        data-toggle="dropdown"><b>Books</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="nav-item dropdown-item" href="{{ url('/books/new') }}">
                            New Book</a>
                        <a class="nav-item dropdown-item" href="{{ url('/rentalbooks/new') }}"> Lend Book</a>
                    </div>
                </li>
            </ul>
        </div>
        @endguest
        </div>
    </nav>
    <main class="py-4">
        @yield('content')

    </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('javascript')

</body>

</html>