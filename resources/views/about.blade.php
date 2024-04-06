@extends('layouts.app')
@section('content')
<x-header />
<div class="welcome_area primary_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">

                <div class="trustpilot_rating">
                    <span class="trustpilot_text">ABOUT US</span>
                </div>

                <div class="title2" data-scroll>
                    <h1 data-splitting class="title2_con">We are the <span class="title2_con">leading </span>
                        proxy provider</h1>
                    <div class="space-10"></div>
                    <h6>Explore the Power of Limitless Connectivity with Proxies.gg: Our robust and expansive proxy
                        network offers millions of IP addresses, ensuring unparalleled access and reliability for your
                        web data collection needs. Experience a world free from rate limits and operational hindrances,
                        as our premier infrastructure paves the way for your success in the digital realm.</h6>
                    <div class="space-40"></div>

                    <div class="btn2_group">
                        <a href="{{ url("about") }}" class="btn4">Get Started <i class="fa fa-angle-right"></i> </a>
                        <a class="btn5" onclick="$crisp.push(['do', 'chat:open']);">Learn More </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">

                <div class="illas_wrap wow fadeInRight">
                    <img src="https://anima-uploads.s3.amazonaws.com/projects/64edd82d4c339b0ef858e131/releases/64edd87cabe2bc74e9eb8b97/img/frame-427322215.svg"
                        alt="">
                </div>

            </div>
        </div>
    </div>
</div>

