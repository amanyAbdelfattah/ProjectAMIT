@extends('layouts.user')
@section('title') Home @endsection
@section ('content')
<section>
    <div class="feature">
        <div class="container">
            <div class="item">
                <div class="line"></div>
                <h2> Featuerd Items </h2>
                <div class="line"></div>
            </div>
            <div class="All">
                <ul>
                    <li><a href="">All</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Kids</a></li>
                </ul>
            </div>
            <!-------------------------------------------Start Swiper-------------------------------------------->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <!------------------------- Slide One-------------------->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex-row flex-wrap align-items-stretch">
                                @foreach ($products as $product)
                                @if ($product->ptype == "Featured")
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------End Swiper-------------------------------------------->
        </div>
    </div>
</section>
<section>
    <div class="feature">
        <div class="container">
            <div class="item">
                <div class="line"></div>
                <h2> Trending Items </h2>
                <div class="line"></div>
            </div>
            <!-------------------------------------------Start Swiper-------------------------------------------->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <!------------------------- Slide One-------------------->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex-row flex-wrap align-items-stretch">
                                @foreach ($products as $product)
                                @if ($product->ptype == "Trending")
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------End Swiper-------------------------------------------->
        </div>
    </div>
</section>
@endsection