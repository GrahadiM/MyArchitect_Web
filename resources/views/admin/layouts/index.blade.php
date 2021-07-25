<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.layouts.head')
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
</head>
<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        @include('admin.layouts.sidebar')

    <!--Start topbar header-->
    <header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
            <i class="icon-menu menu-icon"></i>
        </a>
        </li>
        {{-- <li class="nav-item">
            <form class="search-bar">
            <input type="text" class="form-control" placeholder="Enter keywords">
            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
        </li> --}}
        </ul>
        
        <ul class="navbar-nav align-items-center right-nav-link">
        <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                <span class="user-profile"><img src="{{ asset('image/profile/' . Auth::user()->url_avatar) }}" class="img-circle" alt="user avatar"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item user-details">
                    <a href="javaScript:void();">
                    <div class="media">
                    <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('image/profile/' . Auth::user()->url_avatar) }}" alt="user avatar"></div>
                        <div class="media-body">
                        <h6 class="mt-2 user-title">{{ Auth::user()->name }}</h6>
                        <p class="user-subtitle">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    </a>
                </li>
                @if (Auth::user()->role_id == 2)
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{ route('inbox.index') }}"><i class="icon-envelope mr-2"></i> {{ __('Inbox') }}</a>
                </li>
                @endif
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{ url('/profile') }}">
                        <i class="icon-settings mr-2"></i> {{ __('Account') }}
                    </a>
                </li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon-power mr-2"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
        </ul>
    </nav>
    </header>
    <!--End topbar header-->
    
    <!--Start content-->
    @yield('content')
    <!--End content-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">Copyright © <?php echo date('Y') ?> {{ config('app.name', 'Laravel') }}</div>
        </div>
    </footer>
    <!--End footer-->
    
    @include('admin.layouts.js')
</body>
</html>