@extends('master')
@section('main')

<body>


    <!-- Offcanvas Menu Begin -->
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
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
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
                        <a href="./dashboard"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/dashboard')}}">Home</a></li>
                            <li><a href="{{url('/shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about">About Us</a></li>
                                    <li class="active"><a href="./shop_detail">Shop Details</a></li>
                                    <li><a href="./shopping_cart">Shopping Cart</a></li>
                                    <li><a href="./checkout">Check Out</a></li>

                                </ul>
                            </li>

                            <li><a href="{{url('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{url('/dashboard')}}">Home</a>
                            <a href="{{url('/shop')}}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg"
                                        data-setbg="{{url('img')}}/{{$data->image1}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg"
                                        data-setbg="{{url('img')}}/{{$data->image2}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg"
                                        data-setbg="{{url('img')}}/{{$data->image3}}">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('img')}}/{{$data->image1}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('img')}}/{{$data->image2}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{url('img')}}/{{$data->image3}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="product__details__content">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="product__details__text">
                                <br>
                                <h4>{{ $data->nama_barang }}</h4>

                                <h3>Rp. {{ $data->harga_barang }}</h3>

                                <div class="product__details__option">

                                </div>


                                <!-- button add product -->
                                <form action="/shoppingcart/store/{{$data->id_barang }}" method="post">
                                    @csrf

                                    <input type="text" name="jumlah_pesan" class="quantity" required="">
                                    <button type="submit" class="btn btn-primary" class="mt-2"><i
                                            class="fa fa-shopping-cart"> Buy </i></button>
                                </form>



                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__details__tab">
                                <ul class="filter__controls">
                                    <li class="active" data-filter="*">Description</li>


                                </ul>
                                <h2>{{ $data->kategori }}</h2>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                        <div class="product__details__tab__content">

                                            <div class="product__details__tab__content__item">
                                                <h5>Products Infomation</h5>
                                                <p> {{ $data->deskripsi }}</p>

                                            </div>
                                            <div class="product__details__tab__content__item">
                                                <h5>Material used</h5>
                                                <p>{{ $data->material }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-6" role="tabpanel">
                                        <div class="product__details__tab__content">
                                            <div class="product__details__tab__content__item">
                                                <h5>Products Infomation</h5>
                                                <p>A Pocket PC is a handheld computer, which features many of the same
                                                    capabilities as a modern PC. These handy little devices allow
                                                    individuals to retrieve and store e-mail messages, create a contact
                                                    file, coordinate appointments, surf the internet, exchange text
                                                    messages
                                                    and more. Every product that is labeled as a Pocket PC must be
                                                    accompanied with specific software to operate the unit and must
                                                    feature
                                                    a touchscreen and touchpad.</p>
                                                <p>As is the case with any new technology product, the cost of a Pocket
                                                    PC
                                                    was substantial during it’s early release. For approximately
                                                    $700.00,
                                                    consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                    These days, customers are finding that prices have become much more
                                                    reasonable now that the newness is wearing off. For approximately
                                                    $350.00, a new Pocket PC can now be purchased.</p>
                                            </div>
                                            <div class="product__details__tab__content__item">
                                                <h5>Material used</h5>
                                                <p>Polyester is deemed lower quality due to its none natural quality’s.
                                                    Made
                                                    from synthetic materials, not natural like wool. Polyester suits
                                                    become
                                                    creased easily and are known for not being breathable. Polyester
                                                    suits
                                                    tend to have a shine to them compared to wool and cotton suits, this
                                                    can
                                                    make the suit look cheap. The texture of velvet is luxurious and
                                                    breathable. Velvet is a great choice for dinner party jacket and can
                                                    be
                                                    worn all year round.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-7" role="tabpanel">
                                        <div class="product__details__tab__content">
                                            <p class="note">Nam tempus turpis at metus scelerisque placerat nulla
                                                deumantos
                                                solicitud felis. Pellentesque diam dolor, elementum etos lobortis des
                                                mollis
                                                ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                                pharetras loremos.</p>
                                            <div class="product__details__tab__content__item">
                                                <h5>Products Infomation</h5>
                                                <p>A Pocket PC is a handheld computer, which features many of the same
                                                    capabilities as a modern PC. These handy little devices allow
                                                    individuals to retrieve and store e-mail messages, create a contact
                                                    file, coordinate appointments, surf the internet, exchange text
                                                    messages
                                                    and more. Every product that is labeled as a Pocket PC must be
                                                    accompanied with specific software to operate the unit and must
                                                    feature
                                                    a touchscreen and touchpad.</p>
                                                <p>As is the case with any new technology product, the cost of a Pocket
                                                    PC
                                                    was substantial during it’s early release. For approximately
                                                    $700.00,
                                                    consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                    These days, customers are finding that prices have become much more
                                                    reasonable now that the newness is wearing off. For approximately
                                                    $350.00, a new Pocket PC can now be purchased.</p>
                                            </div>
                                            <div class="product__details__tab__content__item">
                                                <h5>Material used</h5>
                                                <p>Polyester is deemed lower quality due to its none natural quality’s.
                                                    Made
                                                    from synthetic materials, not natural like wool. Polyester suits
                                                    become
                                                    creased easily and are known for not being breathable. Polyester
                                                    suits
                                                    tend to have a shine to them compared to wool and cotton suits, this
                                                    can
                                                    make the suit look cheap. The texture of velvet is luxurious and
                                                    breathable. Velvet is a great choice for dinner party jacket and can
                                                    be
                                                    worn all year round.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Shop Details Section End -->





    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    @endsection
