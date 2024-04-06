@extends('layouts.app')
@section('title')
Home
@endsection

@section('content')
<x-header />
<section class="wrapper bg-light">
    <div class=" pt-8 d-flex flex-column align-items-center">
        <div class="container  row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 align-items-center mb-2">
            <div class="col-md-8 offset-md-2 col-lg-5 offset-lg-1 position-relative order-lg-2
                herobannerimage
            " style="display: flex;
    flex-direction: column;
    justify-content: center;
            " data-cue="zoomIn">
                <figure class="rounded">

                    <img src="{{ asset("/assets/landing/images/datacenter.svg") }}" alt="hero-img">

                </figure>
            </div>
            <div class="col-lg-6 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title"
                data-delay="600">
                <h6 class="title-wrapper" style="box-shadow:0 4px 4px 0 #00000025;"><a
                        href="{{ url("https://dashboard.plainproxies.com/register?trial=true") }}"
                        style="text-decoration: none; color: #077DF9"><span class="feature-primary">NEW</span>
                        <span>Introducing Special Monthly and Annual Plans</span></a></h6>
                <h1 class="display-1 mb-5 main-title">Welcome to the
                    <span style="color: #077df9;"> Revolution </span>Of Proxies.
                </h1>
                <p class="lead lh-sm mb-7 px-md-10 px-lg-0 main-subtitle" style="text-align:start;">Providing you
                    with the best Proxy Experience
                    you had
                    yet to experience. We offer high-quality Residential Proxies.</p>
                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900">
                    <div class="btn2_group">
                        <a href="{{ url("https://dashboard.plainproxies.com/register") }}"
                            class="btn4 datacenter_bg">Get Started</a>

                        <a onclick="Intercom('show');" class="btn5 cursor-pointer">
                            Talk to an Expert
                            <i class="fa fa-angle-right ml-1"></i></a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="d-flex justify-content-center  mt-5">
    <h4 class="w-100 trusted-by text-center display-6">
        Trusted By
        <span style="color: #077df9;">
            100+
        </span>
        Companies
    </h4>
</div>
<div class=" row col-12  col-md-8" style="width:100vw;">
    <div class="mt-5 col-12 col-md-12 col-lg-12 col-xl-9 col-xxl-9 mx-auto text-center">
        <h3 class="display-2 col-12 fw-light">
            <span class="text-primary fw-bold" style="font-style: italic;">Supercharge</span>
            Your Proxies
        </h3>
        <h2 class="fs-15 fw-light mb-3">Morbi at mollis sem. Fusce nulla nunc, elementum sed.</h2>
    </div><!-- /column -->
</div>
<div class="container dots-closer blog grid-view mb-10">
    <div class="row rounded px-3" style="background-color: #F5F6FA;">
        <div class="col-12 col-md-3  my-1 my-md-4 my-lg-5 my-xl-5">
            <div class="item-inner px-0">
                <article>
                    <div class="card px-0">
                        <div class="card-body px-4 py-1">
                            <div class="post-header col-12 col-md-12">
                                <figure class="mt-4 mb-2 col-3">
                                    <img src="{{ asset("/assets/images/dataproxy.svg") }}" alt="imperial-management"
                                        width="30px" height="30px">
                                </figure>
                                <h5>Datacenter Proxies</h5>
                            </div><!-- /.post-header -->
                            <div class="">
                                <p class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 mb-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Aenean faucibus neque lorem. Ut sodales
                                    accumsan metus ut eleifend.</p>
                                <p
                                    class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 d-flex justify-content-between align-items-end">
                                    <span>
                                        From
                                        <span class="text-primary fs-16 fw-light">
                                            $4.44
                                        </span>
                                    </span>
                                    <span>
                                        Learn More &#8250;
                                    </span>
                                </p>
                            </div>
                            <!-- /.post-content -->
                        </div><!-- /.card-bodluey -->
                    </div><!-- /.card -->
                </article><!-- /article -->
            </div><!-- /.item-inner -->
        </div><!-- /.col -->
        <div class="col-12 col-md-3 my-1 my-md-4 my-lg-5 my-xl-5 ">
            <div class="item-inner px-0 ">
                <article>
                    <div class="card border border-warning">
                        <div class="card-body px-4 py-1">
                            <div class="post-header col-12 col-md-12">
                                <figure class="mt-4 mb-2 col-3">
                                    <img src="{{ asset("/assets/images/home.svg") }}" alt="imperial-management"
                                        width="30px" height="30px">
                                </figure>
                                <h5>Premium Residential</h5>
                            </div><!-- /.post-header -->
                            <div class="">
                                <p class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 mb-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Aenean faucibus neque lorem. Ut sodales
                                    accumsan metus ut eleifend.</p>
                                <p
                                    class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 d-flex justify-content-between align-items-end">
                                    <span>
                                        From
                                        <span class="text-primary fs-16 fw-light">
                                            $12.99
                                        </span>
                                    </span>
                                    <span>
                                        Learn More &#8250;
                                    </span>
                                </p>
                            </div>
                            <!-- /.post-content -->
                        </div><!-- /.card-bodluey -->
                    </div><!-- /.card -->
                </article><!-- /article -->
            </div><!-- /.item-inner -->
        </div><!-- /.col -->
        <div class="col-12 col-md-3  my-1 my-md-4 my-lg-5 my-xl-5">
            <div class="item-inner px-0">
                <article>
                    <div class="card">
                        <div class="card-body px-4 py-1">
                            <div class="post-header col-12 col-md-12">
                                <figure class="mt-4 mb-2 col-3">
                                    <img src="{{ asset("/assets/images/ipv4.svg") }}" alt="imperial-management"
                                        width="30px" height="30px">
                                </figure>
                                <h5>IPv6 Proxies</h5>
                            </div><!-- /.post-header -->
                            <div class="">
                                <p class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 mb-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Aenean faucibus neque lorem. Ut sodales
                                    accumsan metus ut eleifend.</p>
                                <p
                                    class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 d-flex justify-content-between align-items-end">
                                    <span>
                                        From
                                        <span class="text-primary fs-16 fw-light">
                                            $5.99
                                        </span>
                                    </span>
                                    <span>
                                        Learn More &#8250;
                                    </span>
                                </p>
                            </div>
                            <!-- /.post-content -->
                        </div><!-- /.card-bodluey -->
                    </div><!-- /.card -->
                </article><!-- /article -->
            </div><!-- /.item-inner -->
        </div><!-- /.col -->
        <div class="col-12 col-md-3 my-1 my-md-4 my-lg-5 my-xl-5">
            <div class="item-inner px-0">
                <article>
                    <div class="card">
                        <div class="card-body px-4 py-1">
                            <div class="post-header col-12 col-md-12">
                                <figure class="mt-4 mb-2 col-3">
                                    <img src="{{ asset("/assets/images/ispproxy.svg") }}" alt="imperial-management"
                                        width="30px" height="30px">
                                </figure>
                                <h5>ISP Proxies</h5>
                            </div><!-- /.post-header -->
                            <div class="">
                                <p class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 mb-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Aenean faucibus neque lorem. Ut sodales
                                    accumsan metus ut eleifend.</p>
                                <p
                                    class="fs-11 fs-md-12 fs-lg-8 fs-xl-6 d-flex justify-content-between align-items-end">
                                    <span>
                                        From
                                        <span class="text-primary fs-16 fw-light">
                                            $9.99
                                        </span>
                                    </span>
                                    <span>
                                        Learn More &#8250;
                                    </span>
                                </p>
                            </div>
                            <!-- /.post-content -->
                        </div><!-- /.card-bodluey -->
                    </div><!-- /.card -->
                </article><!-- /article -->
            </div><!-- /.item-inner -->
        </div><!-- /.col -->

    </div><!-- /.row -->
