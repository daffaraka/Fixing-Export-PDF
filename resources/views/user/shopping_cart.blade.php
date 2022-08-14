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
            <p>Free shipping, 30-day return or refund guarantee.</p>
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
                        <a href="./index.html"><img src="img/Asset 4.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./dashboard">Home</a></li>
                            <li><a href="./shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about">About Us</a></li>
                                    <li><a href="./shop_detail">Shop Details</a></li>
                                    <li class="active"><a href="./shopping_cart">Shopping Cart</a></li>
                                    <li><a href="./checkout">Check Out</a></li>

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
                        <div class="price">$0.00</div>
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
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        @if(!empty($pesanan))
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="{{ url('img') }}/{{ $pesanan_detail->barang->image1 }}"
                                                width="100" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{ $pesanan_detail->barang->nama_barang }}</h6>
                                            <h5>{{ $pesanan_detail->barang->harga_barang }}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">

                                            <h6>{{ $pesanan_detail->jumlah }}</h6>
                                        </div>
                    </div>
                    </td>
                    <td class="cart__price">{{ $pesanan_detail->jumlah_harga }}</td>
                    <form action="{{ route('shopping_cart.delete', $pesanan_detail->id_pesanan_detail) }}"
                        method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <td class="cart__close"><button type="submit" class=" fa fa-close"
                                onclick=" return confirm('Anda yakin ingin menghapus data ini?');"></button></td>


                        </button>
                    </form>
                    </tr>
                    @endforeach

                    </tbody>
                    </table>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="./shop">Continue Shopping</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h4><b>Keranjang Total</b></h4>
                    <br>
                    <ul>

                        <li><h5>Total <span>Rp. {{ number_format($pesanan->jumlah_harga) }}</h5></span></li>
                    </ul>
                    <a href="./checkout" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
