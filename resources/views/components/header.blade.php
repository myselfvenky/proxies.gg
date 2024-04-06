<header class="wrapper bg-light">

    <x-head-notification />

    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light" style="border-bottom: 1px solid #f5f5f5;">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.svg") }}" alt="Logo"></a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">{{ env('APP_NAME') }}</h3>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega d-none d-md-block">
                            <a class="nav-link dropdown-toggle" href="{{ url("#") }}"
                                data-bs-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu mega-menu " style="max-width: 600px !important;">
                                <a onclick="Intercom('show');" style="margin: 0 0 0 0; padding: 0 0 0 0;">
                                    <div class="group">
                                        <div class="col-8 first-column-menu">
                                            <svg class="dropdown-icon-svg" width="51" height="51" viewbox="0 0 51 51"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="51" height="51" rx="10" fill="#61C453" fill-opacity="0.25">
                                                </rect>
                                                <path
                                                    d="M27.2985 14.4774C26.5492 14.0863 25.5199 14.0804 24.7653 14.4701C21.542 16.1348 18.6211 18.0421 16.0637 20.1553C15.7226 20.4371 15.497 20.8315 15.5008 21.2823C15.5047 21.7316 15.7355 22.1216 16.0754 22.3996C18.6123 24.4739 21.5364 26.3834 24.7011 28.0351C25.4505 28.4262 26.4798 28.4321 27.2344 28.0424C30.4576 26.3777 33.3785 24.4704 35.936 22.3572C36.277 22.0754 36.5027 21.681 36.4988 21.2301C36.495 20.7809 36.2642 20.3908 35.9242 20.1129C33.3874 18.0386 30.4632 16.1291 27.2985 14.4774Z"
                                                    fill="#61C453"></path>
                                                <path
                                                    d="M37.1974 27.1643C37.6366 26.8901 37.7703 26.3117 37.4961 25.8725C37.2219 25.4333 36.6436 25.2996 36.2044 25.5738L28.5703 30.3399C27.8903 30.7644 26.9664 31.0012 25.9996 31.0012C25.0328 31.0013 24.1088 30.7647 23.4286 30.3402L15.8782 25.628C15.439 25.3539 14.8606 25.4877 14.5865 25.9269C14.3124 26.3662 14.4462 26.9445 14.8855 27.2186L22.4359 31.9308C23.472 32.5774 24.7573 32.8763 25.9997 32.8762C27.2421 32.8761 28.5274 32.5771 29.5633 31.9304L37.1974 27.1643Z"
                                                    fill="#61C453"></path>
                                                <path
                                                    d="M37.1974 31.8576C37.6366 31.5834 37.7703 31.005 37.496 30.5658C37.2218 30.1267 36.6434 29.993 36.2043 30.2672L29.5932 34.3958C28.6271 34.9991 27.3348 35.3252 25.9995 35.3253C24.6643 35.3254 23.3719 34.9994 22.4056 34.3962L15.8783 30.3214C15.4391 30.0473 14.8608 30.181 14.5866 30.6203C14.3124 31.0595 14.4462 31.6378 14.8854 31.912L21.4127 35.9867C22.7349 36.8122 24.3888 37.2004 25.9997 37.2003C27.6105 37.2002 29.2643 36.8118 30.5863 35.9862L37.1974 31.8576Z"
                                                    fill="#61C453"></path>
                                            </svg>
                                            <div>
                                                <div class="proxies-dropdown-header">
                                                    {{ env('APP_NAME') }} IPv4 Datacenter
                                                </div>
                                                <div class="proxies-dropdown-subheader">
                                                    Scrape websites with high speed.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="padding-left: 25px; margin: auto; margin: auto;">
                                            <div>
                                                <div class="proxies-dropdown-header-prices">
                                                    Starts from
                                                </div>
                                                <div class="proxies-dropdown-subheader-prices">
                                                    Contact Us
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a> <a onclick="Intercom('show');" style="margin: 0 0 0 0; padding: 0 0 0 0;">
                                    <div class="group">
                                        <div class="col-8 first-column-menu">
                                            <svg class="dropdown-icon-svg" width="51" height="51" viewbox="0 0 51 51"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.25" width="51" height="51" rx="10" fill="#61C453">
                                                </rect>
                                                <path
                                                    d="M28.2447 15.17C27.0167 13.9017 24.9826 13.9017 23.7546 15.1699L17.7565 21.3646C17.412 21.7204 17.1806 22.1701 17.0912 22.6572C16.3628 26.6297 16.309 30.6965 16.9322 34.6869L17.1528 36.0996C17.2225 36.5458 17.6068 36.8748 18.0585 36.8748H22.2497C22.5948 36.8748 22.8747 36.595 22.8747 36.2498V27.4998H29.1247V36.2498C29.1247 36.595 29.4045 36.8748 29.7497 36.8748H33.9408C34.3924 36.8748 34.7768 36.5458 34.8465 36.0996L35.0671 34.6869C35.6902 30.6965 35.6365 26.6297 34.908 22.6572C34.8187 22.1701 34.5872 21.7204 34.2427 21.3646L28.2447 15.17Z"
                                                    fill="#61C453"></path>
                                            </svg>
                                            <div>
                                                <div class="proxies-dropdown-header">
                                                    {{ env('APP_NAME') }} IPv4 Residential
                                                </div>
                                                <div class="proxies-dropdown-subheader">
                                                    Scrape every website like a human.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="padding-left: 25px; margin: auto;">
                                            <div>
                                                <div class="proxies-dropdown-header-prices">
                                                    Starts from
                                                </div>
                                                <div class="proxies-dropdown-subheader-prices">
                                                    Contact Us
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a> <a onclick="Intercom('show');" style="margin: 0 0 0 0; padding: 0 0 0 0;">
                                    <div class="group">
                                        <div class="col-8 first-column-menu">
                                            <svg class="dropdown-icon-svg" width="51" height="51" viewbox="0 0 51 51"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="51" height="51" rx="10" fill="#F4BF4F" fill-opacity="0.25">
                                                </rect>
                                                <path
                                                    d="M27.2985 14.4774C26.5492 14.0863 25.5199 14.0804 24.7653 14.4701C21.542 16.1348 18.6211 18.0421 16.0637 20.1553C15.7226 20.4371 15.497 20.8315 15.5008 21.2823C15.5047 21.7316 15.7355 22.1216 16.0754 22.3996C18.6123 24.4739 21.5364 26.3834 24.7011 28.0351C25.4505 28.4262 26.4798 28.4321 27.2344 28.0424C30.4576 26.3777 33.3785 24.4704 35.936 22.3572C36.277 22.0754 36.5027 21.681 36.4988 21.2301C36.495 20.7809 36.2642 20.3908 35.9242 20.1129C33.3874 18.0386 30.4632 16.1291 27.2985 14.4774Z"
                                                    fill="#F4BF4F"></path>
                                                <path
                                                    d="M37.1974 27.1643C37.6366 26.8901 37.7703 26.3117 37.4961 25.8725C37.2219 25.4333 36.6436 25.2996 36.2044 25.5738L28.5703 30.3399C27.8903 30.7644 26.9664 31.0012 25.9996 31.0012C25.0328 31.0013 24.1088 30.7647 23.4286 30.3402L15.8782 25.628C15.439 25.3539 14.8606 25.4877 14.5865 25.9269C14.3124 26.3662 14.4462 26.9445 14.8855 27.2186L22.4359 31.9308C23.472 32.5774 24.7573 32.8763 25.9997 32.8762C27.2421 32.8761 28.5274 32.5771 29.5633 31.9304L37.1974 27.1643Z"
                                                    fill="#F4BF4F"></path>
                                                <path
                                                    d="M37.1974 31.8576C37.6366 31.5834 37.7703 31.005 37.496 30.5658C37.2218 30.1267 36.6434 29.993 36.2043 30.2672L29.5932 34.3958C28.6271 34.9991 27.3348 35.3252 25.9995 35.3253C24.6643 35.3254 23.3719 34.9994 22.4056 34.3962L15.8783 30.3214C15.4391 30.0473 14.8608 30.181 14.5866 30.6203C14.3124 31.0595 14.4462 31.6378 14.8854 31.912L21.4127 35.9867C22.7349 36.8122 24.3888 37.2004 25.9997 37.2003C27.6105 37.2002 29.2643 36.8118 30.5863 35.9862L37.1974 31.8576Z"
                                                    fill="#F4BF4F"></path>
                                            </svg>
                                            <div>
                                                <div class="proxies-dropdown-header">
                                                    {{ env('APP_NAME') }} IPv6 Datacenter
                                                </div>
                                                <div class="proxies-dropdown-subheader">
                                                    Scrape IPv6 enabled websites with high speed.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="padding-left: 25px; margin: auto;">
                                            <div>
                                                <div class="proxies-dropdown-header-prices">
                                                    Starts from
                                                </div>
                                                <div class="proxies-dropdown-subheader-prices">
                                                    Contact Us
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a> <a href="{{ url("/residential-ipv6") }}"
                                    style="margin: 0 0 0 0; padding: 0 0 0 0;">
                                    <div class="group">
                                        <div class="col-8 first-column-menu">
                                            <svg class="dropdown-icon-svg" width="51" height="51" viewbox="0 0 51 51"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.25" width="51" height="51" rx="10" fill="#F4BF4F">
                                                </rect>
                                                <path
                                                    d="M28.2447 15.17C27.0167 13.9017 24.9826 13.9017 23.7546 15.1699L17.7565 21.3646C17.412 21.7204 17.1806 22.1701 17.0912 22.6572C16.3628 26.6297 16.309 30.6965 16.9322 34.6869L17.1528 36.0996C17.2225 36.5458 17.6068 36.8748 18.0585 36.8748H22.2497C22.5948 36.8748 22.8747 36.595 22.8747 36.2498V27.4998H29.1247V36.2498C29.1247 36.595 29.4045 36.8748 29.7497 36.8748H33.9408C34.3924 36.8748 34.7768 36.5458 34.8465 36.0996L35.0671 34.6869C35.6902 30.6965 35.6365 26.6297 34.908 22.6572C34.8187 22.1701 34.5872 21.7204 34.2427 21.3646L28.2447 15.17Z"
                                                    fill="#F4BF4F"></path>
                                            </svg>
                                            <div>
                                                <div class="proxies-dropdown-header">
                                                    {{ env('APP_NAME') }} IPv6 Residential
                                                </div>
                                                <div class="proxies-dropdown-subheader">
                                                    Scrape IPv6 enabled websites like a human.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="padding-left: 25px; margin: auto;">
                                            <div>
                                                <div class="proxies-dropdown-header-prices" style="">
                                                    Starts from
                                                </div>
                                                <div class="proxies-dropdown-subheader-prices" style="">
                                                    99€ <span
                                                        style="opacity: 0.55;font-size: 14px;margin-left: -4px;">/month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--/.mega-menu-content-->
                            </ul>
                            <!--/.dropdown-menu -->


                        </li>


                        <li class="nav-item dropdown d-block d-md-none">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">Products</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" onclick="Intercom('show');">IPv4
                                        Datacenter</a></li>
                                <li class="nav-item"><a class="dropdown-item" onclick="Intercom('show');">IPv4
                                        Residential</a></li>
                                <li class="nav-item"><a class="dropdown-item" onclick="Intercom('show');">IPv6
                                        Datacenter</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/residential-ipv6">IPv6
                                        Residential</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("about") }}">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("referral") }}">Referral</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("faq") }}">Newsletter</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("faq") }}">FAQs</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("faq") }}">Blog</a>

                        </li>
                        <!-- @include('widgets.resources_index') -->
                        <!--- <li class="nav-item">
                <a class="nav-link" href="https://help.plainproxies.com/en/" >Resources</a>
                
              </li>
              --->
                    </ul><!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>


                            <nav class="nav social social-white mt-4">
                                <a href="{{ url("#") }}"> <i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="{{ url("#") }}"> <i class="fa-brands fa-twitter"></i></a>
                                <a href="{{ url("#") }}"> <i class="fa-brands fa-telegram"></i></a>
                                <a href="{{ url("#") }}"> <i class="fa-brands fa-instagram"></i></a>
                            </nav><!-- /.social -->
                        </div>
                    </div><!-- /.offcanvas-footer -->
                </div><!-- /.offcanvas-body -->
            </div><!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ url('https://dashboard.plainproxies.com/login') }}"
                            class="mx-3 color:#FFFFFF">Login</a>
                        <a href="{{ url('https://dashboard.plainproxies.com/register') }}"
                            class="btn btn-ss btn-primary">Get Started &#8250;</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-other -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</header><!-- /header -->