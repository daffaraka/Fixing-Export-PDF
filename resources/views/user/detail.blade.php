@extends('master')
@section('main')

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
                                <li><a href="./shopping_cart">Shopping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>

                            </ul>
                        </li>

                        <li class="active"><a href="./contact">Contacts</a></li>
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
                    <h4>About Us</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<section id="buy">
    <div class="container">
        <div class="row">
        </div>
        <br>
        <div class="col-md-12 mt-2">

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h2>
                
                    @if(!empty($pesanans))
                    <p align="right">Tanggal pesan : {{ $pesanans->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} barang</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga_barang) }}</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong>Total : </strong></td>
                                <td><strong>Rp. {{ number_format($pesanans->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif
                    <a href="{{url('user/history/'.$pesanans->id_pesanan.'/printPdf')}}" target="_blank" class="btn btn-secondary">Download PDF</a>
                </div>
            </div>
        </div>

        <br>
</section>
<!--/#portfolio-item-->


</div>
</div>
@endsection
@section('script')
<script src="/js/jquery.prettyPhoto2.js"></script>
@endsection
