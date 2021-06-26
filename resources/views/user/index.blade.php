@extends('layouts.user')
@section('title') Home @endsection
@section ('content')
    
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
                        <img src="userinterface/img/fashion-pretty-cool-young-girl-shopping-bags-wearing-black-hat-white-pants-over-colorful-orange-background-79063329.jpg"
                        alt="">
                        <div class="over text-center">
                            <button class="upper">view collection</button>
                        </div>
                    </div>
                    
                        <div class="colletcioninfo">
                            <h3 class="main-color"> Hot Collection</h3>
                            <h1> New Trend For Women</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil rem tempore magni harum
                                repellendus nulla. Molestiae adipisci unde sapiente incidunt? Corporis error sequi
                                temporibus a molestiae maiores distinctio quod impedit?</p>
                            <button>Shop Now</button>
                        </div>
                    
                </div>
                <div class="men collitem">
                    <div class="box">
                        <img src="userinterface/img/pexels-photo-842811.jpeg" alt="">
                        <div class="over text-center">
                            <button class="upper">view collection</button>
                        </div>
                    </div>
                    <div class="box collitem">
                        <img src="userinterface/img/82782504fb584f1112f99ddf55107945.png" alt="">
                        <div class="over text-center">
                            <button class="upper">view collection</button>
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
<!-- End feature -->
<!--Start image-->
<section>
    <div class="image">
        <div class="container">
            <div class="photo">
                <div class="boximg">
                    <img src="userinterface/img/photo-1426523038054-a260f3ef5bc9.jpg" alt="">
                    <div class="discount">
                        <h3>70% OFF</h3>
                        <p>Tao Kinben Na?</p>
                    </div>
                </div>
                <div class="boximg">
                    <img src="userinterface/img/photo-1590399830582-0bd885dee8e2.jpg" alt="">
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
    <div class="top">
        <div class="container">
            <div class="trend">
                <div class="line"></div>
                <h2> Trending Items </h2>
                <div class="line"></div>
            </div>
            <div class="first">
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1581338834647-b0fb40704e21.jpg" alt="">
                    <div class="price">
                        <span> 150.00 $</span>
                    </div>
                    <div class="text">
                        <h2>Suspendisse et.</h2>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="sm-icons">
                            <div><i class="fas fa-heart"></i></div>
                            <div><i class="fas fa-shopping-cart"></i></div>
                            <div><i class="fas fa-share"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button>LOAD MORE</button>
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
                <h2> Latest Blog </h2>
                <div class="line"></div>
            </div>
            <div class="blog" id="blog">
                <div class="box">
                    <img src="userinterface/img/photo-1499887142886-791eca5918cd.jpg" alt="">
                    <h2>Some Headline Here</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                    <button>READ MORE</button>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1499887142886-791eca5918cd.jpg" alt="">
                    <h2>Some Headline Here</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                    <button>READ MORE</button>
                </div>
                <div class="box">
                    <img src="userinterface/img/photo-1499887142886-791eca5918cd.jpg" alt="">
                    <h2>Some Headline Here</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio error ex provident.</p>
                    <button>READ MORE</button>
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
                <h2> Shop By Brand  </h2>
                <div class="line"></div>
            </div>
            <div class="icon">
                <div class="box">
                    <img src="userinterface/img/themeforest-logo-768x363.png" alt="">
                </div>
                <div class="box">
                    <img src="userinterface/img/themeforest-logo-768x363.png" alt="">
                </div>
                <div class="box">
                    <img src="userinterface/img/themeforest-logo-768x363.png" alt="">
                </div>
                <div class="box">
                    <img src="userinterface/img/themeforest-logo-768x363.png" alt="">
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
                    <h4>SHOPS</h4>
                    <p>New in</p>
                    <p>Women</p>
                    <p>Men</p>
                    <p>Schuhe Shoes</p>
                    <p> Bag & Accessories</p>
                    <p>Top Brands</p>
                    <p>Sale & Special Offers</p>
                    <p>Look Book</p>
                </div>
                <div class="box">
                    <h4>INFORMATION</h4>
                    <p>New in</p>
                    <p>Women</p>
                    <p>Men</p>
                    <p>Schuhe Shoes</p>
                    <p> Bag & Accessories</p>
                    <p>Top Brands</p>
                    <p>Sale & Special Offers</p>
                    <p>Look Book</p>
                </div>
                <div class="box">
                    <h4>CUSTOMER SERVICE</h4>
                    <p>New in</p>
                    <p>Women</p>
                    <p>Men</p>
                    <p>Schuhe Shoes</p>
                    <p> Bag & Accessories</p>
                    <p>Top Brands</p>
                    <p>Sale & Special Offers</p>
                    <p>Look Book</p>
                </div>
                <div class="box">
                    <h4>NEWSLETTER</h4>
                    <p>Sign Up For News Letter</p>
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
<!-- End Main-->
@endsection
