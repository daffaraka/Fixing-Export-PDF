@extends('admin')
@section('main')

<div id="popUpModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="frm-edit">
                    {{Form::open(['url' => 'barangup', 'files' => 'true'])}}
                    <div class="form-group" style="padding-bottom: 20px !important;">
                        <div class="form-group">
                            <h5>Nama Produk</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::text('nama_barang',null,['class' => 'form-control nama_barang'])}}
                        </div>
                        <div class="form-group">
                            <h5>Kategori produk</h5>
                            <input type="hidden" name="ids" class="idx">
                            <select name="kategori" id="select" class="form-control kategori">
                                <option>Please select</option>
                                <option>Facial Wash</option>
                                <option>Serum</option>
                                <option>Parfume</option>
                                <option>Lipstick</option>
                                <option>Deodorant</option>
                                <option>Body Lotion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Harga Produk</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::text('harga_barang',null,['class' => 'form-control harga_barang'])}}
                        </div>
                        <div class="form-group">
                            <h5>Jumlah</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::text('jumlah',null,['class' => 'form-control jumlah'])}}
                        </div>
                        <h4>Image1</h4>
                        <div class="form-group">

                            <table>
                                <tr>
                                    <td><img src="" id="img" class="image"
                                            style="height: 160px; width: 140px; background-color: #ccc; border: 2px solid gray;">
                                        <input type="file" name="image1" id="photo" style="display: none;">
                                        <input type="hidden" name="old_logo1" class="image">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="button" name="" value="Browse" id="klikfoto"
                                            class="btn-success form-control"></td>
                                </tr>
                            </table>
                        </div>
                        <h4>Image2</h4>
                        <div class="form-group">

                            <table>
                                <tr>
                                    <td><img src="" id="img2" class="image2"
                                            style="height: 160px; width: 140px; background-color: #ccc; border: 2px solid gray;">
                                        <input type="file" name="image2" id="photo2" style="display: none;">
                                        <input type="hidden" name="old_logo2" class="image2">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="button" name="" value="Browse" id="klikfoto2"
                                            class="btn-success form-control"></td>
                                </tr>
                            </table>
                        </div>
                        <h4>Image3</h4>
                        <div class="form-group">

                            <table>
                                <tr>
                                    <td><img src="" id="img3" class="image3"
                                            style="height: 160px; width: 140px; background-color: #ccc; border: 2px solid gray;">
                                        <input type="file" name="image3" id="photo3" style="display: none;">
                                        <input type="hidden" name="old_logo3" class="image3">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="button" name="" value="Browse" id="klikfoto3"
                                            class="btn-success form-control"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <h5>Deskripsi</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::textarea('deskripsi',null,['class' => 'form-control deskripsi'])}}
                        </div>
                        <div class="form-group">
                            <h5>Material</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::textarea('material',null,['class' => 'form-control material'])}}
                        </div>
                        <div class="form-group">
                            <h5>Berat Produk</h5>
                            <input type="hidden" name="ids" class="idx">
                            {{Form::text('berat',null,['class' => 'form-control berat'])}}
                        </div>

                    </div>
                    <div class="form-group" style="padding-bottom: 20px !important;">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-sm btn-block">Simpan</button>
                            </div>
                            {{Form::close()}}
                            <div class="col-6">
                                <button type="button" class="btn btn-danger btn-sm btn-block"
                                    data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="frm-hapus">
                    <h5 align="center">Apakah anda yakin ingin menghapus data ini ?</h5>
                    <br>
                    <div class="form-group" style="padding-bottom: 20x !important;">

                        <div class="row justify-content-around">
                            <div class="col-6">
                                {{Form::open(['url' => 'barangdel'])}}
                                <input type="hidden" name="id_barang" class="idnya">
                                <button type="submit" class="btn btn-danger btn-sm btn-block">Konfirmasi</button>
                                {{Form::close()}}
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-success btn-sm btn-block"
                                    data-dismiss="modal">Batal</button>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="img/Asset 4.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href="./barang">
                                <i class="fas fa-chart-bar"></i>Barang</a>
                        </li>
                        <li>
                            <a href="./best_seller">
                                <i class="fas fa-table"></i>Produk Unggulan</a>
                        </li>
                        <li>
                            <a href="./pesanadmin">
                                <i class="far fa-check-square"></i>Pesan</a>
                        </li>
                        <li>
                            <a href="./pelanggan">
                                <i class="fas fa-calendar-alt"></i>Pelanggan</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3><b>Input Produk</b></h3>
                        </div>
                        <div class="card-body card-block">
                            <form class="horizontal" action="{{ route('barang.store') }}" method="post"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nama_barang" class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Kategori Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="kategori" id="select" class="form-control">
                                            <option>Please select</option>
                                            <option>Facial Wash</option>
                                            <option>Serum</option>
                                            <option>Parfume</option>
                                            <option>Lipstick</option>
                                            <option>Deodorant</option>
                                            <option>Body Lotion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Harga Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" name="harga_barang" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Jumlah Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" name="jumlah" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Foto Produk 1</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image1" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Foto Produk 2</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image2" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Foto Produk 3</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image3" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Deskripsi Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="deskripsi" rows="9" placeholder="Content..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Material Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="material" rows="9" placeholder="Content..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Berat Produk (Dalam Gram)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" name="berat" class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" value="save" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>



                        <div class="row m-t-30">

                            <div class="col-md-12">
                            <h3>
                                        <p align="center">
                                            List Produk
                                        </p>
                                    </h3>
                                    <br>

                                <!-- DATA TABLE-->

                                <div class="table-responsive m-b-40">
                                    
                                    <table class="table table-borderless table-data3">
                                        <thead>

                                            <tr>
                                                <th>Nama Produk</th>
                                                <th>Kategori Produk</th>
                                                <th>Harga Produk</th>
                                                <th>Foto Produk</th>
                                                <th>Deskripsi Produk</th>
                                                <th>Material Produk</th>
                                                <th>Berat Produk</th>
                                                <th>Aksi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($data))
                                            @foreach($data as $tabel)
                                            <tr>
                                                <td>{{$tabel->nama_barang}}</td>
                                                <td>{{$tabel->kategori}}</td>
                                                <td>{{$tabel->harga_barang}}</td>
                                                <td><img src="{{ url('img') }}/{{ $tabel->image1 }}" width="400" alt="">
                                                </td>
                                                <td>{{$tabel->deskripsi}}</td>
                                                <td>{{$tabel->material}}</td>
                                                <td>{{$tabel->berat}}</td>
                                                <td>
                                                    <button class="btn btn-danger fas fa-exclamation-triangle btn-apus"
                                                        value="{{$tabel->id_barang}}">Hapus</button></td>
                                                <td><button class="btn btn-success far fa-edit btn-sm btn-ubah"
                                                        nama_barang="{{$tabel->nama_barang}}"
                                                        kategori="{{$tabel->kategori}}"
                                                        harga_barang="{{$tabel->harga_barang}}"
                                                        jumlah="{{$tabel->jumlah}}" image1="{{$tabel->image1}}"
                                                        image2="{{$tabel->image2}}" image3="{{$tabel->image3}}"
                                                        deskripsi="{{$tabel->deskripsi}}"
                                                        material="{{$tabel->material}}" berat="{{$tabel->berat}}"
                                                        idx="{{$tabel->id_barang}}">Edit</button></td>

                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>

                                <!-- END DATA TABLE-->


                                @stop
                                @section('script')

                                <script type="text/javascript ">
                                    $('.btn-ubah').on('click', function () {

                                        var imagename = $(this).attr('image1');
                                        var image = 'img/' + imagename;

                                        var imagename2 = $(this).attr('image2');
                                        var image2 = 'img/' + imagename2;

                                        var imagename3 = $(this).attr('image3');
                                        var image3 = 'img/' + imagename3;
                                        $('#popUpModal').modal('show');
                                        $('.nama_barang').val($(this).attr('nama_barang'));
                                        $('.kategori').val($(this).attr('kategori'));
                                        $('.harga_barang').val($(this).attr('harga_barang'));
                                        $('.jumlah').val($(this).attr('jumlah'));

                                        $('.deskripsi').val($(this).attr('deskripsi'));
                                        $('.material').val($(this).attr('material'));
                                        $('.berat').val($(this).attr('berat'));
                                        $('.idx').val($(this).attr('idx'));
                                        $('#img').attr('src', image);
                                        $('.image1').val($(this).attr('image1'));
                                        $('#img2').attr('src', image2);
                                        $('.image').val($(this).attr('image2'));
                                        $('#img3').attr('src', image3);
                                        $('.image').val($(this).attr('image3'));
                                        $('.frm-edit').show();
                                        $('.frm-hapus').hide();
                                    })
                                    $('.btn-apus').on('click', function () {
                                        $('#popUpModal').modal('show');
                                        $('.frm-hapus').show();
                                        $('.frm-edit').hide();
                                        $('.idnya').val($(this).val());
                                    })

                                    $('#klikfoto').on('click', function (e) {
                                        $('#photo').click();
                                    })
                                    $('#photo').on('change', function (e) {
                                        var fileInput = this;
                                        if (fileInput.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function (e) {
                                                $('#img').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(fileInput.files[0]);

                                        }
                                    })
                                    $('#klikfoto2').on('click', function (e) {
                                        $('#photo2').click();
                                    })
                                    $('#photo2').on('change', function (e) {
                                        var fileInput = this;
                                        if (fileInput.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function (e) {
                                                $('#img2').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(fileInput.files[0]);

                                        }
                                    })
                                    $('#klikfoto3').on('click', function (e) {
                                        $('#photo3').click();
                                    })
                                    $('#photo3').on('change', function (e) {
                                        var fileInput = this;
                                        if (fileInput.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function (e) {
                                                $('#img3').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(fileInput.files[0]);

                                        }
                                    })

                                </script>
                                @endsection
