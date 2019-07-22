{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark top">
        <a class="navbar-brand" href="/larsamp/public/">{{config("app.name",'LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/larsamp/public/signin">Sign In <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/larsamp/public/about">About</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/larsamp/public/posts">View Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item ">
                            <a class="nav-link" href="/larsamp/public/posts/create">Create Post</a>
                    </li>    
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-md navbar-dark bg-dark top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/larsamp/public/signin">Sign In <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/larsamp/public/about">About</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/larsamp/public/posts">View Posts</a>
                    </li>
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

                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
                            </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <ul>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('posts') }}/create">Create post</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
         
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        
                    @endguest
                </ul>
            </div>
        </div>
    </nav>