@include('user.includes.header')
    
        @include('user.includes.navbar')
    @yield('content')

<!-- End of Main Content -->
@include('user.includes.footer')
@include('user.includes.mainscripts')
{{-- @include('sweetalert::alert') --}}

    </body>
    
    </html>