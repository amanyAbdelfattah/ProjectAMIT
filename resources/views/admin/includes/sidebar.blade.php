<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('uploads/users/' . Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <h5 class="d-block">{{ Auth::user()->name }}</h5>
        </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
            </div>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin-view')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    {{__('Dashboard.DASHBOARD')}}
                    </p>
                </a>
                </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-users-cog"></i> 
                <p>
                {{__('Dashboard.ControlUser')}}
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fas fa-users"></i> 
                    <p>{{__('Dashboard.AllUsers')}}</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <p>{{__('Dashboard.AddUsers')}}</p>
                </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-cut"></i>
                <p>
                {{__('Dashboard.ControlCategories')}}
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                    <i class="fas fa-shopping-basket"></i>
                    <p>{{__('Dashboard.AllCategories')}}</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>{{__('Dashboard.AddCategory')}}</p>
                </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-dolly"></i>
                <p>
                {{__('Dashboard.ControlProduct')}}
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                    <i class="fab fa-black-tie"></i>
                    <p>{{__('Dashboard.AllProducts')}}</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                    <i class="fas fa-cart-arrow-down"></i>
                    <p>{{__('Dashboard.AddProduct')}}</p>
                </a>
                </li>
        </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                    {{__('Dashboard.ControlPosts')}}
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="background-color: rgb(63, 103, 145);">
                <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                    <i class="fas fa-comments nav-icon"></i>
                        <p>{{__('Dashboard.AllPosts')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('post.create')}}" class="nav-link">
                    <i class="fas fa-edit nav-icon"></i>
                        <p>{{__('Dashboard.AddPost')}}</p>
                    </a>
                </li>
                </ul>
            </li>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>