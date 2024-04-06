<div class="trustpilot_rating">
    <span class="trustpilot_text">Excellent</span>
    <!-- SVG image for one star, repeat this five times for five stars -->
    @if (isset($businessDetails['businessDetails']['score']['stars']))
    @php
    $starRating = round($businessDetails['businessDetails']['score']['stars'], 1);
    $starImageUrl = "https://images-static.trustpilot.com/api/stars/{$starRating}/star.svg";
    @endphp

    {{-- Display the star image --}}
    <img src="{{ $starImageUrl }}" alt="Star Rating" style="width: 110px !important">
    @endif
    <span class="trustpilot_platform">
        <img src="{{ asset('/assets/landing/images/trustpilot.png') }}" alt="star" class="trustpilot_logo">
        Trustpilot
    </span>
</div>