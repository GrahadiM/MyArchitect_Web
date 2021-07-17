<!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="{{ route('home') }}">
            <img src="{{ asset('admin') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">{{ config('app.name', 'Laravel') }}</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            @if (auth()->user()->role_id == 1)
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li class="{{ Request::is('home*') ? 'active' : ''}}">
                    <a href="{{ route('home') }}">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-header">CATEGORY MENU</li>
                <li class="{{ Request::is('category-type*') ? 'active' : ''}}">
                    <a href="{{ url('/category-type') }}">
                    <i class="zmdi zmdi-label"></i> <span>Data Category Type</span>
                    </a>
                </li>
                <li class="{{ Request::is('category-model*') ? 'active' : ''}}">
                    <a href="{{ url('/category-model') }}">
                    <i class="zmdi zmdi-label"></i> <span>Data Category Model</span>
                    </a>
                </li>
                <li class="sidebar-header">PORTOFOLIO MENU</li>
                <li class="{{ Request::is('portofolio*') ? 'active' : ''}}">
                    <a href="{{ route('portofolio.index') }}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Data Portofolio</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('name*') ? 'active' : ''}}">
                    <a href="{{ route('home') }}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Paket Harga</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('order*') ? 'active' : ''}}">
                    <a href="{{ route('order.index') }}">
                    <i class="zmdi zmdi-shopping-basket"></i> <span>Data Order</span>
                    </a>
                </li>
                <li class="{{ Request::is('review*') ? 'active' : ''}}">
                    <a href="{{ route('review.index') }}">
                    <i class="zmdi zmdi-layers"></i> <span>Data Review</span>
                    </a>
                </li>
                <li class="sidebar-header">ADMIN SETTINGS</li>
                <li class="{{ Request::is('account-setting*') ? 'active' : ''}}">
                    <a href="{{ url('/account-setting') }}">
                    <i class="zmdi zmdi-shield-security"></i> <span>Account Settings</span>
                    </a>
                </li>
                <li class="{{ Request::is('client*') ? 'active' : ''}}">
                    <a href="{{ route('client.index') }}">
                    <i class="zmdi zmdi-accounts-alt"></i> <span>Data Customer</span>
                    </a>
                </li>
                <li class="{{ Request::is('arsitek*') ? 'active' : ''}}">
                    <a href="{{ route('arsitek.index') }}">
                    <i class="zmdi zmdi-accounts-list-alt"></i> <span>Data Arsitek</span>
                    </a>
                </li>
            @else
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li class="{{ Request::is('home*') ? 'active' : ''}}">
                    <a href="{{ route('home') }}">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-header">ARSITEK MENU</li>
                <li class="{{ Request::is('price*') ? 'active' : ''}}">
                    <a href="{{ route('price.index') }}">
                    <i class="zmdi zmdi-attachment-alt"></i> <span>Paket Harga</span>
                    </a>
                </li>
                <li class="{{ Request::is('portofolio*') ? 'active' : ''}}">
                    <a href="{{ route('portofolio.index') }}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Data Portofolio</span>
                    </a>
                </li>
                <li class="{{ Request::is('order*') ? 'active' : ''}}">
                    <a href="{{ route('order.index') }}">
                    <i class="zmdi zmdi-shopping-basket"></i> <span>Data Order</span>
                    </a>
                </li>
                <li class="{{ Request::is('review*') ? 'active' : ''}}">
                    <a href="{{ route('review.index') }}">
                    <i class="zmdi zmdi-layers"></i> <span>Data Review</span>
                    </a>
                </li>
                <li class="{{ Request::is('progres*') ? 'active' : ''}}">
                    <a href="{{ route('progres.index') }}">
                    <i class="zmdi zmdi-assignment"></i> <span>Data Progres</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!--End sidebar-wrapper-->