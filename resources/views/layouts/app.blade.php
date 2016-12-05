<!DOCTYPE html>
<html>
<head>
    <title>Sustav za upravljanje knjiznicom</title>

    <!-- Favicon Files -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    @yield('styles')

    <!-- JavaScript Files -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">SUK</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                        <li><a href="{{ url('home') }}">Pocetna</a></li>
                        @if(Auth::user()->hasRole('member'))
                            <li><a href="{{ route('book.index') }}">Knjige</a></li>
                        @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('employee'))
                            <li><a href="{{ route('membership.index') }}">Clanarine</a></li>
                            <li><a href="{{ route('loan.index') }}">Posudbe</a></li>
                            <li><a href="{{ route('book.index') }}">Knjige</a></li>
                        @endif
                        @if(Auth::user()->hasRole('admin'))
                            <li><a href="{{ url('user') }}">Korisnici</a></li>
                        @endif
                        <li>
                            <a href="{{ url('/logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} | Odjava
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li><a href="{{ url('login') }}">Prijava</a></li>
                        <li><a href="{{ url('register') }}">Registracija</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
@yield('scripts')
</html>