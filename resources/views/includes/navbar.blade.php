<nav class="navbar navbar-expand-sm navbar-dark bg-info mb-2">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
            <a class="navbar-brand" href='/'>{{config('app.name', 'ACHI-XPRESS')}}</a>
                    
            </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/posts">Blog</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if(Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/posts/create">Create Post</a> </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                
                                    <ul class="dropdown-menu extended logout" aria-labelledby="navbarDropdown">
                                        <li>
                                        <a href="/dashboard" class="dropdown-item"> Dashboard </a> 
                                        </li>
                                        <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        
                    </ul>
                </div>
                </div>
            </div>
        </nav>