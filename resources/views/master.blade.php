<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESA - Beauty Shops</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
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
    </div> -->
    <!-- Offcanvas Menu End -->

  
                @yield ('main')


                <footer class="footer" align="center">
        <div class="container" >
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/Asset 4.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
 
    <!-- Js Plugins -->
    <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('script')
    <script src="{{URL::asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{URL::asset('assets/js/mixitup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="province_from"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="origin"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="origin"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="origin"]').empty();
                }
            });

            $('select[name="province_to"]').on('change', function () {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
            
        });
    </script> 

</body>

</html>