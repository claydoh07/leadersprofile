<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Victory Sta. Maria') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="/svg/v-icon.jpg" sizes="" type="image/png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div>
                        <img src="/svg/victory-logo-new.png" style="height: 20px; border-right: 1px solid #333;" class="pr-1">
                    </div>
                    <div class="pl-3">
                        Victory Sta. Maria
                    </div>
                </a>
                <!-- SEARCH -->
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                        <!-- Nav bar -->
                         <li class="nav-item" >
                             <a id="navbarDropdown" class="btn" href="/profile/{{  Auth::user()->id }}" role="button">         
                                <img src="{{ Auth::user()->profile->profileImage() }}" class="rounded-circle" style="height: 20px">&nbsp
                                    {{ Auth::user()->name }} 
                                    <span class="caret">
                                    </span>
                            </a>
                                
                        </li>

                        <li class="nav-item">
                            <a class="btn" class="btn btn-outline-dark" href="/">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="btn" href="/victorygroup/{{  Auth::user()->id }}">
                                Victory Groups
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>    

                           <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>                                 <img src="{{ Auth::user()->profile->profileImage() }}" class="rounded-circle" style="height: 20px">&nbsp
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
                                    <a class="dropdown-item" href="/">
                                        Home
                                    </a>
                                    <a class="dropdown-item" href="/profile/{{  Auth::user()->id }}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="/victorygroup/{{  Auth::user()->id }}">
                                        Victory Groups
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>-->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
