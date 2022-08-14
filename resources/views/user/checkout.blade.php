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
                                    <li><a href="./shopping_cart">Shopping Cart</a></li>
                                    <li class="active"><a href="./checkout">Check Out</a></li>

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
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <form class="ps-checkout__form" action="{{  route ('produkDipesan.store') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group ">
                            <!--<label>Provinsi asal</label> -->
                            <input type="hidden" value="9" class="form-control" name="province_origin">
                        </div>
                        <div class="form-group ">
                            <!-- <label>Kota Asal</label> -->
                            <input type="hidden" value="79" class="form-control" id="city_origin" name="city_origin">
                        </div>
                        <div class="form-group ">
                            <label>Nama Pemesan<span>*</span>
                            </label>
                            <input type="text" name="name_pd" class="form-control" id="first" required="">
                        </div>
                        <div class="form-group ">
                            <label>No Telepon (WA)<span>*</span>
                            </label>
                            <input type="text" name="tlp_pd" class="form-control" id="number" required="">
                        </div>
                        <div class="form-group ">
                            <label>Email<span>*</span>
                            </label>
                            <input type="text" name="email_pd" class="form-control" id="email" required="">
                        </div>
                        <div class="form-group ">
                            <!-- <label> <label>Total Belanja
                            </label>!-->
                            <input type="hidden" id="subtotal_pd" value="{{ $pesanan->jumlah_harga }}"
                                name="subtotal_pd" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label>Total berat (gram) </label>
                            <input class="form-control" value="{{ $pesanan->berat_produk }}" id="weight" name="weight">
                        </div>
                        <div class="form-group ">
                            <label>Alamat<span>*</span>
                            </label>
                            <textarea name="address" class="form-control" rows="5"
                                placeholder="Alamat Lengkap pengiriman" required=""></textarea>
                        </div>
                        <div class="form-group form-group--inline">
                            <label for="provinsi">Provinsi Tujuan</label>
                            <select name="province_id" id="province_id" class="form-control" required="">
                                <option value="">Provinsi Tujuan</option>
                                @foreach ($provinsi as $row)
                                <option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}">
                                    {{$row['province']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nama_provinsi" required=""
                                nama="nama_provinsi" placeholder="ini untuk menangkap nama provinsi ">
                        </div>
                        <div class="form-group ">
                            <label>Kota Tujuan<span>*</span>
                            </label>
                            <select name="kota_id" id="kota_id" required="" class="form-control">
                                <option value="">Pilih Kota</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nama_kota" required="" name="nama_kota"
                                placeholder="ini untuk menangkap nama kota">
                        </div>
                        <div class="form-group ">
                            <label>Pilih Ekspedisi<span>*</span>
                            </label>
                            <select name="kurir" id="kurir" class="form-control" required="">
                                <option value="">Pilih kurir</option>
                                <option value="jne">JNE</option>
                                <option value="tiki">TIKI</option>
                                <option value="pos">POS INDONESIA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Layanan<span>*</span>
                            </label>
                            <select name="layanan" id="layanan" class="form-control slct-info" required="">
                                <option value="">Pilih layanan</option>
                            </select>

                            </select>
                        </div>
                        <div class="form-group ">
                            <label>Kode Pos<span>*</span>
                            </label>
                            <input type="text" name="kode_pos_pd" class="form-control" id="zip">
                        </div>
                        <div class="form-group ">
                            <!--<label><label>Total Ongkir
                            </label>!-->
                            <input type="hidden" name="total_ongkir_pd" id="ongkir" class="form-control harga-inp">
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea class="form-control" name="pesan_pd" id="message" rows="1"
                                placeholder="(Opsional) Pesan untuk penjual"></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <p align="right">Tanggal pesan : {{ $pesanan->tanggal }}</p>
                            <div class="checkout__order__products">Product <span>Total</span></div>


                            @if(!empty($pesanan))
                            <input type="hidden" name="tanggal_pd" value="{{ $pesanan->tanggal }}">

                            <ul class="checkout__order__products">

                                @foreach($pesanan_details as $pesanan_detail)

                                <ul class="checkout__total__products">
                                    <li>{{ $pesanan_detail->barang->nama_barang }} <span>x {{ $pesanan_detail->jumlah }}
                                            Rp. {{ number_format($pesanan_detail->jumlah_harga) }} </span></li>


                                </ul>
                                @endforeach
                            </ul>
                            <ul class="checkout__order__products">
                                <li> Subtotal
                                    <span>Rp. {{ number_format($pesanan->jumlah_harga) }}</span>
                                </li>
                                <li> Harga Ongkir
                                    <span>Rp. <input name="total_ongkir" id="harga-inp2"
                                            style="background:transparent;border:none;text-align:right;"></input></span>

                                </li>
                                <li>
                                    <input type="hidden" class="penjumlahan2" name="total_belanja_pd">
                                    <li><b>Grand Total<b><span id="penjumlahan" style="float: right; width: 100px; text-align: right;"></span>

                                </li>
                            </ul>

                            @endif
                            <button class="site-btn" type="submit"
                                onclick=" return confirm('Apakah kamu yakin?');">Pembayaran</button>
                        </div>
                    </div>








                    <input type="hidden" readonly class="form-control harga-inp" placeholder="Masukkan Jumlah Pesanan"
                        oninvalid="alert('You must fill out the form!');" required>
                </div>

        </div>
        </div>
        </form>
        </div>
    </section>
    <!-- Checkout Section End -->

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

    @section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
            //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
            $('select[name="province_id"]').on('change', function () {
                // membuat variable namaprovinsiku untyk mendapatkan atribut nama provinsi
                var namaprovinsiku = $("#province_id option:selected").attr("namaprovinsi");
                // menampilkan hasil nama provinsi ke input id nama_provinsi
                $("#nama_provinsi").val(namaprovinsiku);
                // kita buat variable provincedid untk menampung data id select province
                let provinceid = $(this).val();
                //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
                if (provinceid) {
                    // jika di temukan id nya kita buat eksekusi ajax GET
                    jQuery.ajax({
                        // url yg di root yang kita buat tadi
                        url: "/kota/" + provinceid,
                        // aksion GET, karena kita mau mengambil data
                        type: 'GET',
                        // type data json
                        dataType: 'json',
                        // jika data berhasil di dapat maka kita mau apain nih
                        success: function (data) {
                            // jika tidak ada select dr provinsi maka select kota kososng / empty
                            $('select[name="kota_id"]').empty();
                            // jika ada kita looping dengan each
                            $.each(data, function (key, value) {
                                // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                                $('select[name="kota_id"]').append(
                                    '<option value="' + value.city_id +
                                    '" namakota="' + value.type + ' ' + value
                                    .city_name + '">' + value.type + ' ' + value
                                    .city_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kota_id"]').empty();
                }
            });
        });
        //memberikan action ketika select name kota_id di select
        //memberikan action ketika select name kota_id di select
        $('select[name="kota_id"]').on('change', function () {
            // membuat variable namakotaku untyk mendapatkan atribut nama kota
            var namakotaku = $("#kota_id option:selected").attr("namakota");
            // menampilkan hasil nama provinsi ke input id nama_provinsi
            $("#nama_kota").val(namakotaku);
        });
        $('select[name="kurir"]').on('change', function () {
            // kita buat variable untuk menampung data data dari  inputan
            // name city_origin di dapat dari input text name city_origin
            let origin = $("input[name=city_origin]").val();
            // name kota_id di dapat dari select text name kota_id
            let destination = $("select[name=kota_id]").val();
            // name kurir di dapat dari select text name kurir
            let courier = $("select[name=kurir]").val();
            // name weight di dapat dari select text name weight
            let weight = $("input[name=weight]").val();
            // alert(courier);
            if (courier) {
                jQuery.ajax({
                    url: "/origin=" + origin + "&destination=" + destination + "&weight=" + weight +
                        "&courier=" + courier,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('select[name="layanan"]').empty();
                        // ini untuk looping data result nya
                        $.each(data, function (key, value) {
                            // ini looping data layanan misal jne reg, jne oke, jne yes
                            $.each(value.costs, function (key1, value1) {
                                // ini untuk looping cost nya masing masing
                                // silahkan pelajari cara menampilkan data json agar lebi paham
                                $.each(value1.cost, function (key2, value2) {
                                    $('select[name="layanan"]').append(
                                        '<option value="' + key +
                                        '" ongkir="' + value2.value +
                                        '">' + value1.service + '-' +
                                        value1.description + '-' +
                                        value2.value + '</option>');

                                });
                            });
                        });
                    }
                });
            } else {
                $('select[name="layanan"]').empty();
            }

        });
        $('select[name="layanan"]').on('change', function () {

            var hargaongkir = $("#layanan option:selected").attr("hargaongkir");

            $("#ongkoskirim").append(hargaongkir);
            // kita akan menampilkan harga ongkirnya di id ongkos kirim, jadi kalian bisa buat inputan dengan id ongkos kirim



        });

    </script>
    <script>
        $('.slct-info').on('change', function () {
            var ongkir = $('select.slct-info option:selected').attr('ongkir');

            $('.harga-inp').val(ongkir);
        });

    </script>
    <script>
        $('.slct-info').on('change', function () {
            var ongkir = $('select.slct-info option:selected').attr('ongkir');

            $("#harga-inp2").val(ongkir);
        });

    </script>

    <!--total belanja-->
    <script>
        $('.slct-info').on('change', function () {
            var ongkir = $('select.slct-info option:selected').attr('ongkir');

            var b1 = document.getElementById('subtotal_pd').value;
            var b2 = document.getElementById('ongkir').value;
            var penjumlahan = parseInt(b1) + parseInt(b2);

            document.getElementById("penjumlahan").innerHTML = penjumlahan;
        });

    </script>

    <script>
        $('.slct-info').on('change', function () {
            var ongkir = $('select.slct-info option:selected').attr('ongkir');

            var b1 = document.getElementById('subtotal_pd').value;
            var b2 = document.getElementById('ongkir').value;
            var penjumlahan2 = parseInt(b1) + parseInt(b2);

            $('.penjumlahan2').val(penjumlahan2);

        });

    </script>

    @endsection
