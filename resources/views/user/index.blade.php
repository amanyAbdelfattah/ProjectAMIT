<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('userinterface/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('userinterface/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('userinterface/css/style.css')}}">
    <link rel="icon" href="/userinterface/img/online-shopping-ecommerce.jpg">
    <title>Home | @yield('title')</title>
</head>
<body>
    {{-- Start Header --}}
    <header class="top-nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Free Shipping on All orders Over &75!</p>
                </div>
                <div class="col-lg-6">
                    <nav class="top-navbar">
                            <ul class="row customize-ul">
                                <li><a href="" class="active"><img src="{{asset('uploads/users/' . Auth::user()->image)}}" alt="" style="max-width: 20%"> My Account</a></li>
                                <li><a href="" class="active">Wishlist</a></li>
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
                                <li>
                                    
                                    <a href="" class="active"><i class="fas fa-cart-plus"></i> My Cart</a>
                                </li>
                                
                            </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- End Header --}}
    {{-- Show Products --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-5">
                <div class="p-5">
                <div class="row">
                    @include('sweetalert::alert')
                </div>
        <div class="container">
            <div class="row">
        <table class="table m-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Product Picture</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td><img src="{{asset('uploads/products/' . $product->pimg)}}" style="max-width: 68%;"></td>
                    <th>{{$product->pname}}</th>
                    <th>{{$product->pprice}} $</th>
                    <th>{{$product->category->cat_name}}</th>
                    <td class="d-flex tablestyle">
                        <a class="btn btn-info m-1" href="{{route('cart.add' , $product->id)}}">Add to Cart</a>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
            </div>
        </div>
        
    </div>
    {{-- End Products --}}
</body>
<script src="{{URL::asset('userinterface/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('userinterface/js/all.min.js')}}"></script>
</html>
{{-- <h1>hi user</h1>
<a href="{{route('writepost.create')}}">write post</a> --}}