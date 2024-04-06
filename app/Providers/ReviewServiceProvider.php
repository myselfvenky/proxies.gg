<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class ReviewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $reviews = $this->fetchReviews();
        $businessDetails = $this->fetchBusinessDetails();
        View::share('reviews', $reviews);
        View::share('businessDetails', $businessDetails);
    }

    private function truncateAndAddEllipsis($text, $maxLength)
    {
        if (strlen($text) > $maxLength) {
            $text = substr($text, 0, $maxLength - 3) . '...';
        }
        return $text;
    }

    private function fetchReviews()
    {
        $cachedReviews = Cache::get('trustpilot_reviews');
        if ($cachedReviews) {
            return ['reviews' => $cachedReviews];
        }



        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://trustpilot-company-and-reviews-data.p.rapidapi.com/company-reviews?company_domain=proxies.gg&locale=en-US",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: trustpilot-company-and-reviews-data.p.rapidapi.com",
                "X-RapidAPI-Key: 7bc7e8e9a3mshd5ef4c93dbb2187p127789jsn22b8af6eb8d7"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);


        curl_close($curl);

        if ($err) {
            \Log::error("Curl Error: {$err}");
            return ['error' => $err];
        }

        $reviews = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            \Log::error("JSON Decode Error: " . json_last_error_msg());
            return ['error' => 'JSON Decode Error'];
        }


        if (isset($reviews['data']['reviews'])) {
            $goodReviews = collect($reviews['data']['reviews'])
                ->where('review_rating', '>=', 4)
                ->sortByDesc('review_time')
                ->take(8)
                ->all();

            Cache::put('trustpilot_reviews', $goodReviews, 43200);

            return ['reviews' => $goodReviews];
        } else {
            \Log::warning('No reviews key in response.');
            \Log::info("API Response: ", $reviews);
            return ['reviews' => []];
        }
    }

    public function fetchBusinessDetails()
    {
        $cachedBusinessDetails = Cache::get('trustpilot_business_details');

        if ($cachedBusinessDetails) {
            return ['businessDetails' => $cachedBusinessDetails];
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://unofficial-trust-pilot.p.rapidapi.com/business-units/detail?id=62487f9f7af6703df12b3464',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => ['X-RapidAPI-Host: unofficial-trust-pilot.p.rapidapi.com', 'X-RapidAPI-Key: 7bc7e8e9a3mshd5ef4c93dbb2187p127789jsn22b8af6eb8d7'],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            \Log::error("Curl Error in fetchBusinessDetails: {$err}");
            return ['error' => $err];
        }

        $businessDetails = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            \Log::error("JSON Decode Error in fetchBusinessDetails: " . json_last_error_msg());
            return ['error' => 'JSON Decode Error'];
        }

        if (is_array($businessDetails)) {
            Cache::put('trustpilot_business_details', $businessDetails, 43200);
            return ['businessDetails' => $businessDetails];
        } else {
            \Log::warning('Unexpected response format in fetchBusinessDetails.');
            \Log::info("API Response: ", $businessDetails);
            return ['businessDetails' => []];
        }
    }

}
