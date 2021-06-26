{{-- Start Header--}}
@if (session()->has('success'))
<div class="row">
    @include('sweetalert::alert')
</div>
@endif

<header class="top-nav-bar">
    <div class="container">
        <div class="row">
            <div class="leftside col-lg-4">
                <p>Free Shipping on All orders Over %75!</p>
            </div>
            <div class="rightside col-lg-6">
                <nav class="top-navbar">
                        <ul class="row customize-ul">
                            <li>
                                <a href="{{route('profile.show' , Auth::user()->id)}}" class="active"><img src="{{asset('uploads/users/' . Auth::user()->image)}}" alt="" style="max-width: 20%"> My Account</a>
                            </li>
                            <li>
                                <a href="" class="active">Wishlist</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Currency:
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li>
                                
                                <a href="{{route('cart.show')}}" class="active"><i class="fas fa-cart-plus"></i> My Cart ({{session()->has('cart') ? session()->get('cart')->totalQty : '0'}})</a>
                            </li>
                            
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- End Header --}}
<form action="{{route('search')}}" method="GET" class="navbar-search__form">
<div class="d-flex justify-content-center px-5">
    <div class="search"> <input type="text" name="search" class="search-input" placeholder="Search Here What You Need..."> <button class="search-icon"> <i class="fa fa-search"></i> </button> </div>
</div>
</form>
<section>
    <div class="fashion">
        <div class="container">
            <div class="overlay"></div>
            <nav> 
                <div class="icon">
                    <h1>Fashion</h1>
                </div>
                <ul>
                    <li><a href="{{route('user-view')}}">Home</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="#footer">Footwear</a></li>
                    <li><a href="">Accessories</a></li>
                    <li><a href="">Sales</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </nav>
            <div class="icons menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <div class="icons close-icon">
                <i class="far fa-times-circle"></i>
            </div>
        </div>
    </div>