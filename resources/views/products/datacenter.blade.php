@php
$pageTitle = 'DATACENTER PROXIES';
$product_title = 'datacenter';
$product = 'datacenter';
$businessDetails = [
'businessDetails' => [
'score' => [
'stars' => 4.5,
],
],
];
@endphp

{{--
COLOR: fill="var(--datacenter)" are the colors that need to be changed based on which page you want to display
datacenter: blue color
residential: orange color
ipv6: green color
You can add more colors in public/assests/css/master.css under the :root section
--}}
@php
$statisticsTitle = 'Unmatched Statistics';
$statisticsItems = [
[
'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.4"
        d="M20.6201 8.45C19.5701 3.83 15.5401 1.75 12.0001 1.75C12.0001 1.75 12.0001 1.75 11.9901 1.75C8.4601 1.75 4.4201 3.82 3.3701 8.44C2.2001 13.6 5.3601 17.97 8.2201 20.72C9.2801 21.74 10.6401 22.25 12.0001 22.25C13.3601 22.25 14.7201 21.74 15.7701 20.72C18.6301 17.97 21.7901 13.61 20.6201 8.45Z"
        fill="var(--datacenter)" />
    <path
        d="M11.9996 13.4602C13.7393 13.4602 15.1496 12.0499 15.1496 10.3102C15.1496 8.57046 13.7393 7.16016 11.9996 7.16016C10.2599 7.16016 8.84961 8.57046 8.84961 10.3102C8.84961 12.0499 10.2599 13.4602 11.9996 13.4602Z"
        fill="var(--datacenter)" />
</svg>',
'header' => '15.000+',
'text' => 'Datacenter IPs'
],
[
'icon' => ' <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.4"
        d="M10.9598 2.05959L5.4598 4.11959C4.4098 4.51959 3.5498 5.75959 3.5498 6.88959V14.9896C3.5498 15.7996 4.0798 16.8696 4.7298 17.3496L10.2298 21.4596C11.1998 22.1896 12.7898 22.1896 13.7598 21.4596L19.2598 17.3496C19.9098 16.8596 20.4398 15.7996 20.4398 14.9896V6.88959C20.4398 5.76959 19.5798 4.51959 18.5298 4.12959L13.0298 2.06959C12.4698 1.84959 11.5298 1.84959 10.9598 2.05959Z"
        fill="var(--datacenter)" />
    <path
        d="M10.6602 14.2301C10.4702 14.2301 10.2802 14.1601 10.1302 14.0101L8.52023 12.4001C8.23023 12.1101 8.23023 11.6301 8.52023 11.3401C8.81023 11.0501 9.29023 11.0501 9.58023 11.3401L10.6602 12.4201L14.4302 8.65012C14.7202 8.36012 15.2002 8.36012 15.4902 8.65012C15.7802 8.94012 15.7802 9.42012 15.4902 9.71012L11.1902 14.0101C11.0402 14.1601 10.8502 14.2301 10.6602 14.2301Z"
        fill="var(--datacenter)" />
</svg>',
'header' => '99.9%',
'text' => 'Success Rate'
],
[
'icon' => '
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.4"
        d="M12.0001 22.0002C16.7884 22.0002 20.6701 18.1185 20.6701 13.3302C20.6701 8.54185 16.7884 4.66016 12.0001 4.66016C7.21177 4.66016 3.33008 8.54185 3.33008 13.3302C3.33008 18.1185 7.21177 22.0002 12.0001 22.0002Z"
        fill="var(--datacenter)" />
    <path
        d="M12 13.75C11.59 13.75 11.25 13.41 11.25 13V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V13C12.75 13.41 12.41 13.75 12 13.75Z"
        fill="var(--datacenter)" />
    <path
        d="M14.8896 3.45H9.10965C8.70965 3.45 8.38965 3.13 8.38965 2.73C8.38965 2.33 8.70965 2 9.10965 2H14.8896C15.2896 2 15.6096 2.32 15.6096 2.72C15.6096 3.12 15.2896 3.45 14.8896 3.45Z"
        fill="var(--datacenter)" />
</svg>',
'header' => '0.5s',
'text' => 'Response Time'
],

[
'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.4"
        d="M17.53 7.77C17.46 7.76 17.39 7.76 17.32 7.77C15.77 7.72 14.54 6.45 14.54 4.89C14.54 3.3 15.83 2 17.43 2C19.02 2 20.32 3.29 20.32 4.89C20.31 6.45 19.08 7.72 17.53 7.77Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M20.7896 14.7004C19.6696 15.4504 18.0996 15.7304 16.6496 15.5404C17.0296 14.7204 17.2296 13.8104 17.2396 12.8504C17.2396 11.8504 17.0196 10.9004 16.5996 10.0704C18.0796 9.8704 19.6496 10.1504 20.7796 10.9004C22.3596 11.9404 22.3596 13.6504 20.7896 14.7004Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M6.44039 7.77C6.51039 7.76 6.58039 7.76 6.65039 7.77C8.20039 7.72 9.43039 6.45 9.43039 4.89C9.43039 3.3 8.14039 2 6.54039 2C4.95039 2 3.65039 3.29 3.65039 4.89C3.66039 6.45 4.89039 7.72 6.44039 7.77Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M6.55012 12.8496C6.55012 13.8196 6.76012 14.7396 7.14012 15.5696C5.73012 15.7196 4.26012 15.4196 3.18012 14.7096C1.60012 13.6596 1.60012 11.9496 3.18012 10.8996C4.25012 10.1796 5.76012 9.88962 7.18012 10.0496C6.77012 10.8896 6.55012 11.8396 6.55012 12.8496Z"
        fill="var(--datacenter)" />
    <path
        d="M12.1198 15.87C12.0398 15.86 11.9498 15.86 11.8598 15.87C10.0198 15.81 8.5498 14.3 8.5498 12.44C8.5498 10.54 10.0798 9 11.9898 9C13.8898 9 15.4298 10.54 15.4298 12.44C15.4298 14.3 13.9698 15.81 12.1198 15.87Z"
        fill="var(--datacenter)" />
    <path
        d="M8.8698 17.9396C7.3598 18.9496 7.3598 20.6096 8.8698 21.6096C10.5898 22.7596 13.4098 22.7596 15.1298 21.6096C16.6398 20.5996 16.6398 18.9396 15.1298 17.9396C13.4198 16.7896 10.5998 16.7896 8.8698 17.9396Z"
        fill="var(--datacenter)" />
</svg>',
'header' => '700+',
'text' => 'Customers'
],
[
'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.4"
        d="M17.53 7.77C17.46 7.76 17.39 7.76 17.32 7.77C15.77 7.72 14.54 6.45 14.54 4.89C14.54 3.3 15.83 2 17.43 2C19.02 2 20.32 3.29 20.32 4.89C20.31 6.45 19.08 7.72 17.53 7.77Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M20.7896 14.7004C19.6696 15.4504 18.0996 15.7304 16.6496 15.5404C17.0296 14.7204 17.2296 13.8104 17.2396 12.8504C17.2396 11.8504 17.0196 10.9004 16.5996 10.0704C18.0796 9.8704 19.6496 10.1504 20.7796 10.9004C22.3596 11.9404 22.3596 13.6504 20.7896 14.7004Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M6.44039 7.77C6.51039 7.76 6.58039 7.76 6.65039 7.77C8.20039 7.72 9.43039 6.45 9.43039 4.89C9.43039 3.3 8.14039 2 6.54039 2C4.95039 2 3.65039 3.29 3.65039 4.89C3.66039 6.45 4.89039 7.72 6.44039 7.77Z"
        fill="var(--datacenter)" />
    <path opacity="0.4"
        d="M6.55012 12.8496C6.55012 13.8196 6.76012 14.7396 7.14012 15.5696C5.73012 15.7196 4.26012 15.4196 3.18012 14.7096C1.60012 13.6596 1.60012 11.9496 3.18012 10.8996C4.25012 10.1796 5.76012 9.88962 7.18012 10.0496C6.77012 10.8896 6.55012 11.8396 6.55012 12.8496Z"
        fill="var(--datacenter)" />
    <path
        d="M12.1198 15.87C12.0398 15.86 11.9498 15.86 11.8598 15.87C10.0198 15.81 8.5498 14.3 8.5498 12.44C8.5498 10.54 10.0798 9 11.9898 9C13.8898 9 15.4298 10.54 15.4298 12.44C15.4298 14.3 13.9698 15.81 12.1198 15.87Z"
        fill="var(--datacenter)" />
    <path
        d="M8.8698 17.9396C7.3598 18.9496 7.3598 20.6096 8.8698 21.6096C10.5898 22.7596 13.4098 22.7596 15.1298 21.6096C16.6398 20.5996 16.6398 18.9396 15.1298 17.9396C13.4198 16.7896 10.5998 16.7896 8.8698 17.9396Z"
        fill="var(--datacenter)" />
</svg>',
'header' => '700+',
'text' => 'Customers'
],
];
@endphp