</div>


<div class="row col-12 justify-content-center  mt-10 " style="background: #002B7C; width:100vw;">
    <div
        class="col-12 col-md-10 d-flex justify-content-center align-items-centergy-10 gy-sm-13 gx-lg-3 my-10 pt-10 text-primary">
        <div class="col-md-5 col-lg-5 position-relative hideonmobile mr-5">
            <figure class="rounded">
                <img src="{{ asset("/./assets/images/server.svg") }}" srcset="../assets/images/server.svg 2x"
                    alt="exclusive-img">
            </figure>
        </div>
        <div class="col-12 col-lg-5 col-xl-5 offset-lg-0 px-5 text-light">
            <div class="mt-10 ">
                <p class="d-flex align-items-end p-0 fs-sm-10">
                    <img src="{{ asset("/./assets/images/lock.svg") }}" alt="Icon" class="img-fluid me-2">

                    SECURED GLOBAL CONNECTIONS

                </p>
                <h2 class="display-5 text-light fs-sm-15">Launch your Business with <br />the power of our
                    proxies</h2>
                <p class="text-secondary">Vivamus sem lorem, ornare in sollicitudin vel, fermentum ac ipsum. Ut
                    tristique sem massa, eget ultricies nunc consectetur eu. </p>
                <ul class="list-group text-secondary">
                    <li class="mb-1 d-flex align-items-start ">
                        <img src="{{ asset("/./assets/images/check-icon.svg") }}" alt="Icon" class="img-fluid mt-1">
                        <span>Integer purus lectus, ornare eu lorem et, pellentesque facilisis nisl. Etiam sed
                            felis neque.</span>
                    </li>
                    <li class="mb-1 d-flex align-items-start">
                        <img src="{{ asset("/./assets/images/check-icon.svg") }}" alt="Icon" class="img-fluid mt-1">

                        <span>Proin rutrum dignissim sapien, sit amet dictum libero posuere sit amet.</span>
                    </li>

                </ul><br>
                <a class="border rounded px-10 py-3" style="color: #fff;border-color:#fff;" target="_blank"
                    href="https://dashboard.plainproxies.com/register">Get Started></a>
            </div>
        </div>
    </div>
