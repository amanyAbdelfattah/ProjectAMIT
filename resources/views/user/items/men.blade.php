@extends('layouts.user')
@section('title') Men Items @endsection
@section ('content')
<section>

</section>
<div class="banner">
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h3>SOMETHING IS BETTER FASHION</h3>
            </div>
            <div class="swiper-slide">
                <h3>SOMETHING IS BETTER FASHION</h3>
            </div>
            <div class="swiper-slide">
                <h3>SOMETHING IS BETTER FASHION</h3>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
</header>
<!--END HEADER -->
<!-- Start Main-->
<!-- Start Collection-->
<section>
<div class="collection">
    <div class="container">
        <div class="trend">
            <div class="woman">
                <div class="collitem">
                    <img src="{{URL::asset("userinterface/img/fashion-pretty-cool-young-girl-shopping-bags-wearing-black-hat-white-pants-over-colorful-orange-background-79063329.jpg")}}"
                    alt="">
                    <div class="over-1 text-center">
                        <button class="upper">{{__('UserIndex.ViewCollection')}}</button>
                    </div>
                </div>
                
                    <div class="colletcioninfo">
                        <h3 class="main-color"> {{__('UserIndex.HotCollection')}}</h3>
                        <h1> {{__('UserIndex.TrendForWomen')}}</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil rem tempore magni harum
                            repellendus nulla. Molestiae adipisci unde sapiente incidunt? Corporis error sequi
                            temporibus a molestiae maiores distinctio quod impedit?</p>
                        <button>{{__('UserIndex.SHOPNOW')}}</button>
                    </div>
                
            </div>
            {{--  --}}
            <div class="men-side">
                <div class="row flex-column position">
                    <div class="box1 mb-5">
                        <img src="{{URL::asset("userinterface/img/pexels-photo-842811.jpeg")}}" alt="">
                    <div class="over-2 text-center">
                        <button class="upper">{{__('UserIndex.ViewCollection')}}</button>
                    </div>
                    </div>
                    <div class="box2">
                        <img src="{{URL::asset("userinterface/img/82782504fb584f1112f99ddf55107945.png")}}" alt="">
                    <div class="over-3 text-center">
                        <button class="upper">{{__('UserIndex.ViewCollection')}}</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Collection-->
<!-- Start feature -->
<section>
<div class="feature">
    <div class="container">
        <div class="item">
            <div class="line"></div>
            <h2> {{__('UserIndex.FEATUERD')}} </h2>
            <div class="line"></div>
        </div>
        <div class="All">
            <ul>
                <li><a href="{{route('user-view')}}">{{__('UserIndex.ALL')}}</a></li>
                <li><a href="{{route('men.items')}}" style="color: crimson; font-weight:500">{{__('UserIndex.MEN')}}</a></li>
                <li><a href="{{route('women.items')}}">{{__('UserIndex.WOMEN')}}</a></li>
                <li><a href="{{route('kids.items')}}">{{__('UserIndex.KIDS')}}</a></li>
            </ul>
        </div>
        <!-------------------------------------------Start Swiper-------------------------------------------->
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <!------------------------- Slide One-------------------->
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row flex-row flex-wrap align-items-stretch">
                            @foreach ($menitems as $menitem)
                            @if ($menitem->ptype == "Featured" AND $menitem->cat_id == "2")
                            <div class="box">
                                <div class="products">
                                    <div class="img-overlay1">
                                        <div class="imgicon"><i class="far fa-eye"></i></div>
                                            
                                    </div>
                                        <div class="img-overlay2">
                                            <img src="{{asset('uploads/products/' . $menitem->pimg)}}" alt="">
                                        </div>
                                        
                                    
                                </div>
                                
                                <div class="price">
                                    <span> {{$menitem->pprice}} L.E</span>
                                </div>
                                <div class="text">
                                    <h2>{{$menitem->pname}}</h2>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="sm-icons">
                                        <div><i class="fas fa-heart"></i></div>
                                        <div><a href="{{route('cart.add' , $menitem->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
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

</section>
<!-- End feature -->

<!--Start image-->
<section>
<div class="image">
    <div class="container">
        <div class="photo">
            <div class="boximg">
                <img src="{{URL::asset("userinterface/img/photo-1426523038054-a260f3ef5bc9.jpg")}}" alt="">
                <div class="discount">
                    <h3>{{__('UserIndex.70%OFF')}}</h3>
                    <p>Tao Kinben Na?</p>
                </div>
            </div>
            <div class="boximg">
                <img src="{{URL::asset("userinterface/img/photo-1590399830582-0bd885dee8e2.jpg")}}" alt="">
                <div class="na">
                    <span>AMR CHEHARA KHARAP NA</span>
                </div>
                <div class="dia">
                    <span><span class="main-color">Chehara</span> Dia Ki hoy</span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End image-->
<!--Start Top-->
<section>
<div class="feature">
    <div class="container">
        <div class="item">
            <div class="line"></div>
            <h2>{{__('UserIndex.TRENDING')}}</h2>
            <div class="line"></div>
        </div>
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row flex-row flex-wrap align-items-stretch">
                            @foreach ($products as $product)
                            @if ($product->ptype == "Trending")
                            <div class="box">
                                <div class="products">
                                    <div class="img-overlay3">
                                        <div class="imgicon"><i class="far fa-eye"></i></div>
                                    </div>
                                        <div class="img-overlay2">
                                            <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                        </div>
                                        
                                </div>
                                
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

</section>
<!--End Top-->


