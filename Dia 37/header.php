<!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-color">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center">
                                    <li>
                                        <span>contato@torneiraautomatica.com.br</span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-lg-6">
                            <div class="header-links">
                                <ul class="nav justify-content-end">
                                    <li><a href="login-register.html">Register</a></li>
                                    <li><a href="login-register.html">Login</a></li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-middle-area header-middle-area-black-text">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- start logo area -->
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.jpeg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- start search box area -->
                        <div class="col-lg-8">
                            <div class="search-box-wrapper">
                                <form class="search-box-inner">
                                    <input type="text" class="search-field bg-light" placeholder="Digite aqui o que você precisa">
                                    <button class="search-btn"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- start search box end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->

            <!-- main menu area start -->
            <div class="main-menu-area sticky bg-white">
                <div class="container bdr-top-3">
                    <div class="row align-items-center">
                        
                        <?php if($_SERVER['REQUEST_URI'] != "/torneira-automatica/index.php"){ ?>
                        <div class="col-lg-3">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle">
                                    <i class="ion-android-menu"></i>
                                    Pesquise por Categorias
                                </div>
                                <nav class="category-menu">
                                    <ul class="categories-list">
                                        <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">accessories</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Power Bank</a></li>
                                                        <li><a href="shop.html">Data Cable</a></li>
                                                        <li><a href="shop.html">Power Cable</a></li>
                                                        <li><a href="shop.html">Battery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown three-column">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                        <li><a href="shop.html">uPhone</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                        <li><a href="shop.html">Over-ear</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">accessories</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Power Bank</a></li>
                                                        <li><a href="shop.html">Data Cable</a></li>
                                                        <li><a href="shop.html">Power Cable</a></li>
                                                        <li><a href="shop.html">Battery</a></li>
                                                        <li><a href="shop.html">OTG Cable</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                            <!-- Mega Category Menu Start -->
                                            <ul class="category-mega-menu dropdown two-column">
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Smartphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Samsome</a></li>
                                                        <li><a href="shop.html">GL Stylus</a></li>
                                                        <li><a href="shop.html">Uawei</a></li>
                                                        <li><a href="shop.html">Cherry Berry</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">headphone</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Desktop Headphone</a></li>
                                                        <li><a href="shop.html">Mobile Headphone</a></li>
                                                        <li><a href="shop.html">Wireless Headphone</a></li>
                                                        <li><a href="shop.html">LED Headphone</a></li>
                                                    </ul>
                                                </li>
                                            </ul><!-- Mega Category Menu End -->
                                        </li>
                                        <li><a href="shop.html">Frozen</a></li>
                                        <li><a href="shop.html">Grocery</a></li>
                                        <li><a href="shop.html">Kitchenware</a></li>
                                        <li><a href="shop.html">Tools</a></li>
                                        <li><a href="shop.html">Electronics</a></li>
                                        <li><a href="shop.html">Kitchenware</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <?php } ?>
                        <div class="col-lg-9">
                            <div class="main-menu home-main">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="index.php">INÍCIO
                                            </a>
                                        </li>
                                        <li><a href="#">SOBRE NÓS</a>
                                            
                                        </li>
                                        <li><a href="shop.php">PRODUTOS</a>
                                            
                                        </li>
                                        <li><a href="blog.php">DICAS DE ECONOMIA</a>
                                            
                                        </li>
                                        <li><a href="contato.php">Fale Conosco</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- main menu area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.jpeg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                               
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-android-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                <i class="ion-android-menu"></i>
                                Todas as Categorias
                                <span><i class="ion-android-arrow-dropdown"></i></span>
                            </div>
                            <nav class="category-menu">
                                <ul class="categories-list">
                                    <li class="menu-item-has-children"><a href="shop.php">Fruits & Vegetables</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown">
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Samsome</a></li>
                                                    <li><a href="shop.php">GL Stylus</a></li>
                                                    <li><a href="shop.php">Uawei</a></li>
                                                    <li><a href="shop.php">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Desktop Headphone</a></li>
                                                    <li><a href="shop.php">Mobile Headphone</a></li>
                                                    <li><a href="shop.php">Wireless Headphone</a></li>
                                                    <li><a href="shop.php">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Power Bank</a></li>
                                                    <li><a href="shop.php">Data Cable</a></li>
                                                    <li><a href="shop.php">Power Cable</a></li>
                                                    <li><a href="shop.php">Battery</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Desktop Headphone</a></li>
                                                    <li><a href="shop.php">Mobile Headphone</a></li>
                                                    <li><a href="shop.php">Wireless Headphone</a></li>
                                                    <li><a href="shop.php">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.php">Fresh Meat</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown three-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Samsome</a></li>
                                                    <li><a href="shop.php">GL Stylus</a></li>
                                                    <li><a href="shop.php">Uawei</a></li>
                                                    <li><a href="shop.php">Cherry Berry</a></li>
                                                    <li><a href="shop.php">uPhone</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Desktop Headphone</a></li>
                                                    <li><a href="shop.php">Mobile Headphone</a></li>
                                                    <li><a href="shop.php">Wireless Headphone</a></li>
                                                    <li><a href="shop.php">LED Headphone</a></li>
                                                    <li><a href="shop.php">Over-ear</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">accessories</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Power Bank</a></li>
                                                    <li><a href="shop.php">Data Cable</a></li>
                                                    <li><a href="shop.php">Power Cable</a></li>
                                                    <li><a href="shop.php">Battery</a></li>
                                                    <li><a href="shop.php">OTG Cable</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop.php">dairy & eggs</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu dropdown two-column">
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">Smartphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Samsome</a></li>
                                                    <li><a href="shop.php">GL Stylus</a></li>
                                                    <li><a href="shop.php">Uawei</a></li>
                                                    <li><a href="shop.php">Cherry Berry</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.php">headphone</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Desktop Headphone</a></li>
                                                    <li><a href="shop.php">Mobile Headphone</a></li>
                                                    <li><a href="shop.php">Wireless Headphone</a></li>
                                                    <li><a href="shop.php">LED Headphone</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                    <!-- <li><a href="shop.php">Frozen</a></li>
                                    <li><a href="shop.php">Grocery</a></li>
                                    <li><a href="shop.php">Kitchenware</a></li>
                                    <li><a href="shop.php">Tools</a></li>
                                    <li><a href="shop.php">Electronics</a></li>
                                    <li><a href="shop.php">Kitchenware</a></li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->