@extends('layouts.app')
<x-header />

<div class="welcome_area primary_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">

                @include('components.trustpilotcard', ['businessDetails' => $businessDetails])

                <div class="title2" data-scroll>
                    <h1 data-splitting class="title2_con">Buy Premium <span
                            class="title2_{{ $product }}">{{ ucfirst($product)  . ' ' }}
                        </span>
                        Proxies</h1>
                    <div class="space-10"></div>
                    <h6>With our premium {{ $product }} proxies, you get access to over 15 thousand IP addresses in over
                        5 countries, with speeds up to 10 Gbps. Our datacenter proxies are ideal for web scraping,
                        market research, and other business tasks.</h6>
                    <div class="space-40"></div>

                    @include('components.bannerbuttons', ['product' => $product])
                </div>
            </div>
            <div class="col-lg-6 align-self-center">

                <div class="illas_wrap wow fadeInRight">
                    <dotlottie-player src="https://lottie.host/3594bea7-153f-4a44-b7ac-75e34b444546/1aabhvVEh7.json"
                        background="transparent" speed="1" style="width: auto; height: 454px;" loop autoplay>
                    </dotlottie-player>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="feature_area section-padding-{{ $product }}">
    @include('components.unmatched_statistics', ['statisticsItems' => $statisticsItems, 'statisticsTitle' =>
    $statisticsTitle])
