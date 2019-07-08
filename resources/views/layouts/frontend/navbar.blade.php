<header class="header-area">
<!-- Navbar Area -->
<div class="oneMusic-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                <!-- Nav brand -->
                <a href="/" class="nav-brand"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt=""></a>

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
                        <li><a class="nav-link" href="{{ url('/elements') }}"><span>News</span></a></li>
                        <li><a href="{{ url('/event') }}">Events</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>

                    <!-- Login/Register & Cart Button -->
                    <div class="login-register-cart-button d-flex align-items-center">
                        <!-- Login/Register -->
                        <div class="login-register-btn mr-50">
                            <a href="{{ route('login') }}" id="loginBtn">Login / Register</a>
                        </div>

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