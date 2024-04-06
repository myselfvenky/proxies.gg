<style>
.user-review-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.star-container {
    display: flex;
    gap: 4px;
    /* Adjust space between stars */
}

.trustpilot_star {
    width: 20px;
    /* Adjust star size */
    height: auto;
}

@media (max-width: 768px) {
    .user-review-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .star-container {
        margin-top: 10px;
        /* Add some space between the name and stars on smaller screens */
    }
}

.trustpilot-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.trustpilot_rating {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.star-rating-img {
    width: 110px;
    /* Adjust as needed */
    margin: 8px 0;
    /* Add some space around the star image */
}

.trustpilot_logo {
    width: 100px;
    /* Adjust as needed */
    height: auto;
}

@media (min-width: 768px) {
    .trustpilot-container {
        flex-direction: row;
        justify-content: start;
        text-align: left;
    }

    .trustpilot_rating {
        flex-direction: row;
        align-items: center;
    }

    .trustpilot_text,
    .trustpilot_platform {
        margin-right: 15px;
        /* Adjust space between elements */
    }

    .star-rating-img {
        margin: 0 15px;
        /* Adjust as needed */
    }
}
</style>
<?php 
    $reviews =  [
        'reviews' => [
            [
                'review_title' => 'Great service',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'John Doe',
                'review_rating' => 5
            ],
            [
                'review_title' => 'Excellent proxies',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'Jane Doe',
                'review_rating' => 5
            ],
            [
                'review_title' => 'Great service',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'John Doe',
                'review_rating' => 5
            ],
            [
                'review_title' => 'Excellent proxies',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'Jane Doe',
                'review_rating' => 5
            ],
            [
                'review_title' => 'Great service',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'John Doe',
                'review_rating' => 5
            ],
            [
                'review_title' => 'Excellent proxies',
                'review_text' => 'I have been using Proxyman for a few months now and I am very happy with the service. The proxies are fast and reliable, and the customer service is excellent.',
                'consumer_name' => 'Jane Doe',
                'review_rating' => 5
            ],
        ]
    ]; 
    ?>


<div class="background-container">
    <div class="row">
        <div class="col-md-6">
            <div id="testimonialCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    @foreach ($reviews['reviews'] as $key => $review)
                    @php
                    $key = $key - 1;
                    @endphp
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $key }}"
                        class="{{ $loop->first ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
                    @endforeach
                </div>



                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($reviews['reviews'] as $key => $review)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="card p-4">
                            <strong title="Review Title">{{ $review['review_title'] }}</strong>
                            <blockquote class="blockquote">
                                <span class="testimonial-quote">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                        fill="none">
                                        <path opacity="0.4"
                                            d="M22.2613 2.75H10.7525C5.74752 2.75 2.76376 5.73375 2.76376 10.7387V22.2475C2.76376 27.2525 5.74752 30.2362 10.7525 30.2362H22.2613C27.2663 30.2362 30.25 27.2525 30.25 22.2475V10.7387C30.25 5.73375 27.2663 2.75 22.2613 2.75Z"
                                            fill="#017EFF" />
                                        <path
                                            d="M21.7388 9.92725H19.69C18.1913 9.92725 17.0225 11.096 17.0225 12.5947V14.6436C17.0225 16.1423 18.1913 17.3111 19.69 17.3111H22.3163C22.2063 19.7998 21.6288 20.171 19.965 21.1473C19.47 21.436 19.3188 22.0685 19.6075 22.5635C19.8 22.8935 20.1438 23.0723 20.5013 23.0723C20.68 23.0723 20.8588 23.031 21.0238 22.9348C23.485 21.4773 24.4063 20.5285 24.4063 16.2935V12.6223C24.4063 11.1235 23.21 9.92725 21.7388 9.92725Z"
                                            fill="#017EFF" />
                                        <path
                                            d="M13.31 9.92725H11.2612C9.7625 9.92725 8.59375 11.096 8.59375 12.5947V14.6436C8.59375 16.1423 9.7625 17.3111 11.2612 17.3111H13.8875C13.7775 19.7998 13.2 20.171 11.5362 21.1473C11.0412 21.436 10.89 22.0685 11.1788 22.5635C11.3713 22.8935 11.715 23.0723 12.0725 23.0723C12.2512 23.0723 12.43 23.031 12.595 22.9348C15.0562 21.4773 15.9775 20.5285 15.9775 16.2935V12.6223C15.9637 11.1235 14.7675 9.92725 13.31 9.92725Z"
                                            fill="#017EFF" />
                                    </svg>
                                </span>
                                <div class="quote-container">
                                    @php

                                    if (strlen($review['review_text']) > 240) {
                                    $text = substr($review['review_text'], 0, 240 - 3) . '...';
                                    } else {
                                    $text = $review['review_text'];
                                    }

                                    @endphp
                                    <p class="mb-4 quote-text">“ {{ $text }}”</p>
                                </div>
                                <footer class="blockquote-footer">
                                    <div
                                        class="d-flex align-items-center justify-content-between user-review-container">
                                        <div class="text-left">
                                            <span>{{ $review['consumer_name'] }}</span><br>
                                        </div>
                                        <div class="d-flex align-items-center star-container">
                                            <!-- Display Stars based on the rating -->
                                            @for ($i = 0; $i < 5; $i++) <img
                                                src="{{ $i < $review['review_rating'] ? asset('/assets/landing/images/Star.png') : asset('/landing/images/Star_empty.png') }}"
                                                alt="star" class="trustpilot_star">
                                                @endfor
                                        </div>
                                    </div>

                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>


        <!-- Trusted by Thousands Section -->
        <div class="col-md-6" style="display: flex; justify-content: center;">
            <div class="card p-4 card-content">
                <div class="d-flex mb-3 trustpilot-container">
                    <div class="trustpilot_rating">
                        <span class="trustpilot_text">Excellent</span>
                        @if (isset($businessDetails['businessDetails']['score']['stars']))
                        @php
                        $starRating = round($businessDetails['businessDetails']['score']['stars'], 1);

                        $starImageUrl = "https://images-static.trustpilot.com/api/stars/{$starRating}/star.svg";
                        @endphp
                        {{-- Display the star image --}}
                        <img src="{{ $starImageUrl }}" alt="Star Rating" class="star-rating-img">
                        @endif
                        <div class="trustpilot_platform">
                            Trustpilot
                        </div>
                    </div>
                </div>

                <h3 class="mb-3 testimonial-header-text">Trusted by thousands of users</h3>
                <p class="mb-4 testimonial-p-text">Our proxy servers have earned the trust of thousands of users
                    worldwide. With a proven track record of reliability and performance, we're the go-to choice for
                    secure and efficient proxy solutions.</p>
                <a href="{{ route('home.register') }}" class="btn5">Get Started <i
                        class="fa fa-angle-right ml-1"></i></a>
            </div>
        </div>




    </div>
</div>