<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WOOFMATE</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!--===== Pre-Loading area Start =====-->
    <div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0">.</h1>
            </div>
        </div>
    </div>
    <!--==== Pre-Loading Area End ====-->

    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-sticky">
            <div class="container custom-area">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="{{ url('/') }}">
                                <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="menu-text">Inicio</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="sidemenu-wrap">
                                    <a href="#" class="minicart-btn toolbar-btn">

                                        @if(Auth::user() != null)
                                        {{Auth::user()->name}}
                                        @endif
                                        <i class="fa fa-user">
                                        </i>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">

                                        <div class="cart-links d-flex justify-content-between col-md-6 " style="margin:auto;flex-flow: row wrap">
                                            @if(Auth::user() == null)
                                            <a class="btn flosun-button secondary-btn rounded-0" href="{{route('login.form')}}">Iniciar Sesión</a>
                                            <a class="btn flosun-button secondary-btn rounded-0"  href="{{ route('registrar.form') }}">Registrarse</a>
                                            @else
                                            <a class="btn flosun-button secondary-btn rounded-0" href="{{url('perfil')}}">Ver perfil</a>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                <li class="minicart-wrap">
                                    <a href="#" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-item_count">3</span>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                        <?php $total= 0 ?>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $idProducto => $detalles)
                                            <?php $total += $detalles['precio'] * $detalles['cantidad'] ?>
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">{{ $detalles['nombre'] }}</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>{{ $detalles['cantidad'] }}×</span>
                                                        <span class="cart-price">{{ $detalles['precio'] }}</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="cart-price-total d-flex justify-content-between">
                                            <h5>Total :</h5>
                                            <h5>{{ $total }}</h5>
                                        </div>
                                        @endif
                                        <div class="cart-links d-flex justify-content-between">
                                            <a class="btn product-cart button-icon flosun-button dark-btn" href="{{ route('cart.view') }}">Ver carrito</a>
                                        </div>

                                    </div>
                                </li>
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Shop</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Product Details</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">Single Product Details</a></li>
                                                <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                <li><a href="external-product-details.html">External Product Details</a></li>
                                                <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                                <li><a href="countdown-product-details.html">Countdown Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Others</a>
                                            <ul class="dropdown">
                                                <li><a href="error404.html">Error 404</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="wishlist.html">Wish List Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                        <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                        <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login-register.html">login &amp; register</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <div class="offcanvas-widget-area">
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">English</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">French</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="currency">
                                <span class="switcher-title">Currency: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">$ USD</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">€ EUR</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="info@yourdomain.com">(1245) 2456 012</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="info@yourdomain.com">info@yourdomain.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <ul class="menu-top-menu">
                            <li><a href="about-us.html">About Us</a></li>
                        </ul>
                        <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="switcher">
                            <div class="language">
                                <span class="switcher-title">Language: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">English</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">French</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="currency">
                                <span class="switcher-title">Currency: </span>
                                <div class="switcher-menu">
                                    <ul>
                                        <li><a href="#">$ USD</a>
                                            <ul class="switcher-dropdown">
                                                <li><a href="#">€ EUR</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-info-wrap text-left text-black">
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="info@yourdomain.com">(1245) 2456 012</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="info@yourdomain.com">info@yourdomain.com</a>
                                </li>
                            </ul>
                            <div class="widget-social">
                                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Carrito Woofmate</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li><a href="{{ url('/') }}">Tienda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Shop Main Area Start Here -->
    <div class="shop-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mb-30">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i class="fa fa-th"></i></button>
                            <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                        <div class="shop-select">
                            <form class="d-flex flex-column w-100" action="#">
                                <div class="form-group">
                                    <select class="form-control nice-select w-100">
                                        <option selected value="1">Alphabetically, A-Z</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--shop toolbar end-->
                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">
                        <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                            <div class="product-item">
                                <div class="single-product position-relative mr-0 ml-0">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">

                                        </a>
                                        <span class="onsale">Sale!</span>
                                        <div class="add-action d-flex flex-column position-absolute">


                                            <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach ($productos as $producto)
                                    <div class="product-content">
                                        <div class="product-title">


                                            <h4 class="title-2"> <a href="product-details.html">{{ $producto->nombreProducto }}</a></h4>
                                        </div>

                                        <div class="price-box">
                                            <span class="regular-price ">{{ $producto->precioProducto }}</span>

                                                


                                        </div>

                                        <a href="{{ url('add-to-cart/'.$producto->idProducto) }}" class="btn product-cart">Agregar al carrito</a>
                                    </div>
                                    <div class="product-content-listview">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.html"></a></h4>
                                        </div>
                                        <div class="price-box">

                                                <img src="{{asset('storage').'/'.$producto->imagenProducto}}">

                                            <span class="old-price"><del>{{ $producto->precioProducto }}</del></span>

                                                <img src="{{asset('storage').'/'.$producto->imagenProducto}}">

                                        </div>

                                        <p class="desc-content">{{ $producto->descripcionProducto }}</p>
                                        <a href="#">
                                            <img src="{{asset('storage').'/'.$producto->imagenProducto}}">
                                        </a>
                                        <div class="button-listview">
                                            <a href="{{ url('add-to-cart/'.$producto->idProducto) }}" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>Añadir al carrito</span> </a>
                                            <a class="list-icon" href="compare.html" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" title="Compare"></i>
                                            </a>
                                            <a class="list-icon" href="wishlist.html" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                            <div class="product-item">
                                <div class="single-product position-relative mr-0 ml-0">
                                    <div class="product-image">

                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.html" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                                            </a>
                                            <a href="wishlist.html" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>

                                    </div>
                                    @endforeach
                                    </div>

                                </div>
                            </div>

                        </div>




                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">next</a></li>
                                        <li><a href="#">&gt;&gt;</a></li>
                                    </ul>
                                </div>
                                <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Shop Main Area End Here -->
    <!--Footer Area Start-->
    <footer class="footer-area mt-no-text">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">See Information</h2>
                            <div class="widget-body">
                                <address>123, ABC, Road ##, Main City, Your address goes here.<br>Phone: 01234 567 890<br>Email: https://example.com</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container custom-area">
                <div class="footer-logo">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-footer.png" alt="Logo Image">
                    </a>
                </div>
                <div class="row">
                    <div class="col-12 text-center col-custom">
                        <div class="copyright-content">
                            <p>Copyright © 2021 Woofmate Bogotá, Colombia</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Area End-->

    <!-- Modal -->
    <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid custom-area">
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="modal-product-img">
                                    <a class="w-100" href="#">
                                        <img class="w-100" src="assets/images/product/large-size/1.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">Product dummy name</h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$80.00</span>
                                            <span class="old-price"><del>$90.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>1 Review</span>
                                        </div>
                                        <p class="desc-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame bel...</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.html">Add to cart</a>
                                                <a class="btn flosun-button secondary-btn rounded-0" href="wishlist.html">Add to wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- Ajaxchimpt js -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Ui js -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Jquery Countdown js -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @if ( session("mensaje_exito"))
        <script>
            swal("Agregado" , "{{ session('mensaje_exito') }}" , "success", {
                button: "OK",
            });
        </script>
    {{-- <div>{{ session("mensaje_exito") }} </div> --}}
    @endif
</body>

</html>