<!-- Start Shoes-->
<section>
<div class="shoes">
    <div class="container">
        <div class="items">
            <div class="quote main-color">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 94px, 0px)">
                    
                    @foreach ($posts as $post)
                    <div class="swiper-slide customerposts" style="transform: translate3d(43%, 27%, 0px);">
                        <p class="text postbody">" {{$post->postbody}} "</p>
                        <img src="{{asset('uploads/users/' . $post->user->image)}}" style="max-width: 15%">
                        <h3 class="text user-name">{{$post->user->name}}</h3>
                        <p class="text role">{{$post->user->role}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
        </div>
    </div>
</div>
</section>
<!-- End Shoes-->
<!--Start Blog-->
<section>
<div class="latest">
    <div class="container">
        <div class="text">
            <div class="line"></div>
            <h2> {{__('UserIndex.LatestBlog')}} </h2>
            <div class="line"></div>
        </div>
        <div class="blog" id="blog">
            <div class="box">
                <img src="{{URL::asset("userinterface/img/photo-1499887142886-791eca5918cd.jpg")}}" alt="">
                <h2>{{__('UserIndex.SomeHeadline')}}</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                <button>{{__('UserIndex.READMORE')}}</button>
            </div>
            <div class="box">
                <img src="{{URL::asset("userinterface/img/photo-1499887142886-791eca5918cd.jpg")}}" alt="">
                <h2>{{__('UserIndex.SomeHeadline')}}</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                <button>{{__('UserIndex.READMORE')}}</button>
            </div>
            <div class="box">
                <img src="{{URL::asset("userinterface/img/photo-1499887142886-791eca5918cd.jpg")}}" alt="">
                <h2>{{__('UserIndex.SomeHeadline')}}</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                <button>{{__('UserIndex.READMORE')}}</button>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Blog-->
<!--Start Theme-->
<section>
<div class="theme">
    <div class="container">
        <div class="text">
            <div class="line"></div>
            <h2>{{__('UserIndex.ShopByBrand')}}</h2>
            <div class="line"></div>
        </div>
        <div class="icon">
            <div class="box">
                <img src="{{URL::asset('userinterface/img/themeforest-logo-768x363.png')}}" alt="">
            </div>
            <div class="box">
                <img src="{{URL::asset('userinterface/img/themeforest-logo-768x363.png')}}" alt="">
            </div>
            <div class="box">
                <img src="userinterface/img/themeforest-logo-768x363.png" alt="">
            </div>
            <div class="box">
                <img src="{{URL::asset('userinterface/img/themeforest-logo-768x363.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
</section>
<!--  End Theme-->
<section>
<div class="about">
    <div class="container">
        <div class="footer">
            <div class="box">
                <h4>{{__('UserIndex.SHOPS')}}</h4>
                <p>{{__('UserIndex.NewIn')}}</p>
                <p>{{__('UserIndex.WOMEN')}}</p>
                <p>{{__('UserIndex.MEN')}}</p>
                <p>{{__('UserIndex.SchuheShoes')}}</p>
                <p> {{__('UserIndex.BagANDAccessories')}}</p>
                <p>{{__('UserIndex.TopBrands')}}</p>
                <p>Sale & Special Offers</p>
                <p>Look Book</p>
            </div>
            <div class="box">
                <h4>{{__('UserIndex.INFORMATION')}}</h4>
                <p>{{__('UserIndex.NewIn')}}</p>
                <p>{{__('UserIndex.WOMEN')}}</p>
                <p>{{__('UserIndex.MEN')}}</p>
                <p>{{__('UserIndex.SchuheShoes')}}</p>
                <p> {{__('UserIndex.BagANDAccessories')}}</p>
                <p>{{__('UserIndex.TopBrands')}}</p>
                <p>Sale & Special Offers</p>
                <p>Look Book</p>
            </div>
            <div class="box">
                <h4>{{__('UserIndex.CUSTOMERSERVICE')}}</h4>
                <p>{{__('UserIndex.NewIn')}}</p>
                <p>{{__('UserIndex.WOMEN')}}</p>
                <p>{{__('UserIndex.MEN')}}</p>
                <p>{{__('UserIndex.SchuheShoes')}}</p>
                <p> {{__('UserIndex.BagANDAccessories')}}</p>
                <p>{{__('UserIndex.TopBrands')}}</p>
                <p>Sale & Special Offers</p>
                <p>Look Book</p>
            </div>
            <div class="box">
                <h4>{{__('UserIndex.NEWSLETTER')}}</h4>
                <p>{{__('UserIndex.SIGNUP')}}</p>
                <div class="input">
                    <input type="email" placeholder="Type Your Email">
                </div>
                <form method="POST" action="{{route('writepost.store')}}" class="user my-3 opinion">
                    <div class="row">
                        @include('sweetalert::alert')
                    </div>
                    <div class="form-group row">
                        @csrf
                        <div class="col-sm-12 mb-3 input">
                            <textarea id="w3review" name="postbody" rows="4" cols="50" placeholder="We care about what do you think..."></textarea>
                            @error('postbody')
                            <small class="text-danger"> {{$message}} </small> 
                            @enderror
                        </div>
                    </div>
                    <input type="submit" value="Write Post" class="btn btn-primary btn-user btn-block">
                </form>
                {{-- <div class="opinion">
                    <input type="submit" value="Write Post" class="btn btn-primary btn-user btn-block">
                </div> --}}
                
                <button>SUBSCRIBE</button>
                <div class="sm-icons">
                    <div><i class="fab fa-facebook"></i></div>
                    <div><i class="fab fa-twitter"></i></div>
                    <div><i class="fab fa-youtube"></i></div>
                    <div><i class="fab fa-google"></i></div>
                    <div><i class="fab fa-vimeo-v"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection