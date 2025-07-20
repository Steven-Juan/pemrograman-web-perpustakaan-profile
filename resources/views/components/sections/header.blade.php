<header class="header-area-two transparent-header">
    <div class="header-navigation">
        <div class="custom-container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-lg-2 col-4">
                    <div class="brand-logo">
                        <a href="/">
                            <x-logo />
                        </a>
                    </div>
                </div>

                <!-- Navigasi Utama -->
                <div class="col-lg-7 col-8">
                    <div class="nav-menu">
                        <!-- Navbar Close Icon -->
                        <div class="navbar-close">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item">
                                    <a href="/" class="active">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/about" class="active">About</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio_1.html">Portfolio 01</a></li>
                                        <li><a href="portfolio_2.html">Portfolio 02</a></li>
                                        <li><a href="portfolio_3.html">Portfolio 03</a></li>
                                        <li><a href="portfolio_details.html">Portfolio details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop_details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Shop Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog_standard.html">Blog Standard</a></li>
                                        <li><a href="blog_grid_2_column.html">Blog grid 2 columns</a></li>
                                        <li><a href="blog_grid_3_column.html">Blog grid 3 columns</a></li>
                                        <li><a href="blog_details.html">Blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Navbar Toggle Mobile -->
                    <div class="navbar-toggler float-right">
                        <span></span><span></span><span></span>
                    </div>
                </div>

                <!-- Tombol Login/Manage -->
                <div class="col-lg-3">
                    <div class="header-right-nav text-end">
                        <div class="get_btn_info">
                            <a href="{{ Filament\Pages\Dashboard::getUrl() }}" class="main-btn">
                                {{ Auth::check() ? 'Manage' : 'Login' }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
