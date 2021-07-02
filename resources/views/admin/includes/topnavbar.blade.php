<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        </a>
        <div class="navbar-search-block">
        </div>
    </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">{{__('Dashboard.LANGUAGE')}}
            <i class="fas fa-language ml-2"></i>
        </a>
            <a href="#" class="dropdown-item">
            <!-- Message Start -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ul>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li style="list-style: none;">
                                            <a style="color:white;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                        </ul> 
                    </ul>
            <!-- Message End -->
    </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.navbar -->