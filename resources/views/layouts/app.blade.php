<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:url"           content="https://jusiks.org" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Jahangirnagar University Islamic Conference 2024"/>
    <meta property="og:description"   content="Jahangirnagar University organizing an Islamic Conference 2024 in their campus on December 14, 2024" />
    <meta property="og:image"         content="http://jusiks.org/side.png" />

    <title>{{ config('app.name', 'JUIC') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('build/assets/app-BaVMVknW.css') }}">

    <style>
        .dashboard_banner{
            width: 450px;
            max-width: 100%;
            padding: 30px 0 0 0;
        }
        .logo{
            width: 45px;
        }

        body{
            background: url('{{ url('bg.png') }}');


            background-attachment: fixed;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ url('build/assets/app-CrG75o6_.js') }}"></script>
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('logo.jpg') }}" alt="" class="logo"> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="footer text-center">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block pt-4 mt-4 pb-2 mb-2" style="font-size: 18px;">Built with <svg fill="#ff0000" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-20.16 -20.16 544.20 544.20" xml:space="preserve" stroke="#ff0000" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke-width="0.00503876"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="9.069768"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M469.361,71.689c-32.071-35.681-70.026-54.532-109.761-54.532c-44.309,0-84.27,27.01-107.654,71.638 c-23.334-44.628-62.993-71.638-106.857-71.638c-39.743,0-76.649,18.331-109.719,54.482 C-3.392,114.042-25.273,210.34,50.889,282.356c35.143,33.221,193.779,200.074,195.374,201.753c1.586,1.662,3.785,2.61,6.077,2.61 h0.008c2.291,0,4.482-0.94,6.068-2.594c1.603-1.679,160.667-168.163,195.458-201.837 C528.576,209.962,507.274,113.866,469.361,71.689z"></path> </g> </g> </g></svg> by <a href="https://www.cloudhousebd.com/" target="_blank">Cloud House Technologies</a> from Micro Initiatives. <br>Powered by Connecting Dots Bangladesh.</span>
    </div>

</body>
</html>
