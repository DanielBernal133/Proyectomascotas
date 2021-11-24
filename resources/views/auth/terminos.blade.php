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
                            <a href="index.html">
                                <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a href="contact-us.html">
                                        <span class="menu-text">Contáctanos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('login.form')}}">
                                        <span class="menu-text"> Iniciar Sesión</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('registrar.form') }}">
                                        <span class="menu-text">Registrarse</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                            
                                
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
    </header>    <!-- Header Area End Here -->
    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h2 class="title">Tienda Mascotas</h2>
                        <p class="desc-content"></p>
                        <a href="{{ route('carrito.shop') }}" class="btn flosun-button secondary-btn theme-color  rounded-0">Comprar ahora</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider black-slider-title text-uppercase">Collection</h3>
                        <h2 class="title">Flowers and Candle <br> Birthday Gift</h2>
                        <p class="desc-content">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no, nec ea quodsi invenire. </p>
                        <a href="product-details.html" class="btn flosun-button secondary-btn rounded-0">Shop Now</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->
    <!--Categories Area Start-->
    <div class="categories-area pt-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                    
                    </div>
                    <div class="contenedor2">
                        <div class="categories-img mb-30">
                           
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="cat-2 col-md-8 col-sm-12 col-custom">
                <div class="row">




                </div>
            </div>
        </div>
    </div>

    <!--Categories Area End-->
    <div style="height: 1000px;overflow: auto;width: 75%;margin: 0 auto;padding: 20px; overflow-wrap: break-word;">
                    <h6 style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: 16px; color: rgba(0, 0, 0, 0.87); font-family: 
                    Helvatica-neue, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; 
                    letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal;
                     widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color:
                      initial;" class="ql-align-justify"><h1><center>WOOFMATE<center></h1><p><br></p><p class="ql-align-justify">
         
                         los servicios que ofrece a través del sitio Web ..WOOFMATE (“el Portal”) o por cualquier otro medio, 
                       quedando el Usuario sujeto a estos Términos y Condiciones.</p><p class="ql-align-justify">AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES





                       <p class="ql-align-justify">De conformidad con lo dispuesto en la Ley Estatutaria 1581 de 2012 y su Decreto reglamentario 1377 de 2013, TIENDA DE MASCOTAS (en adelante WOOFMATE), 
 ubicada en la Carrera 68G # 74B - 56 de la ciudad de Bogotá, le informa que la recolección de sus datos personales se realizará de acuerdo con 
 lo señalado en nuestra Política de Tratamiento de Datos.
Al proporcionarnos sus datos personales, se le informa a usted en calidad de titular, que sus datos serán utilizados para los siguientes fines:</P>

<p class="ql-align-justify">Gestionar todas las acciones tendientes a tramitar y finalizar su proceso de compra y de envío.
Gestión a nivel interno de Peticiones, Quejas y Reclamos (“PQR”) y procesos propios de servicio al cliente de la compañía.
Mantenerlo informado sobre los productos y servicios que tenemos disponible.
Implementar estrategias comerciales adaptadas a los diversos tipos de usuarios, 
así como hacer seguimiento de los comportamientos de compra con el fin de prestar un servicio personalizado y generar una mejor experiencia.</p>

<p class="ql-align-justify">Contactar a los usuarios para realizar acciones de verificación de compras y autenticación de identidad, a efectos de garantizar la seguridad 
de las transacciones realizadas.
El tratamiento al que pueden ser sometidos sus datos personales incluye el procesamiento, recolección, almacenamiento, uso, circulación,
 supresión, actualización, transmisión y/o transferencia (entendidas éstas como la posibilidad de compartir información con terceros los datos suministrados).
Los datos recolectados y su procesamiento pueden incluir o concluir información sensible, sobre la cual no está obligado a autorizar el tratamiento,
 pero autorizados serán utilizados para las finalidades anteriormente descritas.
WOOFMATE podría compartir su información personal privada con terceros y aliados comerciales, los cuales en razón de nuestro encargo realizarán
 gestiones para garantizar la continuidad de nuestra operación. Tenga en cuenta que éstos terceros pueden estar en Colombia y/u otros países que
  eventualmente pudieran considerarse como destinos o puertos no seguros de acuerdo lo señalado por la Autoridad Colombiana de Protección de Datos.
   No obstante, WOOFMATE pondrá todo su empeño para garantizar que el tercero al cual pudiere compartírsele sus datos personales cuente con los procesos 
   y procedimientos que garanticen la integridad y confidencialidad de sus datos personales.</P>

   <p class="ql-align-justify">WOOFMATE utiliza cookies las cuales son pequeños archivos de texto que identifican a su computadora en nuestro servidor como un usuario único. Se entiende aceptado el uso de cookies al navegar en el sitio web, y en todo caso a través de este documento nos autoriza expresamente para el uso de cookies.

