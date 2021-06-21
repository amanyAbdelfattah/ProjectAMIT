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
    <link rel="stylesheet" href="{{URL::asset('/userinterface/css/swiper.css')}}">
    <title>Home | @yield('title')</title>
</head>
<body>
    {{-- Start Header --}}
    <header class="top-nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Free Shipping on All orders Over %75!</p>
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
    <div class="search">
        <input type="text" placeholder="Search" name="seacrh">
        <button><i class="fas fa-search"></i></button>
    </div>
    <section>
        <div class="fashion">
            <div class="container">
                <nav>
                    <div class="icon">
                        <h1>Fashion</h1>
                    </div>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Women</a></li>
                        <li><a href="">Men</a></li>
                        <li><a href="">Footwear</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sales</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </div>
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
                    <img src="userinterface/img/fashion-pretty-cool-young-girl-shopping-bags-wearing-black-hat-white-pants-over-colorful-orange-background-79063329.jpg"
                        alt="">
                        <div class="colletcioninfo">
                            <h3 class="main-color"> Hot Collection</h3>
                            <h1> New Trend For Women</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil rem tempore magni harum
                                repellendus nulla. Molestiae adipisci unde sapiente incidunt? Corporis error sequi
                                temporibus a molestiae maiores distinctio quod impedit?</p>
                            <button>Shop Now</button>
                        </div>
                    
                </div>
                <div class="men">
                    <div class="box">
                        <img src="userinterface/img/pexels-photo-842811.jpeg" alt="">
                    </div>
                    <div class="box">
                        <img src="userinterface/img/82782504fb584f1112f99ddf55107945.png" alt="">
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
                    <!---------------------Slide Two--------------------->
                    <div class="swiper-slide">
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
                    <!---------------------Slide Three--------------------->
                    <div class="swiper-slide">
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
                    <!---------------------Slide Four--------------------->
                    <div class="swiper-slide">
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
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <!---------------------Slide One--------------------->
                        <div class="swiper-slide">
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
                        <!---------------------Slide Two--------------------->
                        <div class="swiper-slide">
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
                        <!---------------------Slide Three--------------------->
                        <div class="swiper-slide">
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
                        <!---------------------Slide Four--------------------->
                        <div class="swiper-slide">
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
                <div class="text">
                    <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aliquam voluptatum unde atque! Officia, perspiciatis labore alias voluptates, assumenda magnam est reiciendis quis, dolorem voluptatem minus voluptate eveniet eius praesentium?"</p>
                </div>
                <div class="pic">
                    <img src="userinterface/img/photo-1509967419530-da38b4704bc6.jpg" alt="">
                    <h5>MD SHAHIN ALAM</h5>
                    <p>CEO OF TTCM</p>
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
            <div class="blog">
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
<footer>
    <div class="container">
        <div class="text">
            <div class="ella">
                <span>&copy; 2014 ELLA Fashion Store Shopify.All Rights Reserved.Ecommerce Software by Islam Bahaa </span>
            </div>
            <div class="visa">
                <span> VISA  Master Card  Paypal</span>
            </div>
        </div>
    </div>
</footer>


<script src="{{URL::asset('userinterface/js/jquery.js')}}"></script>
<script src="{{URL::asset('userinterface/js/all.min.js')}}"></script>
<script src="{{URL::asset('userinterface/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('userinterface/js/swiper.js')}}"></script>

<script src="{{URL::asset('userinterface/js/custom.js')}}"></script>



    {{-- <div class="d-flex justify-content-center px-5">
        <div class="search"> <input type="text" class="search-input" placeholder="Search..." name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a> </div>
    </div> --}}

    {{-- Show Products --}}
    {{-- <div class="container">
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
        
    </div> --}}
    {{-- End Products --}}
    
</body>
<script src="{{URL::asset('userinterface/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('userinterface/js/all.min.js')}}"></script>
</html>
{{-- <h1>hi user</h1>
<a href="{{route('writepost.create')}}">write post</a> --}}