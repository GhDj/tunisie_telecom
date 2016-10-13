<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href=" {{ asset('/css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">

                <img src="{{ asset('images/logo.png') }}" alt="Tunisie Telecom" width="100px">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Connexion</a></li>

                @else


                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">

                            <div class="arrow-down"></div>
                            <span id="logout" class="glyphicon glyphicon-off"></span>
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar" class="pull-left">
    <ul>
        <li><a href="{{ route('user.index') }}">
                <img src="{{ asset('images/home.png') }}" alt="">
            </a>
        </li>

        <li>
            <a href="{{ route('user.create') }}">
                <img src="{{ asset('images/add.png') }}" alt="">
            </a>
        </li>


    </ul>
</div>



@yield('content')

<!-- Scripts -->
<script src=" {{ asset('js/app.js') }}"></script>


</body>
</html>
