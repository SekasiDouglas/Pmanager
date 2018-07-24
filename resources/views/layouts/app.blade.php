<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Pmanager</title>
    {{--  
        <link rel="stylesheet" href="/css/bootstrap.css">
        
        <link rel="stylesheet" href="/css/bootstrap.js">  --}}
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top ">
                <div class="container ">
                    <div class="navbar-header">
                        
                        
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Monoton', cursive;
                        ">
                        
                        Project                         Manager
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
                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                        @cannot('isMod')
                             <li><a href="{{ route('companies.index') }}"><i class="fas fa-building" style="color:#54DEFD"></i> My Companies</a></li>
                        @endcannot
                        
                    
                        <li><a href="{{ route('projects.index') }}"><i class="fas fa-project-diagram" style="color:#54DEFD"></i> Projects</a></li>
                        <li><a href="{{ route('tasks.index') }}"><i class="fas fa-tasks" style="color:#54DEFD"></i> Tasks</a></li>
                        
                        {{-- @if (Auth::user()->role_id == 3) --}}
                        @can('isAdmin')
                            
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fas fa-user-tie" style="color:#54DEFD"></i> Admin <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('companies.index') }}"><i class="fas fa-chart-line" style="color:#54DEFD"></i>  All Projects</a></li>
                                <li><a href="{{ route('companies.index') }}"><i class="fas fa-user-circle" style="color:#54DEFD"></i>  All Users </a></li>
                                <li><a href="{{ route('companies.index') }}"><i class="fas fa-tasks" style="color:#54DEFD"></i>  All Tasks</a></li>
                                <li><a href="{{ route('companies.index') }}"><i class="fas fa-building" style="color:#54DEFD"></i>  All Companies</a></li>
                                
                            </ul>
                        </li>

                        @endcan
                        
                        {{-- @endif --}}
                        <li class="dropdown">
                            
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="far fa-user-circle" style="color:#54DEFD"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                              
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt" style="color:#54DEFD"></i> Logout
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @include('partials.errors')
        @include('partials.success')
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
