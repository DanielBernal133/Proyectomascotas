<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Perfil-Woofmate</title>
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
                            <a href="index.html">
                                <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="contact-us.html">
                                        <span class="menu-text">Inicio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us.html">
                                        <span class="menu-text">Tienda</span>
                                    </a>
                                </li>
                                    <li>
                                        <a href="contact-us.html">
                                            <span class="menu-text">Blog</span>
                                        </a>
                                    </li>
                                <li>
                                    <a href="contact-us.html">
                                        <span class="menu-text">Contáctanos</span>
                                    </a>
                                </li>


                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-3 col-md-8 col-8 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    <a href="#" class="minicart-btn toolbar-btn">

                                        @if(Auth::user() != null)
                                        {{Auth::user()->name}}
                                        @endif
                                        <i class="fa fa-user">
                                        </i>
                                    </a>
                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">

                                        <div class="cart-links d-flex justify-content-between col-md-6 " style="margin:auto;flex-flow: row wrap">
                                            <a class="btn flosun-button secondary-btn rounded-0" href="{{url('logout')}}">Cerrar Sesión</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="sidemenu-wrap">
                                    <a href="#"><i class="fa fa-search"></i> </a>
                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                        <li>
                                            <form action="#">
                                                <input name="search" id="search" placeholder="Search" type="text">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
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
                        <h3 class="Perfil"></h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- my account wrapper start -->
    <div class="my-account-wrapper mt-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-custom">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>Historial de Pedidos</a>
                                    <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i>Soporte</a>
                                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>Metodos de Pago</a>
                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>Dirección</a>
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i>Configurar mi cuenta</a>
                                    <a class="btn flosun-button secondary-btn rounded-0" href="{{url('logout')}}"><i class="fa fa-sign-out"></i>Cerrar Sesión</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8 col-custom">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Información de tu cuenta</h3>
                                            <center><div class="col-lg-6 col-custom">
                                                <div class="single-input-item mb-3">
                                                    <label for="first-name" class="required mb-1">Nombre</label>
                                                    <input type="text" id="first-name" placeholder="Carolina" />
                                                </div>
                                                <div  class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Correo electrónico</label>
                                                    <input type="email" id="email" placeholder="splopez186@misena.edu.co" />
                                                </div>
                                                <address>
                                                    <p><strong>Carolina</strong></p>
                                                    <p>Calle 127 #19a-44<br>
                                                Norte Bogotá</p>
                                                    <p>Celular: 3026148957</p>
                                                </address>
                                                <a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-edit mr-2"></i>Editar Dirección</a>
                                            </div></center>

                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Historial de pedidos</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Orden</th>
                                                            <th>Día</th>
                                                            <th>Estado</th>
                                                            <th>Total</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>10/09/2021</td>
                                                            <td>Pendiente</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html" class="btn flosun-button secondary-btn theme-color  rounded-0">Ver</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>15/09/2021</td>
                                                            <td>Aprovado</td>
                                                            <td>$20000</td>
                                                            <td><a href="cart.html" class="btn flosun-button secondary-btn theme-color  rounded-0">Ver</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>18/07/2021</td>
                                                            <td>En espera</td>
                                                            <td>$55000</td>
                                                            <td><a href="cart.html" class="btn flosun-button secondary-btn theme-color  rounded-0">Ver</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Soporte</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Producto</th>
                                                            <th>Día</th>
                                                            <th>Expiro</th>
                                                            <th>Descargar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Gimnasio para gatos</td>
                                                            <td>14/09/2021</td>
                                                            <td>Si</td>
                                                            <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i>Descargar</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Snake perro</td>
                                                            <td>15/05/2021</td>
                                                            <td>No</td>
                                                            <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i>Descargar</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Método de pago.</h3>
                                            <p class="saved-message">Aún no puede guardar su método de pago.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dirección</h3>
                                            <address>
                                                <p><strong>Carolina</strong></p>
                                                <p>Calle 127 #19a-44<br>
                                            Norte Bogotá</p>
                                                <p>Celular: 3026148957</p>
                                            </address>
                                            <a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-edit mr-2"></i>Editar Dirección</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Configuraciones de tu perfil</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-1">Nombre</label>
                                                                <input type="text" id="first-name" placeholder="Nombre" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1">Apellido</label>
                                                                <input type="text" id="last-name" placeholder="Apellido" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1">Nombre de Usuario</label>
                                                        <input type="text" id="display-name" placeholder="Nombre de Usuario" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Correo electrónico</label>
                                                        <input type="email" id="email" placeholder="Correo electrónico" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Contraseña</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-1">Contraseña actual</label>
                                                            <input type="password" id="current-pwd" placeholder="Contraseña actual" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-1">Nueva contraseña</label>
                                                                    <input type="password" id="new-pwd" placeholder="Nueva contraseña" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd" class="required mb-1">Confirmar contraseña</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirmar contraseña" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button">
                                                        <button class="btn flosun-button secondary-btn theme-color  rounded-0">Guardar cambios</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
    <!--Footer Area Start-->
    <footer class="footer-area">
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


</body>

</html>
