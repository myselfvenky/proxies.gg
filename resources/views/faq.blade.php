@extends('layouts.app')

@section("title")
Frequently Asked Questions
@endsection

@section('content')

<?php
$groupedFaqs = [
    "General" => [
        [
            "question" => "What is the purpose of the website?",
            "answer" => "The website is a platform for students to find the best tutors for their academic needs. It is also a platform for tutors to find students who need their services."
        ],
        [
            "question" => "How do I find a tutor?",
            "answer" => "You can find a tutor by searching for the subject you need help with. You can also filter the search results by location, price, and other criteria."
        ],
        [
            "question" => "How do I become a tutor?",
            "answer" => "You can become a tutor by creating an account on the website and filling out your profile. You will need to provide information about your qualifications, experience, and the subjects you can teach."
        ],
        [
            "question" => "How do I contact a tutor?",
            "answer" => "You can contact a tutor by sending them a message through the website. You can also schedule a lesson with them through the website."
        ],
        [
            "question" => "How do I pay for a lesson?",
            "answer" => "You can pay for a lesson by using the payment methods available on the website. You can also pay for a lesson in cash if the tutor accepts cash payments."
        ],

    ],
    "Proxies" => [
        [
            "question" => "What is a proxy?",
            "answer" => "A proxy is an intermediary server that sits between your computer and the internet. It acts as a gateway between your computer and the internet, allowing you to browse the web anonymously."
        ],
        [
            "question" => "Why would I need a proxy?",
            "answer" => "You may need a proxy to access websites that are blocked in your country. You may also need a proxy to browse the web anonymously and protect your privacy."
        ],
        [
            "question" => "How do I use a proxy?",
            "answer" => "You can use a proxy by configuring your browser or device to connect to the proxy server. You will need to enter the IP address and port number of the proxy server in your browser or device settings."
        ],
        [
            "question" => "Are proxies legal?",
            "answer" => "Proxies are legal to use in most countries. However, you should check the laws in your country before using a proxy to make sure that it is legal."
        ],
        [
            "question" => "Are proxies safe?",
            "answer" => "Proxies are generally safe to use. However, you should be careful when using a proxy to make sure that your data is secure and that you are not exposing yourself to any security risks."
        ],
    
    ],
    "Refunds" => [
        [
            "question" => "How do I request a refund?",
            "answer" => "You can request a refund by contacting customer support and providing them with the details of your purchase. You will need to provide proof of purchase and a reason for the refund request."
        ],
        [
            "question" => "How long does it take to process a refund?",
            "answer" => "Refunds are usually processed within 3-5 business days. However, it may take longer to process a refund if there are any issues with the refund request."
        ],
        [
            "question" => "Can I get a refund if I am not satisfied with the service?",
            "answer" => "You may be eligible for a refund if you are not satisfied with the service. You will need to contact customer support and provide them with the details of your purchase and a reason for the refund request."
        ],
        [
            "question" => "Can I get a refund if the tutor does not show up for the lesson?",
            "answer" => "You may be eligible for a refund if the tutor does not show up for the lesson. You will need to contact customer support and provide them with the details of the lesson and a reason for the refund request."
        ],
        [
            "question" => "Can I get a refund if I cancel a lesson?",
            "answer" => "You may be eligible for a refund if you cancel a lesson. You will need to contact customer support and provide them with the details of the lesson and a reason for the refund request."
        ]
    ],
    "Payments" => [
        [
            "question" => "What payment methods are accepted?",
            "answer" => "We accept all major credit and debit cards, as well as PayPal and other online payment methods."
        ],
        [
            "question" => "Is my payment information secure?",
            "answer" => "Yes, your payment information is secure. We use industry-standard encryption to protect your payment information and keep it safe."
        ],
        [
            "question" => "How do I update my payment information?",
            "answer" => "You can update your payment information by logging into your account and going to the payment settings. You can add or remove payment methods and update your billing information."
        ],
        [
            "question" => "Can I pay for a lesson in cash?",
            "answer" => "You can pay for a lesson in cash if the tutor accepts cash payments. You will need to arrange the payment with the tutor before the lesson."
        ],
        [
            "question" => "Can I get a refund if I paid in cash?",
            "answer" => "You may be eligible for a refund if you paid in cash. You will need to contact customer support and provide them with the details of the payment and a reason for the refund request."
        ]

    ],
    "Misc" =>[
        [
            "question" => "How do I change my password?",
            "answer" => "You can change your password by logging into your account and going to the account settings. You can change your password by entering your current password and then entering a new password."
        ],
        [
            "question" => "How do I delete my account?",
            "answer" => "You can delete your account by contacting customer support and requesting that your account be deleted. You will need to provide proof of identity to delete your account."
        ],
        [
            "question" => "How do I report a problem with the website?",
            "answer" => "You can report a problem with the website by contacting customer support and providing them with the details of the problem. You can also use the feedback form on the website to report a problem."
        ],
        [
            "question" => "How do I contact customer support?",
            "answer" => "You can contact customer support by sending an email to mail@example.com"
        ],

    ]
        
];
    ?>
<x-header />



<div class="inner_hero_area2" style="padding: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center m-auto">
                <div class="heading-bg-white hbm">
                    <h1 style="font-size: 64px;"><span style="color: #077df9; font-size: 64px;">

                            Frequently
                        </span>
                        <br /> asked questions
                    </h1>
                    <p>Aliquam auctor mi quis scelerisque ullamcorper. Integer pulvinar porttitor tortor sit amet
                        aliquam. Integer mattis nunc elit, in convallis turpis volutpat vitae. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="faq_area section-padding-bottom">
    <div class="container">
        <ul class="nav nav-pills flex-column flex-sm-row justify-content-center faq-pills" role="tablist">
            @foreach ($groupedFaqs as $category => $faqs)
            <li class="nav-item mx-1" style="height: 40px;">
                <a class="nav-link{{ $loop->first ? ' active' : '' }}" id="tab-{{ Str::slug($category) }}"
                    data-bs-toggle="pill" href="#category-{{ Str::slug($category) }}" role="tab"
                    aria-controls="category-{{ Str::slug($category) }}"
                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $category }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="tab-content faq_content" id="faqContent">
    @foreach ($groupedFaqs as $category => $faqs)
    <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}" id="category-{{ Str::slug($category) }}"
        role="tabpanel" aria-labelledby="tab-{{ Str::slug($category) }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq_according">
                        <div id="accordion">
                            @foreach ($faqs as $faq)
                            <div class="card">
                                <div class="card-header" id="heading{{ Str::slug($faq['question']) }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse"
                                            data-target="#collapse{{ Str::slug($faq['question']) }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ Str::slug($faq['question']) }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{ Str::slug($faq['question']) }}"
                                    class="collapse{{ $loop->first ? ' show' : '' }}"
                                    aria-labelledby="heading{{ Str::slug($faq['question']) }}" data-parent="#accordion">
                                    <div class="card-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<x-faq />
<x-getstarted />
@endsection