<div class="dark-background">


    <div class="feature_area">
        <div class="container mb-5">

            <div style=" display:flex; flex-direction: column; align-items:center;">
                <div class="col-lg-7 text-center m-auto ">
                    <div class="heading-dark-bg-white hbm">
                        <h1 style="color: #fff">About <span style="color:#017EFF">Proxies.GG</span></h1>
                        <br>
                        <p style="opacity: 0.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in dui
                            pharetra, vestibulum risus at, consectetur turpis.</p>
                    </div>

                </div>
                <div class="col-lg col-md-6 col-sm-12 col-12">
                    <div class="card card-dark p-3 mb-2 d-flex flex-column featcard"
                        style="border: 2px solid #017EFF; color: #017EFF;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                    fill="none">
                                    <path
                                        d="M13.2029 18.8134H17.5804V29.0134C17.5804 30.5151 19.4504 31.2234 20.4421 30.0901L31.1663 17.9067C32.1013 16.8442 31.3504 15.1867 29.9338 15.1867H25.5563V4.98675C25.5563 3.48508 23.6863 2.77675 22.6946 3.91008L11.9704 16.0934C11.0496 17.1559 11.8004 18.8134 13.2029 18.8134Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M12.0417 6.729H2.125C1.54417 6.729 1.0625 6.24734 1.0625 5.6665C1.0625 5.08567 1.54417 4.604 2.125 4.604H12.0417C12.6225 4.604 13.1042 5.08567 13.1042 5.6665C13.1042 6.24734 12.6225 6.729 12.0417 6.729Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M10.625 29.396H2.125C1.54417 29.396 1.0625 28.9143 1.0625 28.3335C1.0625 27.7527 1.54417 27.271 2.125 27.271H10.625C11.2058 27.271 11.6875 27.7527 11.6875 28.3335C11.6875 28.9143 11.2058 29.396 10.625 29.396Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M6.375 18.0625H2.125C1.54417 18.0625 1.0625 17.5808 1.0625 17C1.0625 16.4192 1.54417 15.9375 2.125 15.9375H6.375C6.95583 15.9375 7.4375 16.4192 7.4375 17C7.4375 17.5808 6.95583 18.0625 6.375 18.0625Z"
                                        fill="#017EFF" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading-dark">Worldwide Locations</h6>
                            <div class="mt-2">
                                <p class="text-explorer-dark">
                                    Proxies.gg's global network reaches every continent, ensuring fast, reliable
                                    access
                                    wherever you are. Our strategically placed proxies offer seamless connectivity,
                                    superior speed, and unmatched coverage worldwide.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container" style="margin-top: 120px;">
            <div class="row mt-5">
                <div class="col-lg-7 text-center m-auto">
                    <div class="heading-dark-bg-white hbm">
                        <h1 class="text-center display-2 text-white" style="font-weight: 600;
                        margin-bottom:15px;
                        ">We are committed to
                            serving you
                            </span></h1>
                        <p style=" opacity: 0.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in
                            dui pharetra, vestibulum risus at, consectetur turpis.</p>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card card-dark p-3 mb-2 d-flex flex-column featcard"
                        style="border: 2px solid #017EFF; color: #017EFF;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                    fill="none">
                                    <path
                                        d="M13.2029 18.8134H17.5804V29.0134C17.5804 30.5151 19.4504 31.2234 20.4421 30.0901L31.1663 17.9067C32.1013 16.8442 31.3504 15.1867 29.9338 15.1867H25.5563V4.98675C25.5563 3.48508 23.6863 2.77675 22.6946 3.91008L11.9704 16.0934C11.0496 17.1559 11.8004 18.8134 13.2029 18.8134Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M12.0417 6.729H2.125C1.54417 6.729 1.0625 6.24734 1.0625 5.6665C1.0625 5.08567 1.54417 4.604 2.125 4.604H12.0417C12.6225 4.604 13.1042 5.08567 13.1042 5.6665C13.1042 6.24734 12.6225 6.729 12.0417 6.729Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M10.625 29.396H2.125C1.54417 29.396 1.0625 28.9143 1.0625 28.3335C1.0625 27.7527 1.54417 27.271 2.125 27.271H10.625C11.2058 27.271 11.6875 27.7527 11.6875 28.3335C11.6875 28.9143 11.2058 29.396 10.625 29.396Z"
                                        fill="#017EFF" />
                                    <path opacity="0.4"
                                        d="M6.375 18.0625H2.125C1.54417 18.0625 1.0625 17.5808 1.0625 17C1.0625 16.4192 1.54417 15.9375 2.125 15.9375H6.375C6.95583 15.9375 7.4375 16.4192 7.4375 17C7.4375 17.5808 6.95583 18.0625 6.375 18.0625Z"
                                        fill="#017EFF" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading-dark">Worldwide Locations</h6>
                            <div class="mt-2">
                                <p class="text-explorer-dark">
                                    Proxies.gg's global network reaches every continent, ensuring fast, reliable access
                                    wherever you are. Our strategically placed proxies offer seamless connectivity,
                                    superior speed, and unmatched coverage worldwide.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card card-dark p-3 mb-2 d-flex flex-column featcard"
                        style="border: 2px solid #017EFF; color: #017EFF;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                    fill="none">
                                    <path
                                        d="M13.2029 18.8134H17.5804V29.0134C17.5804 30.5151 19.4504 31.2234 20.4421 30.0901L31.1663 17.9067C32.1013 16.8442 31.3504 15.1867 29.9338 15.1867H25.5563V4.98675C25.5563 3.48508 23.6863 2.77675 22.6946 3.91008L11.9704 16.0934C11.0496 17.1559 11.8004 18.8134 13.2029 18.8134Z"
                                        fill="#FF5E00" />
                                    <path opacity="0.4"
                                        d="M12.0417 6.729H2.125C1.54417 6.729 1.0625 6.24734 1.0625 5.6665C1.0625 5.08567 1.54417 4.604 2.125 4.604H12.0417C12.6225 4.604 13.1042 5.08567 13.1042 5.6665C13.1042 6.24734 12.6225 6.729 12.0417 6.729Z"
                                        fill="#FF5E00" />
                                    <path opacity="0.4"
                                        d="M10.625 29.396H2.125C1.54417 29.396 1.0625 28.9143 1.0625 28.3335C1.0625 27.7527 1.54417 27.271 2.125 27.271H10.625C11.2058 27.271 11.6875 27.7527 11.6875 28.3335C11.6875 28.9143 11.2058 29.396 10.625 29.396Z"
                                        fill="#FF5E00" />
                                    <path opacity="0.4"
                                        d="M6.375 18.0625H2.125C1.54417 18.0625 1.0625 17.5808 1.0625 17C1.0625 16.4192 1.54417 15.9375 2.125 15.9375H6.375C6.95583 15.9375 7.4375 16.4192 7.4375 17C7.4375 17.5808 6.95583 18.0625 6.375 18.0625Z"
                                        fill="#FF5E00" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading-dark">24/7 Support</h6>
                            <div class="mt-2">
                                <p class="text-explorer-dark">
                                    Proxies.gg provides round-the-clock support, ensuring assistance is always
                                    available. Our dedicated team offers prompt, effective solutions 24/7, guaranteeing
                                    uninterrupted service and peace of mind.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                    <div class="card card-dark p-3 mb-2 d-flex flex-column featcard"
                        style="border: 2px solid #017EFF; color: #017EFF;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                    fill="none">
                                    <path
                                        d="M13.2029 18.8134H17.5804V29.0134C17.5804 30.5151 19.4504 31.2234 20.4421 30.0901L31.1663 17.9067C32.1013 16.8442 31.3504 15.1867 29.9338 15.1867H25.5563V4.98675C25.5563 3.48508 23.6863 2.77675 22.6946 3.91008L11.9704 16.0934C11.0496 17.1559 11.8004 18.8134 13.2029 18.8134Z"
                                        fill="#00E462" />
                                    <path opacity="0.4"
                                        d="M12.0417 6.729H2.125C1.54417 6.729 1.0625 6.24734 1.0625 5.6665C1.0625 5.08567 1.54417 4.604 2.125 4.604H12.0417C12.6225 4.604 13.1042 5.08567 13.1042 5.6665C13.1042 6.24734 12.6225 6.729 12.0417 6.729Z"
                                        fill="#00E462" />
                                    <path opacity="0.4"
                                        d="M10.625 29.396H2.125C1.54417 29.396 1.0625 28.9143 1.0625 28.3335C1.0625 27.7527 1.54417 27.271 2.125 27.271H10.625C11.2058 27.271 11.6875 27.7527 11.6875 28.3335C11.6875 28.9143 11.2058 29.396 10.625 29.396Z"
                                        fill="#00E462" />
                                    <path opacity="0.4"
                                        d="M6.375 18.0625H2.125C1.54417 18.0625 1.0625 17.5808 1.0625 17C1.0625 16.4192 1.54417 15.9375 2.125 15.9375H6.375C6.95583 15.9375 7.4375 16.4192 7.4375 17C7.4375 17.5808 6.95583 18.0625 6.375 18.0625Z"
                                        fill="#00E462" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading-dark">99.5% Uptime</h6>
                            <div class="mt-2">
                                <p class="text-explorer-dark">
                                    At Proxies.gg, we pride ourselves on maintaining an exceptional 99.5% uptime,
                                    ensuring our network is always available when you need it. For real-time updates and
                                    detailed <a target="_blank" href="https://status.proxies.gg">network status</a>.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card card-dark p-3 mb-2 d-flex flex-column featcard"
                        style="border: 2px solid #017EFF; color: #017EFF;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                    fill="none">
                                    <path
                                        d="M13.2029 18.8134H17.5804V29.0134C17.5804 30.5151 19.4504 31.2234 20.4421 30.0901L31.1663 17.9067C32.1013 16.8442 31.3504 15.1867 29.9338 15.1867H25.5563V4.98675C25.5563 3.48508 23.6863 2.77675 22.6946 3.91008L11.9704 16.0934C11.0496 17.1559 11.8004 18.8134 13.2029 18.8134Z"
                                        fill="#FFA232" />
                                    <path opacity="0.4"
                                        d="M12.0417 6.729H2.125C1.54417 6.729 1.0625 6.24734 1.0625 5.6665C1.0625 5.08567 1.54417 4.604 2.125 4.604H12.0417C12.6225 4.604 13.1042 5.08567 13.1042 5.6665C13.1042 6.24734 12.6225 6.729 12.0417 6.729Z"
                                        fill="#FFA232" />
                                    <path opacity="0.4"
                                        d="M10.625 29.396H2.125C1.54417 29.396 1.0625 28.9143 1.0625 28.3335C1.0625 27.7527 1.54417 27.271 2.125 27.271H10.625C11.2058 27.271 11.6875 27.7527 11.6875 28.3335C11.6875 28.9143 11.2058 29.396 10.625 29.396Z"
                                        fill="#FFA232" />
                                    <path opacity="0.4"
                                        d="M6.375 18.0625H2.125C1.54417 18.0625 1.0625 17.5808 1.0625 17C1.0625 16.4192 1.54417 15.9375 2.125 15.9375H6.375C6.95583 15.9375 7.4375 16.4192 7.4375 17C7.4375 17.5808 6.95583 18.0625 6.375 18.0625Z"
                                        fill="#FFA232" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading-dark">Top-tier connections</h6>
                            <div class="mt-2">
                                <p class="text-explorer-dark">
                                    Through our partnership with Cogent and their IP Transit, Proxies.gg ensures Tier 1
                                    peering and top-tier DDoS protection, providing a fast, reliable, and secure network
                                    experience.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="background-container-dark mt-5">
                <div class="row">
                    <div class="col-lg-7 text-center m-auto">
                        <div class="heading-bg-white mb-5">
                            <h1 style="color: #fff">Subscribe to the most powerful proxies</h1>
                        </div>
                        <a href="{{ url('about') }}" class="btn4">Get Started <i class="fa fa-angle-right"></i> </a>

                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
<x-getstarted />
@endsection