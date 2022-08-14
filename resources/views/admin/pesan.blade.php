@extends('admin')
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
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="m-0 font-weight-bold text-primary">Data Pesan</h3>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email Pesan</th>
                                    <th>Pesan</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($data))
                                @foreach($data as $tabel)
                                <tr>
                                    <td class="text-bold-500">{{$tabel->nama_pesan}}</td>
                                    <td>{{$tabel->wa_pesan}}</td>
                                    <td class="text-bold-500">{{$tabel->email_pesan}}</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa fa-info"
                                                data-toggle="modal"
                                                data-target="#staticBackdrop{{$tabel->id}}"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$tabel->id}}" data-backdrop="static"
                                    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog mw-650px">
                                        <div class="modal-content">

                                            <!--begin::Modal body detail user-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-12 pt-0 pb-10">
                                                <div class="text-center mb-13">
                                                    <br>
                                                    <h1 class="mb-3">Isi Pesan</h1>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                        <div class="separator d-flex flex-center mb-8">

                                                        </div>
                                                        <textarea class="form-control form-control-solid mb-8" rows="3"
                                                            readonly>{{ $tabel->isi_pesan }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end modal body-->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hoverable rows end -->

    @endsection
