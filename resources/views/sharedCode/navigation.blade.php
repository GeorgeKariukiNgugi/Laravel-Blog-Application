{{-- <div>
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background-color:rgb(210,78,232);">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/icon2.png" style="max-height:30px;">TechBuzz Nation.</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(0,0,0);"><strong>Home.</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(0,0,0);"><strong>Latest News</strong></a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(0,0,0);"><strong>Dropdown </strong></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                    <span class="navbar-text actions"> <a href="LogIn" class="login"><strong>Log In</strong></a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
    </div>
    </nav>
    </div>
 --}}


    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background-color:rgb(210,78,232);">
            <div class="container">
                    <a class="navbar-brand" href="/"><img src="assets/img/icon2.png" style="max-height:30px;">TechBuzz Nation.</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">
                            <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(0,0,0);"><strong>Home.</strong></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(0,0,0);"><strong>Latest News</strong></a></li>
                                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(0,0,0);"><strong>Dropdown </strong></a>
                                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                                    </li>
                                </ul>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
