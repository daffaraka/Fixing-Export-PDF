@extends('admin')
@section('main')

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{URL::asset('img/Asset 4.png')}}" alt="Esa Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                            <a class="js-arrow" href="./admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                        
                        <li>
                            <a href="./barang">
                                <i class="fas fa-briefcase"></i>Barang</a>
                        </li>
                        <li>
                            <a href="./best_seller">
                                <i class="fas fa-tags"></i>Produk Unggulan</a>

                        <li>
                            <a href="./pesanadmin">
                                <i class="far fa-envelope"></i>Pesan</a>
                        </li>
                        <li class="active">
                            <a href="./pelanggan">
                                <i class="fas fa-users"></i>Pelanggan</a>
                        </li>
                        <li class="active">
                            <a href="./pesanan">
                                <i class="fas fa-shopping-cart"></i>Pesanan</a>
                        </li>
                        <li class="active">
                            <a href="./pesanan">
                                <i class="fas  fa-credit-card"></i>Bukti Transfer</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" align="right">
                        <div class="header-wrap">
                            
                            <div class="header-button" >
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="uil uil-signout"></i>
                    <span class="link-name" align="right">Logout</span>
                </a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Welcome Admin</h2>
                                      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Profile Admin</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="{{URL::asset('img/teteh.jpeg')}}" alt="Card image cap" width="40%">
                                            <h5 class="text-sm-center mt-2 mb-1">Esa Rizky</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i>Bogor, Indonesia</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

        @endsection