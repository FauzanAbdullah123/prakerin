<header class="header-area">
<!-- Navbar Area -->
<div class="oneMusic-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                <!-- Nav brand -->
                <a href="/" class="nav-brand">Homely Tune</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                    <ul>
                        <li><a class="nav-link" href="{{ url('/') }}"><span>Home</span></a></li>
                        <li><a class="nav-link" href="{{ url('/blog') }}"><span>Blog</span></a></li>
                        <li><a href="{{ url('/events') }}">Events</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>

                    <!-- Login/Register & Cart Button -->
                    <div class="login-register-cart-button d-flex align-items-center">
                        <!-- Login/Register -->

                        <!-- Cart Button -->
                        <div class="cart-btn">
                            <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                        </div>
                    </div>
                </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</div>
</header>