</div>
<div class="feature_area section-padding-{{ $product }}">
    <div class="container">
        <div class="row justify-content-end">

            <!-- Image section -->
            <div class="col-lg-6 col-md-6 col-sm-12 order-2 order-md-1">
                <dotlottie-player src="https://lottie.host/83d10a6b-0906-41f6-ae34-cb3c9b1c33e7/CbTmiCQYQi.json"
                    background="" speed="1" style="width: auto; height: 454px;" loop autoplay>
                </dotlottie-player>

            </div>

            <!-- Text and content section -->
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center order-1 order-md-2">
                <span class="global datacenter_color">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M12 4.52783V21.1878L11.2 22.0978C10.09 23.3578 9.18001 23.0178 9.18001 21.3378V14.1378H6.09001C4.69001 14.1378 4.30001 13.2778 5.23001 12.2278L12 4.52783Z"
                            fill="#017EFF"></path>
                        <path opacity="0.4"
                            d="M18.77 13.4878L12 21.1878V4.52781L12.8 3.61781C13.91 2.35781 14.82 2.69781 14.82 4.37781V11.5778H17.91C19.31 11.5778 19.7 12.4378 18.77 13.4878Z"
                            fill="#017EFF"></path>
                    </svg>
                    Quisque vestibulum hendrerit sagittis
                </span>
                <div class="heading mt-2">
                    <h1 class="datacenter_color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    <p class="feature-p-tag datacenter_color mb-3">Shared Datacenter Proxies are concurrently accessible
                        Vivamus sem lorem, ornare in sollicitudin vel, fermentum ac ipsum. Ut tristique sem massa, eget
                        ultricies nunc consectetur eu.
                    </p>
                    <ul class="fa-ul ml-0 mb-5">
                        <li class="mb-3 d-flex h-100 align-items-center">
                            <span class="fa-li">
                                <i class="fas fa-check list-datacenter"></i>
                            </span>
                            <span class="list-check datacenter_color">Integer purus lectus, ornare eu lorem et,
                                pellentesque facilisis nisl. Etiam sed felis neque</span>
                        </li>
                        <li class="mb-3 d-flex h-100 align-items-center">
                            <span class="fa-li">
                                <i class="fas fa-check list-datacenter"></i>
                            </span>
                            <span class="list-check datacenter_color">Proin rutrum dignissim sapien, sit amet dictum
                                libero posuere sit amet./span>
                        </li>
                    </ul>
                    <a href="{{ route('home.register') }}" class="btn5 datacenter_btn d-inline-flex align-items-center">
                        Get Started
                        >
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<x-videoplayeryt product="Datacenter" />
@include('components.worldwideav', ['product' => $product])


