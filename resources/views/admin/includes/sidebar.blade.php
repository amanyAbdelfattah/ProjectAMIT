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
                    Dashboard
                    </p>
                </a>
                </li>
            {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="fas fa-users-cog"></i> 
                <p>
                Control User
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fas fa-fw fa-user"></i> 
                    <p>All Users</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link active">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <p>Add User</p>
                </a>
                </li>
            </ul>
            </li> --}}

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-users-cog"></i> 
                <p>
                Control User
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fas fa-fw fa-user"></i> 
                    <p>All Users</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <p>Add User</p>
                </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-cut"></i>
                <p>
                Controll Categories
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Categories</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category</p>
                </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-dolly"></i>
                <p>
                Control Products
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: #3f6791">
                <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                    <i class="fab fa-black-tie"></i>
                    <p>All Products</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                    <i class="fas fa-cart-arrow-down"></i>
                    <p>Add Product</p>
                </a>
                </li>
        </ul>
            </li>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>