Solo utilizamos las cookies para tratar datos personales cuando se ha aceptado su uso, y le indicamos que los navegadores pueden ser configurados 
para no aceptar cookies, pero esto podría restringir el uso de la página web y limitar su experiencia en esta. Por ejemplo, las cookies 
se pueden utilizar para reconocer la dirección de protocolo de Internet, lo que le 
ahorrará tiempo a quienes se encuentran en la página web o quieren entrar en el futuro. Sin embargo, nos gustaría señalar que el
 uso de la funcionalidad “Carrito” en el Sitio y la de aceptar una orden sólo es posible con la activación de las cookies.

En calidad de titular tiene derecho a conocer, actualizar, rectificar, revocar la autorización y suprimirla, así como de la posibilidad
 de acceder en cualquier momento a los datos suministrados y el procedimiento para solicitar su corrección, actualización o supresión
  de las bases de datos de WOOFMATE, los puede ejercer observando los procesos de consultas y reclamos contenidos en la Política de Tratamiento 
  del Dato de WOOFMATE.

Cualquier inquietud, consulta o reclamo por favor contáctenos en 3014805316</p>



<h3><center>POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES WOOFMATE.</h3></center><br>


<p class="ql-align-justify"><br>Con el fin de dar cumplimiento a la ley 1581 de 2012, sus decretos reglamentarios, y toda norma posterior , identificada con NIT. 901.110.407-4, con domicilio en la Carrera 68G # 74B - 56 de la ciudad de Bogotá, 
cuyo teléfono es 301 4805316adopta la siguiente política de tratamiento 
de datos personales (en adelante La Política).

Dato personal: Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables.

Dato público: Es el dato que no sea semiprivado, privado o sensible. Son considerados datos públicos, entre otros, los datos relativos
 al estado civil de las personas, a su profesión u oficio y a su calidad de comerciante o de servidor público. Por su naturaleza, los datos 
 públicos pueden estar contenidos, entre otros, en registros públicos, documentos públicos, gacetas y boletines oficiales y sentencias judiciales 
 debidamente ejecutoriadas que no estén sometidas a reserva.</p></br>

 <p class="ql-align-justify"><br>Datos sensibles: Se entiende por datos sensibles aquellos que afectan la intimidad del titular o cuyo uso indebido puede generar su discriminación,
tales como que revelen el origen racial o étnico, la orientación política, las convicciones religiosas o filosóficas, la pertenencia a sindicatos,
 organizaciones sociales, de derechos humanos o que promueva intereses de cualquier partido político o que garanticen los derechos y garantías de 
 partidos políticos de oposición, así como los datos relativos a la salud, a la vida sexual, y los datos biométricos.

Encargado del tratamiento: persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, realice el tratamiento de datos 
personales por cuenta del responsable del tratamiento.

Responsable del tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decida sobre la base de datos 
y/o el tratamiento de los datos.

Titular: Persona natural cuyos datos personales sean objeto de tratamiento.

Tratamiento: Cualquier operación o conjunto de operaciones sobre datos personales, tales como la recolección, almacenamiento, 
uso, circulación o supresión. Transferencia: La transferencia de datos tiene lugar cuando el responsable y/o encargado del tratamiento de datos
 personales, ubicado en Colombia o en el exterior, envía la información o los datos personales a un receptor, que a su vez es responsable del
  tratamiento y se encuentra fuera del país. Transmisión: Tratamiento de datos personales que implica la comunicación de los mismos dentro o fuera
   del territorio de la república de Colombia cuando tenga por objeto la realización de un tratamiento por el encargado por cuenta del responsable

2. OBJETIVO DE LA POLÍTICA: Establecer los criterios para la recolección, almacenamiento, uso, circulación y supresión de los datos personales
 tratados por WOOFMATE.

3. ALCANCE: La Política aplica para toda la información personal registrada en las bases de datos de WOOFMATE,
 quien actúa en calidad de responsable del tratamiento de los datos personales.

4. OBLIGACIONES: La Política es de obligatorio y estricto cumplimiento para WOOFMATE. y todos sus empleados.

5. RESPONSABLE DEL TRATAMIENTO: WOOFMATE, sociedad comercial legalmente constituida, 
 con domicilio principal en la 68G # 74B - 56 de la ciudad de Bogotá, República de Colombia, cuyo teléfono es 301 4805316

6. TRATAMIENTO Y FINALIDAD: WOOFMATE. realizará el almacenamiento, uso, procesamiento, circulación, y en general el tratamiento a la
 información personal con las siguientes finalidades
                        web de WOOFMATE.</p><p class="ql-align-justify"></p><p class="ql-align-justify">


</p>
                   
                               

            </div>
    <!--Product Area Start-->

    <!-- Blog Area End Here -->
    <!-- Brand Logo Area Start Here -->

                        <!-- Slider Navigation -->
                        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Area End Here -->
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


</body>

</html>
