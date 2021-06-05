@include('admin.includes.header')
    <!-- Page Wrapper -->
    <div class="wrapper">
        @include('admin.includes.preloader')
        @include('admin.includes.topnavbar')
        @include('admin.includes.sidebar')
    @yield('content')

    </div>
    <!-- ./wrapper -->
    
<!-- End of Main Content -->
@include('admin.includes.footer')
@include('admin.includes.mainscripts')
@include('sweetalert::alert')

    </body>
    
    </html>