<div class="feature_area section-padding-{{ $product }}">
    <div class="container">
        <div class="row section-padding">
            <div class="col-lg-6 align-self-center">

                <span class="global {{ $product }}_color">
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
                <div class="heading mt-2 {{ $product }}_color">
                    <h1 class="{{ $product }}_color">Elevate Your Web Scraping Game Today
                    </h1>
                    <p class="feature-p-tag {{ $product }}_color">
                        Unlock the potential of web scraping with us. We are dedicated to enhancing your web scraping
                        experience, providing you with the tools you need to succeed.</p>
                    <div class="space-30"></div>
                    <ul class="fa-ul">
                        <li class="mb-4" style="padding-left: 10px;">
                            <span class="fa-li">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                    fill="none">
                                    <path opacity="0.4"
                                        d="M20.5539 4.06195C20.0447 3.98611 19.4597 3.95361 18.6364 3.95361H8.88639C8.07389 3.95361 7.47806 3.98611 7.00139 4.05111C3.37223 4.45195 2.65723 6.60778 2.65723 10.1828V16.6828C2.65723 20.2578 3.37223 22.4136 6.96889 22.8036C7.47806 22.8794 8.06306 22.9119 8.88639 22.9119H18.6364C19.4489 22.9119 20.0447 22.8794 20.5214 22.8144C24.1506 22.4136 24.8656 20.2686 24.8656 16.6828V10.1828C24.8656 6.60778 24.1506 4.45195 20.5539 4.06195Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M19.1784 12.0786H15.3867C14.9426 12.0786 14.5742 11.7103 14.5742 11.2661C14.5742 10.8219 14.9426 10.4536 15.3867 10.4536H19.1784C19.6226 10.4536 19.9909 10.8219 19.9909 11.2661C19.9909 11.7103 19.6226 12.0786 19.1784 12.0786Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M11.7035 12.3493C11.1076 12.3493 10.6201 11.8618 10.6201 11.266C10.6201 10.6701 11.0968 10.1826 11.7035 10.1826H11.7143C12.3101 10.1826 12.7976 10.6701 12.7976 11.266C12.7976 11.8618 12.3101 12.3493 11.7035 12.3493Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M8.45345 12.3493C7.85762 12.3493 7.37012 11.8618 7.37012 11.266C7.37012 10.6701 7.84678 10.1826 8.45345 10.1826C9.04928 10.1826 9.53678 10.6701 9.53678 11.266C9.53678 11.8618 9.06012 12.3493 8.45345 12.3493Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M19.178 18.0366H8.3663C7.92214 18.0366 7.54297 17.6683 7.54297 17.2241C7.54297 16.78 7.90047 16.4116 8.34464 16.4116H19.178C19.6221 16.4116 19.9905 16.78 19.9905 17.2241C19.9905 17.6683 19.6221 18.0366 19.178 18.0366Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                </svg>

                            </span>
                            <span class="list-check-header {{ $product }}_color">Lightning-Fast Speed</span>
                            <span class="list-check {{ $product }}_color">Our high-speed proxy servers ensure
                                lightning-fast data retrieval, allowing you to scrape websites efficiently and gather
                                valuable information in record time. Say goodbye to slow and inefficient scraping
                                processes.</span>
                        </li>

                        <li class="mb-4" style="padding-left: 10px;"> <span class="fa-li">

                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                    fill="none">
                                    <path opacity="0.4"
                                        d="M20.8037 11.2658V13.6166C20.8037 14.1908 21.0312 14.7433 21.4429 15.155L22.3312 16.0433C22.7429 16.455 22.9704 17.0075 22.9704 17.5816V18.8491C22.9704 22.0991 21.3129 24.2658 17.5537 24.2658H9.97038C6.14621 24.2658 4.55371 22.0991 4.55371 18.8491V8.01579C4.55371 4.85245 6.07038 2.70745 9.68871 2.60995C9.77538 2.59912 9.87288 2.59912 9.97038 2.59912H17.5537C17.6404 2.59912 17.727 2.59912 17.8137 2.60995C21.3887 2.69662 22.9704 4.84162 22.9704 8.01579V9.09912C22.9704 9.69495 22.4829 10.1825 21.887 10.1825C21.2912 10.1825 20.8037 10.67 20.8037 11.2658Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M11.3132 2.59912L11.259 5.80579C11.2482 6.24995 10.8907 6.60745 10.4465 6.60745H10.4357C9.9807 6.59662 9.6232 6.22829 9.63403 5.77329L9.6882 2.60995C9.77486 2.59912 9.87236 2.59912 9.96986 2.59912H11.3132Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M14.5632 2.59912L14.509 5.79495C14.4982 6.22829 14.1407 6.58579 13.6965 6.58579H13.6857C13.2307 6.57495 12.8732 6.20662 12.884 5.76245L12.9382 2.59912H14.5632Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M17.8132 2.60995L17.759 5.72995C17.7482 6.17412 17.3907 6.53162 16.9465 6.53162H16.9357C16.4807 6.52079 16.1232 6.15245 16.134 5.70829L16.1882 2.59912H17.5532C17.6399 2.59912 17.7265 2.59912 17.8132 2.60995Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                    <path
                                        d="M18.1163 24.2441C17.9321 24.255 17.7479 24.2658 17.5638 24.2658H9.98042C9.78542 24.2658 9.60125 24.2658 9.42792 24.2441L9.40625 21.0158C9.40625 19.8241 10.3704 18.8491 11.5729 18.8491H15.9171C17.1087 18.8491 18.0729 19.8133 18.0838 21.005L18.1163 24.2441Z"
                                        fill="var(--{{ $product_title ?? 'datacenter' }})" />
                                </svg>
                            </span>
                            <span class="list-check-header {{ $product }}_color">Rock-Solid Reliability</span>
                            <span class="list-check {{ $product }}_color">Count on us for rock-solid reliability in your
                                scraping endeavors. Our servers guarantee uninterrupted access to target websites,
                                ensuring that your web scraping operations run smoothly and without
                                interruptions.</span>
                        </li>
                    </ul>
                    <!-- <a href="#" class="btn5">Get Started</a> -->
                </div>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="feature3_img_right_wrap">
                    <dotlottie-player src="https://lottie.host/cb8a9943-9276-4a2f-9f29-baa490aac375/co8R9Xh5XZ.json"
                        background="transparent" speed="1" style="width: auto; height: 400px;" loop autoplay>
                    </dotlottie-player>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="feature_area section-padding-{{ $product }} ">
    <div class="container">
        <div class="background-container-{{ $product }}">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <div class="heading-bg-white">
                        <h1>Boost your business with
                            our Premium {{ ucfirst($product) }} Proxies</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M17.4526 10.1803L11.3801 13.8728L8.61507 9.32284C7.60007 7.66034 8.12508 5.45527 9.80508 4.44027C11.4676 3.42527 13.6726 3.95026 14.6876 5.63026L17.4526 10.1803Z"
                                            fill="var(--datacenter)"></path>
                                        <path opacity="0.4"
                                            d="M33.9722 31.3026L33.9547 31.3201L31.6797 32.7026L29.4047 34.0851L27.1297 35.4676L24.8547 36.8501L22.5797 38.2326H22.5622C20.2697 39.6326 17.4346 38.7926 16.2621 36.3951L12.6222 28.9751C11.3447 26.3851 11.7472 23.2351 13.7072 21.0826C14.1622 20.5926 14.6872 20.1376 15.2997 19.7701L20.9172 16.3576C21.5472 15.9901 22.1771 15.7101 22.8246 15.5526C25.6246 14.7826 28.5996 15.8676 30.3146 18.1951L35.2322 24.8451C36.8247 27.0326 36.2647 29.9201 33.9722 31.3026Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M22.8254 15.5878C22.1779 15.7453 21.5479 16.0079 20.9179 16.3929L15.3004 19.8054C14.6704 20.1729 14.1629 20.6279 13.7079 21.1179C13.6904 21.1179 13.6904 21.1004 13.6904 21.1004L10.8029 16.3229C10.2954 15.4829 10.5579 14.3804 11.3804 13.8904L17.4529 10.1979C18.2929 9.69043 19.3779 9.95285 19.8854 10.7753L22.7904 15.5529C22.8079 15.5704 22.8254 15.5703 22.8254 15.5878Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M29.4051 34.085L27.1301 35.4676L24.2076 30.6551C23.8401 30.0251 24.0326 29.22 24.6451 28.8175C25.2926 28.45 26.0976 28.6425 26.4826 29.255L29.4051 34.085Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M24.8545 36.8677L22.5795 38.2502L19.657 33.4377C19.272 32.8077 19.4645 32.0027 20.0945 31.6002C20.7245 31.2327 21.5295 31.4252 21.932 32.0377L24.8545 36.8677Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M33.9549 31.3204L31.68 32.7028L28.7574 27.8903C28.3899 27.2603 28.5824 26.4554 29.1949 26.0529C29.8424 25.6854 30.6475 25.8779 31.0325 26.4904L33.9549 31.3204Z"
                                            fill="var(--datacenter)"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading">Location Selection</h6>
                            <div class="mt-2">
                                <p class="text-explorer">
                                    Enhance reach with 'Location Selection': Customize your proxy network by selecting
                                    locations with our full IP pool package. </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->

                                    <div>
                                        <a href="http://127.0.0.1:8000/datacenter#">Learn More <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card-wrapper">
                        <div class="card p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43"
                                            viewBox="0 0 43 43" fill="none">
                                            <path opacity="0.4"
                                                d="M12.6927 10.8629L28.4777 5.59536C35.5652 3.23286 39.4152 7.10036 37.0702 14.1879L31.8027 29.9729C28.2677 40.5954 22.4577 40.5954 18.9227 29.9729L17.3652 25.2829L12.6752 23.7254C2.0702 20.2079 2.0702 14.4154 12.6927 10.8629Z"
                                                fill="var(--datacenter)"></path>
                                            <path d="M21.46 20.7851L28.1275 14.1001L21.46 20.7851Z"
                                                fill="var(--datacenter)"></path>
                                            <path
                                                d="M21.4605 22.0976C21.128 22.0976 20.7955 21.9751 20.533 21.7126C20.0255 21.2051 20.0255 20.3651 20.533 19.8576L27.183 13.1726C27.6905 12.6651 28.5305 12.6651 29.038 13.1726C29.5455 13.6801 29.5455 14.5201 29.038 15.0276L22.388 21.7126C22.1255 21.9576 21.793 22.0976 21.4605 22.0976Z"
                                                fill="var(--datacenter)"></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-2">
                                <h6 class="heading">Endless Connections
                                </h6>
                                <div class="mt-2">
                                    <p class="text-explorer">
                                        Maximize potential with 'High Concurrency': Unlock near-limitless access and
                                        superior speed on our robust proxy servers.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <!-- Text on the left -->

                                        <div>
                                            <a href="http://127.0.0.1:8000/datacenter#">Learn More <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M28.5825 3.93262H13.935C7.5475 3.93262 3.75 7.73012 3.75 14.1001V28.7476C3.75 35.1176 7.5475 38.9151 13.9175 38.9151H28.565C34.935 38.9151 38.7325 35.1176 38.7325 28.7476V14.1001C38.75 7.73012 34.9525 3.93262 28.5825 3.93262Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M31.7504 19.1749C31.4704 19.1749 31.1904 19.0874 30.9454 18.8949C25.0479 14.3449 17.4354 14.3449 11.5554 18.8949C10.9779 19.3324 10.1554 19.2274 9.71792 18.6674C9.28042 18.0899 9.38542 17.2674 9.94542 16.8299C16.8054 11.5274 25.6779 11.5274 32.5554 16.8299C33.1329 17.2674 33.2379 18.0899 32.7829 18.6674C32.5379 18.9999 32.1354 19.1749 31.7504 19.1749Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M28.9501 24.5826C28.6702 24.5826 28.3902 24.4951 28.1452 24.3026C23.9452 21.0651 18.5377 21.0651 14.3377 24.3026C13.7602 24.7401 12.9376 24.6351 12.5001 24.0751C12.0626 23.5151 12.1676 22.6751 12.7276 22.2376C17.8901 18.2476 24.5751 18.2476 29.7376 22.2376C30.3151 22.6751 30.4202 23.4976 29.9652 24.0751C29.7377 24.4076 29.3526 24.5826 28.9501 24.5826Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M25.1007 29.9901C24.8207 29.9901 24.5407 29.9026 24.2957 29.7101C22.4407 28.2751 20.0432 28.2751 18.1882 29.7101C17.6107 30.1476 16.7882 30.0426 16.3507 29.4826C15.9132 28.9051 16.0182 28.0826 16.5782 27.6451C19.3607 25.4926 23.1057 25.4926 25.8882 27.6451C26.4657 28.0826 26.5707 28.9051 26.1157 29.4826C25.8882 29.8151 25.5032 29.9901 25.1007 29.9901Z"
                                            fill="var(--datacenter)"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading">Rotating &amp; Sticky
                            </h6>
                            <div class="mt-2">
                                <p class="text-explorer">
                                    Flexibility at its best with 'Rotating &amp; Sticky': Choose dynamic IP rotation or
                                    fixed IPs for set periods, tailored to your needs.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <!-- Text on the left -->

                                    <div>
                                        <a href="http://127.0.0.1:8000/datacenter#">Learn More <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M38.75 14.1001V28.7651C38.75 35.1351 34.9525 38.9326 28.5825 38.9326H13.9175C13.5675 38.9326 13.2175 38.9151 12.885 38.8976C10.7325 38.7576 8.9125 38.1451 7.4775 37.0951C6.7425 36.5876 6.095 35.9401 5.5875 35.2051C4.38 33.5426 3.75 31.3726 3.75 28.7651V14.1001C3.75 8.08012 7.145 4.35262 12.885 3.98512C13.2175 3.95012 13.5675 3.93262 13.9175 3.93262H28.5825C31.19 3.93262 33.36 4.56262 35.0225 5.77012C35.7575 6.27762 36.405 6.92512 36.9125 7.66012C38.12 9.32262 38.75 11.4926 38.75 14.1001Z"
                                            fill="var(--datacenter)"></path>
                                        <path
                                            d="M14.53 12.0703H27.9525C29.0725 12.0703 29.9825 12.9803 29.9825 14.1003V16.3403C29.9825 17.1628 29.475 18.1778 28.9675 18.6853L24.5925 22.5528C23.98 23.0603 23.5775 24.0753 23.5775 24.8978V29.2728C23.5775 29.8853 23.175 30.6903 22.6675 31.0053L21.25 31.8978C19.92 32.7203 18.1 31.7928 18.1 30.1653V24.7753C18.1 24.0578 17.6975 23.1478 17.2775 22.6403L13.41 18.5628C12.9025 18.0728 12.5 17.1453 12.5 16.5328V14.2053C12.5 12.9803 13.41 12.0703 14.53 12.0703Z"
                                            fill="var(--datacenter)"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="heading">Unlimited Bandwidth
                            </h6>
                            <div class="mt-2">
                                <p class="text-explorer">
                                    "Experience freedom with 'Unlimited Bandwidth': Push limitless data through our
                                    proxies, ensuring smooth, unrestricted flow.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 ">
                                    <!-- Text on the left -->

                                    <div>
                                        <a href="http://127.0.0.1:8000/datacenter#">Learn More <i
                                                class="fa fa-angle-right"></i></a>
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


<div class="pricing_area section-padding-{{ $product }}" id="pricing">
    @include('components.pricing')
</div>

<x-trustcard />
<x-faqcard />
<x-getstarted />