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


<section id="upload">
    <div class="container">
        <div class="row">
            
        </div>
        <br>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
               
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><b><i class="fa  fa-money"></i> Upload Bukti Transfer</b></h3>
                    <br>
                    <h5><b>BCA</b></h5>
                    <h5>Esa Rizky Rohdaina   : 775 0378859</h5>
                    <br>
                    <h5><b>Bank DKI</b></h5>
                    <h5>Jodi Setiawan   : 502 28000437</h5>    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Total</th>
                                <th>Upload</th>
                            </tr>
                        </thead>

                        <?php $n= 1; ?>

                        <tbody>
                            <tr>
                                <form class="" action="{{ route('upload.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <td><?php echo $n++ ?></td>
                                    <td>
                                        <input class="form-control" name="nama" value="{{ Auth::User()->name }}"
                                            readonly>
                                    </td>
                                    <td><img src="" id="img" class="img"
                                            style="height: 160px; width: 140px; background-color: #ccc; border: 2px solid gray;">
                                        <input type="file" name="image" id="photo" style="display: none;" required="">
                                        <br>
                                        <input type="button" name="" value="Browse" id="klikfoto"
                                            class="btn btn-success btn-sm form-control">
                                    <td><input type="number" class="form-control" name="total" placeholder="total" required=""></td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm"> Upload</button>
                                </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
</section>


@section('script')
<script>
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

</script>
@yield('script')
@endsection

@stop
