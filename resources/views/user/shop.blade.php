@extends('master')
@section('main')

<body>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Now Everyone Can Be Beautiful</p>
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
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>

                            </div>
                            <div class="header__top__hover">


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
                        <a href="./index.html"><img src="img/Asset 4.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/dashboard')}}">Home</a></li>
                            <li class="active"><a href="{{url('/shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="{{url('/shop_detail')}}">Shop Details</a></li>
                                    <li><a href="{{url('/shopping_cart')}}">Shopping Cart</a></li>
                                    <li><a href="{{url('/checkout')}}">Check Out</a></li>

                                </ul>
                            </li>

                            <li><a href="./contact">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">Rp. 0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="{{url('/shop/cari')}}" class="site-block-top-search" method="GET">
                                <input type="text" name="cari" class="form-control border-4" placeholder="Cari Produk"
                                    value="{{ $r->cari}}">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>



                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="shop/cari?cari=Facial Wash">Facial Wash</a></li>
                                                    <li><a href="shop/cari?cari=Serum">Serum</a></li>
                                                    <li><a href="shop/cari?cari=Parfume">Parfume</a></li>
                                                    <li><a href="shop/cari?cari=Lipstick">Lipstick</a></li>
                                                    <li><a href="shop/cari?cari=Deodorant">Deodorant</a></li>
                                                    <li><a href="shop/cari?cari=Body Lotion">Body Lotion</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($data as $key => $barang)
                        <div class="col-lg-4 col-md-6 col-sm-6">

                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ url('img') }}/{{$barang->image1}}">
                                    <ul class="product__hover">
                                        <li><a href="{{ url('shop_detail') }}/{{ $barang->id_barang }}"><img
                                                    src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>

                                <div class="product__item__text">
                                    <h6>{{ $barang->nama_barang }} | {{ $barang->kategori }}</h6>
                                    <a href="{{ url('shop_detail') }}/{{ $barang->id_barang }}" class="add-cart">+ Add
                                        To Cart</a>

                                    <h5>Rp. {{ $barang->harga_barang }}</h5>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product__pagination">
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <span>...</span>
                                    <a href="#">21</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body> -->

@endsection
