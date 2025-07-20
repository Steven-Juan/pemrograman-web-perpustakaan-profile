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
                                    <a href="/about">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/portfolio">Portfolio</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/faq">FAQ</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/blog">Blog</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact">Contact</a>
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
