@extends('master')
@section('main')
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign in</a>

        </div>
    </div>
    <div class="offcanvas__nav__option">

        <a href="#"><img src="img/icon/cart.png" alt=""> </a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p> Now Everyone Can Be Beautiful</p>
    </div>
</div>

<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Now Everyone Can Be Beautiful</p>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="#">Sign in</a>

                        </div>
                        <div class="header__top__hover">
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="uil uil-signout"></i>
                                    <span class="link-name">Logout</span>
                                </a></li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./dashboard"><img src="img/Asset 4.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./dashboard">Home</a></li>
                        <li><a href="./shop">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./about">About Us</a></li>
                                <li><a href="./shop_detail">Shop Details</a></li>
                                <li><a href="./shopping_cart">Shopping Cart</a></li>
                                <li><a href="./checkout">Check Out</a></li>

                            </ul>
                        </li>

                        <li><a href="./contact">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                @php
                                    $pesanan_utama = \App\pesanan::where('user_id',
                                    Auth::User()->id)->where('status',0)->first();
                                    if(!empty($pesanan_utama))
                                    {
                                    $notif = \App\pesanan_detail::where('pesanan_id',
                                    $pesanan_utama->id_pesanan)->count();
                                    }
                                    @endphp
                                    @if(isset($notif))
                                    @endif
                    <a href="#"><img src="img/icon/cart.png" alt=""> <span><b>{{ $notif }}</b></span></a>
                    
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->



<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/girl1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2022</h2>
                            <p>Your outer beauty will capture the eyes, your inner beauty will capture the heart</p>
                            <a href="./shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2022</h2>
                            <p>Some people, no matter how old they get, never lose their beauty – they merely move it
                                from their faces into their hearts..</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="img/banner/serum.jpg" width="80%" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Serum Collection</h2>
                        <a href="./shop">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/banner/facewash.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Facial Wash</h2>
                        <a href="./shop">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/banner/eclat.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Parfume</h2>
                        <a href="./shop">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<section class="shop spad">
    
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" ><h2><b>Best Sellers</b><h2></li>
                      
                    </ul>
                </div>
            <div class="col-lg-9">
                <div class="row">
                @foreach($databestseller as $barang)
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ url('img') }}/{{$barang->image1}}">
                                <ul class="product__hover">
                                    <li><a href="{{ url('shop_detail') }}/{{ $barang->id_barang }}"><img
                                                src="img/icon/search.png" alt="" width="50%"></a></li>
                                </ul>
                            </div>

                            <div class="product__item__text">
                                <h6>{{ $barang->nama_barang }}</h6>
                                <a href="{{ url('shop_detail') }}/{{ $barang->id_barang }}" class="add-cart">+ Add
                                    To Cart</a>

                                <h5>Rp. {{ number_format($barang->harga_barang) }}</h5>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
</section>

<!-- Product Section BEST SELLER Begin -->

<!-- Product Section End -->



<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/ig1.jpeg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/ig3.jpeg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/ig2.jpeg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/lulus.jpeg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/ig5.jpeg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/ige6.jpeg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Follow my Instagram to get the latest information about tips n trick to use the product </p>
                    <h3>#InnerBeauty</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->


<br>
<br>
<br>



@stop
