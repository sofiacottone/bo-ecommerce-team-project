<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <header
            class="navbar navbar-dark navbar-expand-lg sticky-top bg-dark flex-md-nowrap justify-content-between p-2 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">BoolMazon</a>
            {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
            <div class="hstack gap-2">
                <div class="navbar-nav me-2">
                    <div class="nav-item text-nowrap ms-2">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </header>

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu"
                    class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse h-100 position-fixed">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column gap-1 pb-2">
                            <li class="nav-item">
                                <a class="nav-link text-white rounded-1 {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white rounded-1 hstack justify-content-between {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.products.index') }}">
                                    <span>
                                        <i class="fa-solid fa-list-check fa-lg fa-fw"></i> Products
                                    </span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>