</div>
<div class="feature_area section-padding-new" style="background: #002B7C; width:100vw;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-case-container mt-5">
                    <div class="heading hbm white">
                        <h2 class="text-center h2usecase">Proxies fit for all your use cases</h2>
                    </div>
                    <div class="row usecase-style">

                        <!-- USE CASE 1 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M22.6275 8.38232H12.8625C5.6875 8.38232 3.5 10.5698 3.5 17.7448V24.2548C3.5 31.4298 5.6875 33.6173 12.8625 33.6173H22.6275C29.8025 33.6173 31.99 31.4298 31.99 24.2548V17.7448C31.99 10.5698 29.8025 8.38232 22.6275 8.38232Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M35.735 15.7498C35.49 15.7323 35.175 15.7148 34.825 15.7148C34.1425 15.7148 33.6 16.2573 33.6 16.9398V25.0773C33.6 25.7598 34.1425 26.3023 34.825 26.3023C35.175 26.3023 35.4725 26.2848 35.77 26.2673C38.5 25.9523 38.5 24.0273 38.5 22.6273V19.3723C38.5 17.9723 38.5 16.0473 35.735 15.7498Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M17.5175 28.42C17.22 28.42 16.905 28.315 16.66 28.105C16.1175 27.6325 16.0475 26.81 16.52 26.25L19.67 22.5575C19.6875 22.505 19.67 22.4525 19.635 22.4C19.6 22.33 19.53 22.295 19.4425 22.295H15.96C14.9275 22.295 14.0175 21.77 13.4925 20.8775C12.985 19.985 12.985 18.935 13.4925 18.0425L16.485 14.0875C16.9225 13.51 17.745 13.3875 18.3225 13.825C18.9 14.2625 19.0225 15.085 18.585 15.6625L15.6975 19.495C15.75 19.425 15.75 19.495 15.785 19.5825C15.82 19.6525 15.89 19.6875 15.9775 19.6875H19.495C20.5275 19.6875 21.4375 20.2125 21.9625 21.105C22.47 21.9975 22.47 23.0475 21.9625 23.94C21.9275 24.01 21.875 24.08 21.8225 24.1325L18.55 27.965C18.27 28.28 17.9025 28.42 17.5175 28.42Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Insurance</p>
                            </div>
                        </div>

                        <!-- USE CASE 2 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M28.3325 3.5H13.6675C7.2975 3.5 3.5 7.2975 3.5 13.6675V28.315C3.5 34.7025 7.2975 38.5 13.6675 38.5H28.315C34.685 38.5 38.4825 34.7025 38.4825 28.3325V13.6675C38.5 7.2975 34.7025 3.5 28.3325 3.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M31.5 14.875H10.5C9.7825 14.875 9.1875 14.28 9.1875 13.5625C9.1875 12.845 9.7825 12.25 10.5 12.25H31.5C32.2175 12.25 32.8125 12.845 32.8125 13.5625C32.8125 14.28 32.2175 14.875 31.5 14.875Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M28 22.3125H14C13.2825 22.3125 12.6875 21.7175 12.6875 21C12.6875 20.2825 13.2825 19.6875 14 19.6875H28C28.7175 19.6875 29.3125 20.2825 29.3125 21C29.3125 21.7175 28.7175 22.3125 28 22.3125Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M23.3275 29.75H18.655C17.9375 29.75 17.3425 29.155 17.3425 28.4375C17.3425 27.72 17.9375 27.125 18.655 27.125H23.3275C24.045 27.125 24.64 27.72 24.64 28.4375C24.64 29.155 24.0625 29.75 23.3275 29.75Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">E-Commerce</p>
                            </div>
                        </div>

                        <!-- USE CASE 3 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M12.4425 10.4302L28.2275 5.16274C35.315 2.80024 39.165 6.66774 36.82 13.7552L31.5525 29.5402C28.0175 40.1627 22.2075 40.1627 18.6725 29.5402L17.115 24.8502L12.425 23.2927C1.82 19.7752 1.82 13.9827 12.4425 10.4302Z"
                                            fill="#017EFF"></path>
                                        <path d="M21.21 20.3525L27.8775 13.6675L21.21 20.3525Z" fill="#017EFF">
                                        </path>
                                        <path
                                            d="M21.21 21.665C20.8775 21.665 20.545 21.5425 20.2825 21.28C19.775 20.7725 19.775 19.9325 20.2825 19.425L26.9325 12.74C27.44 12.2325 28.28 12.2325 28.7875 12.74C29.295 13.2475 29.295 14.0875 28.7875 14.595L22.1375 21.28C21.875 21.525 21.5425 21.665 21.21 21.665Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Travel</p>
                            </div>
                        </div>


                        <!-- USE CASE 4 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M21.5 38.5C31.165 38.5 39 30.665 39 21C39 11.335 31.165 3.5 21.5 3.5C11.835 3.5 4 11.335 4 21C4 30.665 11.835 38.5 21.5 38.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21.5 34.5625C14.0275 34.5625 7.9375 28.4725 7.9375 21C7.9375 20.2825 8.5325 19.6875 9.25 19.6875C9.9675 19.6875 10.5625 20.2825 10.5625 21C10.5625 27.0375 15.4625 31.9375 21.5 31.9375C27.5375 31.9375 32.4375 27.0375 32.4375 21C32.4375 14.9625 27.5375 10.0625 21.5 10.0625C20.7825 10.0625 20.1875 9.4675 20.1875 8.75C20.1875 8.0325 20.7825 7.4375 21.5 7.4375C28.9725 7.4375 35.0625 13.5275 35.0625 21C35.0625 28.4725 28.9725 34.5625 21.5 34.5625Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21.5 29.3125C20.7825 29.3125 20.1875 28.7175 20.1875 28C20.1875 27.2825 20.7825 26.6875 21.5 26.6875C24.6325 26.6875 27.1875 24.1325 27.1875 21C27.1875 17.8675 24.6325 15.3125 21.5 15.3125C20.7825 15.3125 20.1875 14.7175 20.1875 14C20.1875 13.2825 20.7825 12.6875 21.5 12.6875C26.085 12.6875 29.8125 16.415 29.8125 21C29.8125 25.585 26.085 29.3125 21.5 29.3125Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Web Scraping</p>
                            </div>
                        </div>

                        <!-- USE CASE 5 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M18.8125 4.28756C20.0375 3.25506 22.015 3.25506 23.205 4.28756L25.97 6.65006C26.495 7.08756 27.4925 7.45506 28.1925 7.45506H31.1675C33.0225 7.45506 34.545 8.97756 34.545 10.8326V13.8076C34.545 14.5076 34.9125 15.4876 35.35 16.0126L37.7125 18.7776C38.745 20.0026 38.745 21.9801 37.7125 23.1701L35.35 25.9351C34.9125 26.4601 34.545 27.4401 34.545 28.1401V31.1151C34.545 32.9701 33.0225 34.4926 31.1675 34.4926H28.1925C27.4925 34.4926 26.5125 34.8601 25.9875 35.2976L23.2225 37.6601C21.9975 38.6926 20.02 38.6926 18.83 37.6601L16.065 35.2976C15.54 34.8601 14.5425 34.4926 13.86 34.4926H10.7975C8.94248 34.4926 7.41998 32.9701 7.41998 31.1151V28.1226C7.41998 27.4401 7.06998 26.4426 6.63248 25.9351L4.26998 23.1526C3.25498 21.9451 3.25498 19.9851 4.26998 18.7776L6.63248 15.9951C7.06998 15.4701 7.41998 14.4901 7.41998 13.8076V10.8501C7.41998 8.99506 8.94248 7.47256 10.7975 7.47256H13.825C14.525 7.47256 15.505 7.10506 16.03 6.66756L18.8125 4.28756Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21 29.5225C20.0375 29.5225 19.25 28.735 19.25 27.7725C19.25 26.81 20.02 26.0225 21 26.0225C21.9625 26.0225 22.75 26.81 22.75 27.7725C22.75 28.735 21.98 29.5225 21 29.5225Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21 24.01C20.2825 24.01 19.6875 23.415 19.6875 22.6975V14.2275C19.6875 13.51 20.2825 12.915 21 12.915C21.7175 12.915 22.3125 13.51 22.3125 14.2275V22.68C22.3125 23.415 21.735 24.01 21 24.01Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Price Monitoring</p>
                            </div>
                        </div>


                        <!-- USE CASE 6 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M18.8125 4.28756C20.02 3.25506 21.9975 3.25506 23.2225 4.28756L25.9875 6.66756C26.5125 7.12256 27.4925 7.49006 28.1925 7.49006H31.1675C33.0225 7.49006 34.545 9.01256 34.545 10.8676V13.8426C34.545 14.5251 34.9125 15.5226 35.3675 16.0476L37.7475 18.8126C38.78 20.0201 38.78 21.9976 37.7475 23.2226L35.3675 25.9876C34.9125 26.5126 34.545 27.4926 34.545 28.1926V31.1676C34.545 33.0226 33.0225 34.5451 31.1675 34.5451H28.1925C27.51 34.5451 26.5125 34.9126 25.9875 35.3676L23.2225 37.7476C22.015 38.7801 20.0375 38.7801 18.8125 37.7476L16.0475 35.3676C15.5225 34.9126 14.5425 34.5451 13.8425 34.5451H10.815C8.95999 34.5451 7.43749 33.0226 7.43749 31.1676V28.1751C7.43749 27.4926 7.06999 26.5126 6.63249 25.9876L4.26999 23.2051C3.25499 21.9976 3.25499 20.0376 4.26999 18.8301L6.63249 16.0476C7.06999 15.5226 7.43749 14.5426 7.43749 13.8601V10.8501C7.43749 8.99506 8.95999 7.47256 10.815 7.47256H13.8425C14.525 7.47256 15.5225 7.10506 16.0475 6.65006L18.8125 4.28756Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M18.8825 26.5477C18.5325 26.5477 18.2 26.4077 17.955 26.1627L13.72 21.9277C13.2125 21.4202 13.2125 20.5802 13.72 20.0727C14.2275 19.5652 15.0675 19.5652 15.575 20.0727L18.8825 23.3802L26.4075 15.8552C26.915 15.3477 27.755 15.3477 28.2625 15.8552C28.77 16.3627 28.77 17.2027 28.2625 17.7102L19.81 26.1627C19.565 26.4077 19.2325 26.5477 18.8825 26.5477Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Real Estate</p>
                            </div>
                        </div>


                        <!-- USE CASE 7 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M29.3475 33.2148H12.6525C11.9175 33.2148 11.2525 32.7423 11.0075 32.0598L3.7275 11.6723C3.15 10.0448 5.005 8.66232 6.3875 9.65982L13.3875 14.6648C14.315 15.3298 15.645 14.9273 16.0475 13.8598L19.355 5.03982C19.915 3.51732 22.0675 3.51732 22.6275 5.03982L25.935 13.8598C26.3375 14.9448 27.65 15.3298 28.595 14.6648L35.595 9.65982C36.995 8.66232 38.8325 10.0623 38.255 11.6723L30.975 32.0598C30.7475 32.7423 30.0825 33.2148 29.3475 33.2148Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M29.75 38.5H12.25C11.5325 38.5 10.9375 37.905 10.9375 37.1875C10.9375 36.47 11.5325 35.875 12.25 35.875H29.75C30.4675 35.875 31.0625 36.47 31.0625 37.1875C31.0625 37.905 30.4675 38.5 29.75 38.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M25.375 25.8125H16.625C15.9075 25.8125 15.3125 25.2175 15.3125 24.5C15.3125 23.7825 15.9075 23.1875 16.625 23.1875H25.375C26.0925 23.1875 26.6875 23.7825 26.6875 24.5C26.6875 25.2175 26.0925 25.8125 25.375 25.8125Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Competitor Tracking</p>
                            </div>
                        </div>


                        <!-- USE CASE 8 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M28.8325 3.5H14.185C7.7975 3.5 4 7.2975 4 13.6675V28.315C4 34.685 7.7975 38.4825 14.1675 38.4825H28.815C35.185 38.4825 38.9825 34.685 38.9825 28.315V13.6675C39 7.2975 35.2025 3.5 28.8325 3.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M32 18.7423C31.72 18.7423 31.44 18.6548 31.195 18.4623C25.2975 13.9123 17.685 13.9123 11.805 18.4623C11.2275 18.8998 10.405 18.7948 9.96749 18.2348C9.52999 17.6573 9.63499 16.8348 10.195 16.3973C17.055 11.0948 25.9275 11.0948 32.805 16.3973C33.3825 16.8348 33.4875 17.6573 33.0325 18.2348C32.7875 18.5673 32.385 18.7423 32 18.7423Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M29.2 24.15C28.92 24.15 28.64 24.0625 28.395 23.87C24.195 20.6325 18.7875 20.6325 14.5875 23.87C14.01 24.3075 13.1875 24.2025 12.75 23.6425C12.3125 23.0825 12.4175 22.2425 12.9775 21.805C18.14 17.815 24.825 17.815 29.9875 21.805C30.565 22.2425 30.67 23.065 30.215 23.6425C29.9875 23.975 29.6025 24.15 29.2 24.15Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M25.35 29.5575C25.07 29.5575 24.79 29.47 24.545 29.2775C22.69 27.8425 20.2925 27.8425 18.4375 29.2775C17.86 29.715 17.0375 29.61 16.6 29.05C16.1625 28.4725 16.2675 27.65 16.8275 27.2125C19.61 25.06 23.355 25.06 26.1375 27.2125C26.715 27.65 26.82 28.4725 26.365 29.05C26.1375 29.3825 25.7525 29.5575 25.35 29.5575Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Lead Generation</p>
                            </div>
                        </div>
                        <!-- USE CASE 9 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M38.5 21C38.5 30.5725 30.8175 38.3425 21.28 38.5H21C19.9325 38.5 18.8825 38.395 17.8675 38.22C9.695 36.7325 3.5 29.5925 3.5 21C3.5 18.0075 4.2525 15.19 5.5825 12.7225C6.125 11.725 6.755 10.7625 7.4725 9.8875C10.6925 5.985 15.5575 3.5 21 3.5C27.23 3.5 32.69 6.755 35.7875 11.655C36.4 12.6175 36.925 13.65 37.345 14.735C38.0975 16.6775 38.5 18.795 38.5 21Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M26.425 14.0352C30.065 13.7377 33.7225 13.9652 37.345 14.7352C36.925 13.6502 36.4 12.6177 35.7875 11.6552C30.765 10.8327 25.69 10.9902 20.685 12.0752C16.4325 12.2152 12.9675 15.3652 12.32 19.4777C10.29 16.5377 8.64499 13.3352 7.47249 9.8877C6.75499 10.7627 6.12499 11.7252 5.58249 12.7227C7.43749 17.4302 10.045 21.6302 13.3875 25.3227C13.4225 25.3577 13.475 25.3752 13.51 25.4102C15.1025 27.9827 17.92 29.5752 20.9475 29.5752C22.015 29.5752 23.0475 29.3652 24.01 28.9977C22.4175 32.3402 20.3875 35.4377 17.8675 38.2202C18.8825 38.3952 19.9325 38.5002 21 38.5002H21.28C24.5175 34.5452 26.9675 30.0652 28.6125 25.0252C29.33 23.7302 29.715 22.2777 29.715 20.8077C29.715 18.0602 28.42 15.6452 26.425 14.0352ZM26.1275 23.8177C25.0775 25.6552 23.0825 26.8102 20.9475 26.8102C18.8125 26.8102 16.835 25.6552 15.7675 23.8177C15.225 22.8727 14.9625 21.8752 14.9625 20.8077C14.9625 17.5002 17.64 14.8227 20.9475 14.8227C24.255 14.8227 26.95 17.5002 26.95 20.8077C26.95 21.8752 26.67 22.8727 26.1275 23.8177Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Browser Automation</p>
                            </div>
                        </div>

                        <!-- USE CASE 15 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                        fill="none">
                                        <path
                                            d="M34.3275 9.94023L23.355 4.02523C22.2 3.39523 20.8 3.39523 19.645 4.02523L8.6725 9.94023C7.8675 10.3777 7.3775 11.2177 7.3775 12.1802C7.3775 13.1252 7.8675 13.9827 8.6725 14.4202L19.645 20.3352C20.2225 20.6502 20.87 20.8077 21.5 20.8077C22.13 20.8077 22.7775 20.6502 23.355 20.3352L34.3275 14.4202C35.1325 13.9827 35.6225 13.1427 35.6225 12.1802C35.6225 11.2177 35.1325 10.3777 34.3275 9.94023Z"
                                            fill="#017EFF"></path>
                                        <path opacity="0.4"
                                            d="M17.8425 22.3825L7.6225 17.2725C6.835 16.8875 5.925 16.9225 5.19 17.3775C4.4375 17.85 4 18.6375 4 19.5125V29.155C4 30.8175 4.9275 32.3225 6.415 33.075L16.6175 38.185C16.9675 38.36 17.3525 38.4475 17.7375 38.4475C18.1925 38.4475 18.6475 38.325 19.05 38.08C19.8025 37.625 20.24 36.82 20.24 35.945V26.3025C20.2575 24.6225 19.33 23.1175 17.8425 22.3825Z"
                                            fill="#017EFF"></path>
                                        <path opacity="0.4"
                                            d="M37.81 17.3777C37.0575 16.9227 36.1475 16.8702 35.3775 17.2727L25.175 22.3827C23.6875 23.1352 22.76 24.6227 22.76 26.3027V35.9452C22.76 36.8202 23.1975 37.6252 23.95 38.0802C24.3525 38.3252 24.8075 38.4477 25.2625 38.4477C25.6475 38.4477 26.0325 38.3602 26.3825 38.1852L36.585 33.0752C38.0725 32.3227 39 30.8352 39 29.1552V19.5127C39 18.6377 38.5625 17.8502 37.81 17.3777Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">SERP Monitoring</p>
                            </div>
                        </div>
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M22.6275 8.38232H12.8625C5.6875 8.38232 3.5 10.5698 3.5 17.7448V24.2548C3.5 31.4298 5.6875 33.6173 12.8625 33.6173H22.6275C29.8025 33.6173 31.99 31.4298 31.99 24.2548V17.7448C31.99 10.5698 29.8025 8.38232 22.6275 8.38232Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M35.735 15.7498C35.49 15.7323 35.175 15.7148 34.825 15.7148C34.1425 15.7148 33.6 16.2573 33.6 16.9398V25.0773C33.6 25.7598 34.1425 26.3023 34.825 26.3023C35.175 26.3023 35.4725 26.2848 35.77 26.2673C38.5 25.9523 38.5 24.0273 38.5 22.6273V19.3723C38.5 17.9723 38.5 16.0473 35.735 15.7498Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M17.5175 28.42C17.22 28.42 16.905 28.315 16.66 28.105C16.1175 27.6325 16.0475 26.81 16.52 26.25L19.67 22.5575C19.6875 22.505 19.67 22.4525 19.635 22.4C19.6 22.33 19.53 22.295 19.4425 22.295H15.96C14.9275 22.295 14.0175 21.77 13.4925 20.8775C12.985 19.985 12.985 18.935 13.4925 18.0425L16.485 14.0875C16.9225 13.51 17.745 13.3875 18.3225 13.825C18.9 14.2625 19.0225 15.085 18.585 15.6625L15.6975 19.495C15.75 19.425 15.75 19.495 15.785 19.5825C15.82 19.6525 15.89 19.6875 15.9775 19.6875H19.495C20.5275 19.6875 21.4375 20.2125 21.9625 21.105C22.47 21.9975 22.47 23.0475 21.9625 23.94C21.9275 24.01 21.875 24.08 21.8225 24.1325L18.55 27.965C18.27 28.28 17.9025 28.42 17.5175 28.42Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Insurance</p>
                            </div>
                        </div>

                        <!-- USE CASE 2 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M28.3325 3.5H13.6675C7.2975 3.5 3.5 7.2975 3.5 13.6675V28.315C3.5 34.7025 7.2975 38.5 13.6675 38.5H28.315C34.685 38.5 38.4825 34.7025 38.4825 28.3325V13.6675C38.5 7.2975 34.7025 3.5 28.3325 3.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M31.5 14.875H10.5C9.7825 14.875 9.1875 14.28 9.1875 13.5625C9.1875 12.845 9.7825 12.25 10.5 12.25H31.5C32.2175 12.25 32.8125 12.845 32.8125 13.5625C32.8125 14.28 32.2175 14.875 31.5 14.875Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M28 22.3125H14C13.2825 22.3125 12.6875 21.7175 12.6875 21C12.6875 20.2825 13.2825 19.6875 14 19.6875H28C28.7175 19.6875 29.3125 20.2825 29.3125 21C29.3125 21.7175 28.7175 22.3125 28 22.3125Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M23.3275 29.75H18.655C17.9375 29.75 17.3425 29.155 17.3425 28.4375C17.3425 27.72 17.9375 27.125 18.655 27.125H23.3275C24.045 27.125 24.64 27.72 24.64 28.4375C24.64 29.155 24.0625 29.75 23.3275 29.75Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">E-Commerce</p>
                            </div>
                        </div>

                        <!-- USE CASE 3 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M12.4425 10.4302L28.2275 5.16274C35.315 2.80024 39.165 6.66774 36.82 13.7552L31.5525 29.5402C28.0175 40.1627 22.2075 40.1627 18.6725 29.5402L17.115 24.8502L12.425 23.2927C1.82 19.7752 1.82 13.9827 12.4425 10.4302Z"
                                            fill="#017EFF"></path>
                                        <path d="M21.21 20.3525L27.8775 13.6675L21.21 20.3525Z" fill="#017EFF">
                                        </path>
                                        <path
                                            d="M21.21 21.665C20.8775 21.665 20.545 21.5425 20.2825 21.28C19.775 20.7725 19.775 19.9325 20.2825 19.425L26.9325 12.74C27.44 12.2325 28.28 12.2325 28.7875 12.74C29.295 13.2475 29.295 14.0875 28.7875 14.595L22.1375 21.28C21.875 21.525 21.5425 21.665 21.21 21.665Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Travel</p>
                            </div>
                        </div>


                        <!-- USE CASE 4 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M21.5 38.5C31.165 38.5 39 30.665 39 21C39 11.335 31.165 3.5 21.5 3.5C11.835 3.5 4 11.335 4 21C4 30.665 11.835 38.5 21.5 38.5Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21.5 34.5625C14.0275 34.5625 7.9375 28.4725 7.9375 21C7.9375 20.2825 8.5325 19.6875 9.25 19.6875C9.9675 19.6875 10.5625 20.2825 10.5625 21C10.5625 27.0375 15.4625 31.9375 21.5 31.9375C27.5375 31.9375 32.4375 27.0375 32.4375 21C32.4375 14.9625 27.5375 10.0625 21.5 10.0625C20.7825 10.0625 20.1875 9.4675 20.1875 8.75C20.1875 8.0325 20.7825 7.4375 21.5 7.4375C28.9725 7.4375 35.0625 13.5275 35.0625 21C35.0625 28.4725 28.9725 34.5625 21.5 34.5625Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21.5 29.3125C20.7825 29.3125 20.1875 28.7175 20.1875 28C20.1875 27.2825 20.7825 26.6875 21.5 26.6875C24.6325 26.6875 27.1875 24.1325 27.1875 21C27.1875 17.8675 24.6325 15.3125 21.5 15.3125C20.7825 15.3125 20.1875 14.7175 20.1875 14C20.1875 13.2825 20.7825 12.6875 21.5 12.6875C26.085 12.6875 29.8125 16.415 29.8125 21C29.8125 25.585 26.085 29.3125 21.5 29.3125Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Web Scraping</p>
                            </div>
                        </div>

                        <!-- USE CASE 5 -->
                        <div class="col use-case-col mb-4">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-placeholder">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M18.8125 4.28756C20.0375 3.25506 22.015 3.25506 23.205 4.28756L25.97 6.65006C26.495 7.08756 27.4925 7.45506 28.1925 7.45506H31.1675C33.0225 7.45506 34.545 8.97756 34.545 10.8326V13.8076C34.545 14.5076 34.9125 15.4876 35.35 16.0126L37.7125 18.7776C38.745 20.0026 38.745 21.9801 37.7125 23.1701L35.35 25.9351C34.9125 26.4601 34.545 27.4401 34.545 28.1401V31.1151C34.545 32.9701 33.0225 34.4926 31.1675 34.4926H28.1925C27.4925 34.4926 26.5125 34.8601 25.9875 35.2976L23.2225 37.6601C21.9975 38.6926 20.02 38.6926 18.83 37.6601L16.065 35.2976C15.54 34.8601 14.5425 34.4926 13.86 34.4926H10.7975C8.94248 34.4926 7.41998 32.9701 7.41998 31.1151V28.1226C7.41998 27.4401 7.06998 26.4426 6.63248 25.9351L4.26998 23.1526C3.25498 21.9451 3.25498 19.9851 4.26998 18.7776L6.63248 15.9951C7.06998 15.4701 7.41998 14.4901 7.41998 13.8076V10.8501C7.41998 8.99506 8.94248 7.47256 10.7975 7.47256H13.825C14.525 7.47256 15.505 7.10506 16.03 6.66756L18.8125 4.28756Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21 29.5225C20.0375 29.5225 19.25 28.735 19.25 27.7725C19.25 26.81 20.02 26.0225 21 26.0225C21.9625 26.0225 22.75 26.81 22.75 27.7725C22.75 28.735 21.98 29.5225 21 29.5225Z"
                                            fill="#017EFF"></path>
                                        <path
                                            d="M21 24.01C20.2825 24.01 19.6875 23.415 19.6875 22.6975V14.2275C19.6875 13.51 20.2825 12.915 21 12.915C21.7175 12.915 22.3125 13.51 22.3125 14.2275V22.68C22.3125 23.415 21.735 24.01 21 24.01Z"
                                            fill="#017EFF"></path>
                                    </svg>

                                </div>
                                <p class="text-white">Price Monitoring</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="row section-padding-top200">
            <div class="col-lg-6 align-self-center">

                <span class="global">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M12 4.52783V21.1878L11.2 22.0978C10.09 23.3578 9.18001 23.0178 9.18001 21.3378V14.1378H6.09001C4.69001 14.1378 4.30001 13.2778 5.23001 12.2278L12 4.52783Z"
                            fill="#017EFF"></path>
                        <path opacity="0.4"
                            d="M18.77 13.4878L12 21.1878V4.52781L12.8 3.61781C13.91 2.35781 14.82 2.69781 14.82 4.37781V11.5778H17.91C19.31 11.5778 19.7 12.4378 18.77 13.4878Z"
                            fill="#017EFF"></path>
                    </svg>
                    UNMATCHED SPEED AND RELIABILITY

                </span>
                <div class="heading mt-2">
                    <h1>Experience unmatched speed and reliability every connection</h1>
                    <p class="feature-p-tag">
                        In today's digitally driven world, speed and reliability are paramount, and our service is
                        dedicated to delivering on both fronts. Our cutting-edge infrastructure ensures
                        lightning-fast connections that won't leave you waiting, while our unwavering commitment to
                        uptime is underscored by our impressive 99.9% success rate.</p>
                    <div class="space-30"></div>
                    <ul class="fa-ul">
                        <li class="mb-4" style="padding-left: 10px;">
                            <span class="fa-li">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27"
                                    fill="none">
                                    <path opacity="0.4"
                                        d="M13.5417 24.5495C19.7741 24.5495 24.8264 19.6992 24.8264 13.7161C24.8264 7.73306 19.7741 2.88281 13.5417 2.88281C7.3093 2.88281 2.25696 7.73306 2.25696 13.7161C2.25696 19.6992 7.3093 24.5495 13.5417 24.5495Z"
                                        fill="#017EFF"></path>
                                    <path
                                        d="M13.5417 22.112C8.7231 22.112 4.79602 18.342 4.79602 13.7161C4.79602 13.272 5.1797 12.9036 5.64237 12.9036C6.10505 12.9036 6.48873 13.272 6.48873 13.7161C6.48873 17.4536 9.64845 20.487 13.5417 20.487C17.4349 20.487 20.5946 17.4536 20.5946 13.7161C20.5946 9.97865 17.4349 6.94531 13.5417 6.94531C13.079 6.94531 12.6953 6.57698 12.6953 6.13281C12.6953 5.68865 13.079 5.32031 13.5417 5.32031C18.3603 5.32031 22.2873 9.09031 22.2873 13.7161C22.2873 18.342 18.3603 22.112 13.5417 22.112Z"
                                        fill="#017EFF"></path>
                                    <path
                                        d="M13.5417 18.862C13.079 18.862 12.6953 18.4936 12.6953 18.0495C12.6953 17.6053 13.079 17.237 13.5417 17.237C15.5616 17.237 17.2092 15.6553 17.2092 13.7161C17.2092 11.777 15.5616 10.1953 13.5417 10.1953C13.079 10.1953 12.6953 9.82698 12.6953 9.38281C12.6953 8.93865 13.079 8.57031 13.5417 8.57031C16.4983 8.57031 18.9019 10.8778 18.9019 13.7161C18.9019 16.5545 16.4983 18.862 13.5417 18.862Z"
                                        fill="#017EFF"></path>
                                </svg>

                            </span>
                            <span class="list-check-header">99.9% success rate</span>
                            <span class="list-check">With our proven success rate your operation will run
                                forever.</span>
                        </li>

                        <li class="mb-4" style="padding-left: 10px;"> <span class="fa-li">

                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                    fill="none">
                                    <path opacity="0.4"
                                        d="M12.0937 3.37049C12.87 2.73132 14.1412 2.73132 14.9287 3.37049L16.7062 4.84382C17.0437 5.12549 17.6737 5.35299 18.1237 5.35299H20.0362C21.2287 5.35299 22.2075 6.29549 22.2075 7.44382V9.28549C22.2075 9.70799 22.4437 10.3255 22.7362 10.6505L24.2662 12.3622C24.93 13.1097 24.93 14.3338 24.2662 15.0922L22.7362 16.8038C22.4437 17.1288 22.2075 17.7355 22.2075 18.1688V20.0105C22.2075 21.1588 21.2287 22.1013 20.0362 22.1013H18.1237C17.685 22.1013 17.0437 22.3288 16.7062 22.6105L14.9287 24.0838C14.1525 24.723 12.8812 24.723 12.0937 24.0838L10.3162 22.6105C9.97874 22.3288 9.34874 22.1013 8.89874 22.1013H6.95249C5.75999 22.1013 4.78124 21.1588 4.78124 20.0105V18.158C4.78124 17.7355 4.54499 17.1288 4.26374 16.8038L2.74499 15.0813C2.09249 14.3338 2.09249 13.1205 2.74499 12.373L4.26374 10.6505C4.54499 10.3255 4.78124 9.71882 4.78124 9.29632V7.43299C4.78124 6.28465 5.75999 5.34215 6.95249 5.34215H8.89874C9.33749 5.34215 9.97874 5.11466 10.3162 4.83299L12.0937 3.37049Z"
                                        fill="#017EFF"></path>
                                    <path
                                        d="M12.1388 17.1507C11.9138 17.1507 11.7 17.064 11.5425 16.9124L8.82 14.2907C8.49375 13.9765 8.49375 13.4565 8.82 13.1424C9.14625 12.8282 9.68625 12.8282 10.0125 13.1424L12.1388 15.1899L16.9763 10.5315C17.3025 10.2174 17.8425 10.2174 18.1688 10.5315C18.495 10.8457 18.495 11.3657 18.1688 11.6799L12.735 16.9124C12.5775 17.064 12.3638 17.1507 12.1388 17.1507Z"
                                        fill="#017EFF"></path>
                                </svg>
                            </span>
                            <span class="list-check-header">SLA for business clients</span>
                            <span class="list-check">All custom plans contain an included SLA at guaranteeing
                                uptime.</span>
                        </li>
                    </ul>
                    <!-- <a href="#" class="btn5">Get Started</a> -->
                </div>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="feature3_img_right_wrap">
                    <img src="{{ asset('/assets/images/sla.svg') }}" alt="feature3_img" class="responsive-img">
                </div>

            </div>
        </div>
    </div>


</div>
<x-trustcard />

<x-getstarted />
@endsection