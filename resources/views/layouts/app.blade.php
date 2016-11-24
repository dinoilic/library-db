<!DOCTYPE html>
<html>
<head>
    <title>Sustav za upravljanje knjiznicom</title>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    @yield('styles')

    <!-- JavaScript Files -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('scripts')
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
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
                        <li class="active"><a href="{{ url('home') }}">Pocetna</a></li>
                        @if(Auth::user()->hasRole('member'))
                            <li><a href="#">Knjige</a></li>
                        @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('employee'))
                            <li><a href="#">Zaposlenik</a></li>
                        @endif
                        @if(Auth::user()->hasRole('admin'))
                            <li><a href="#">Administrator</a></li>
                        @endif
                        <li>
                            <a href="{{ url('/logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Odjava
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
</html>