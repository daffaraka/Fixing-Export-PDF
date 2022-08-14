@extends('detailmaster')
@section('main')


<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="img/Asset 4.png" alt="Cool Admin" />
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
                            <a href="{{URL::asset('/barang')}}">
                                <i class="fas fa-briefcase"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{URL::asset('/best_seller')}}">
                                <i class="fas fa-tags"></i>Produk Unggulan</a>

                        <li>
                            <a href="{{URL::asset('/pesanadmin')}}">
                                <i class="far fa-envelope"></i>Pesan</a>
                        </li>
                        <li class="active">
                            <a href="{{URL::asset('/pelanggan')}}">
                                <i class="fas fa-users"></i>Pelanggan</a>
                        </li>
                        <li class="active">
                            <a href="{{URL::asset('/pesanan')}}">
                                <i class="fas fa-shopping-cart"></i>Pesanan</a>
                        </li>
                        <li class="active">
                            <a href="{{URL::asset('/pesanan')}}">
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

                            <div class="header-button">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="uil uil-signout"></i>
                                        <span class="link-name" align="right">Logout</span>
                                    </a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <br>
            <br>
            <br>
            <br>
          
            <div class="col-md-12">
            

                <div class="card">
                    
                    <div class="card-body ">
                        <a href="{{url('/'.$pesanans->id_pesanan.'/printPesananPdf')}}" class="btn btn-info" target="_blank"> Print</a>
                        <h2><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h2>
                        @if(!empty($pesanans))
                        <p align="right">Tanggal pesan : {{ $pesanans->tanggal }}</p>
                        <h4>Data Pemesan</h4>
                        
                        <br>
                        <br>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }} barang</td>
                                    <td align="left">Rp.
                                        {{ number_format($pesanan_detail->barang->harga_barang) }}
                                    </td>
                                    <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}
                                    </td>

                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4" align="right"><strong>Total : </strong></td>
                                    <td><strong>Rp. {{ number_format($pesanans->jumlah_harga) }}</strong>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hoverable rows end -->

    @endsection
    @section('script')
    <script src="/js/jquery.prettyPhoto2.js"></script>
    @endsection