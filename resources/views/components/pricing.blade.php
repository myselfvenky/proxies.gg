@php
$products = [
(object) [
'id' => 1,
'name' => 'Starter',
'description' => 'For small projects',
'price' => 10.00,
'features' => [
'60M+ IPs',
'Unlimited Bandwidth',
'24/7 Support',
'99.9% Uptime',
],
'slug' => 'ipv4',
'data_limit_gb' => 2500,
'popular' => 0,
'uuid' => 'starter-ipv4',
],
(object) [
'id' => 1,
'name' => 'Starter',
'description' => 'For small projects',
'price' => 10.00,
'features' => [
'60M+ IPs',
'Unlimited Bandwidth',
'24/7 Support',
'99.9% Uptime',
],
'slug' => 'ipv4',
'data_limit_gb' => 2500,
'popular' => 0,
'uuid' => 'starter-ipv4',
],
];
$totalProducts = count($products);
$middleIndex = floor(($totalProducts - 1) / 2);
@endphp
<div class="pricing1 py-5 bg-light">
    <div class="container">
        @if (isset($products[0]->slug) && $products[0]->slug == 'datacenter')
        <div class="row">
            <!-- Toggle Buttons -->
            <div class="col-12 text-center mb-3">
                <div class="switch-wrapper">
                    <input id="regular" type="radio" name="switch" value="2500" checked>
                    <input id="premium" type="radio" name="switch" value="15000">
                    <label for="regular">Regular</label>
                    <label for="premium">Premium</label>
                    <span class="highlighter"></span>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-7 text-center m-auto">
                <div class="heading-bg-white">
                    <h1 class="mb-2">
                        Buy Premium
                        @if (isset($products[0]->slug))
                        @if ($products[0]->slug == 'datacenter')
                        Datacenter
                        @elseif ($products[0]->slug == 'ipv4')
                        Residential
                        @else
                        IPv6
                        @endif
                        @endif
                        Proxies
                    </h1>
                    @if (isset($products[0]->slug) && $products[0]->slug == 'datacenter')
                    <p>Sign up to receive 100 premium proxies, or opt for a plan tailored to your needs.</p>
                    @elseif(isset($products[0]->slug) && $products[0]->slug == 'ipv4')
                    <p>Market-leading ethically sourced proxy pool of 60M+ IPs for your scraping needs.</p>
                    @endif
                </div>
            </div>
        </div>
        <!-- Row  -->
        <div class="row mt-5">
            <!-- Column -->
            @foreach ($products as $index => $product)
            <div class="col-lg-4 col-md-6 mb-4 pricing-card" data-plan="{{ $product->data_limit_gb }}">
                <div
                    class="card text-center card-shadow on-hover border-0 mb-4 {{ $product->popular === 1 ? 'popular-item-' . ($product_title ?? 'residential') : '' }}">
                    <div class="card-body font-14">
                        @if ($product->popular === 1)
                        <span class="popular-item-label-{{ $product_title ?? 'residential' }}">Popular</span>
                        @endif
                        <div class="d-flex justify-content-between">
                            <h6 class="mt-3 mb-1 heading">{{ $product->name }}</h6>
                            @if ($product->slug == 'datacenter')
                            <h6 class="mt-3 mb-1 subtitle font-weight-normal bandwith-style">
                                ∞ GB</h6>
                            @else
                            <h6 class="mt-3 mb-1 subtitle font-weight-normal bandwith-style">
                                {{ $product->data_limit_gb }}GB</h6>
                            @endif
                        </div>
                        <p class="pricing-description {{ $product_title ?? 'residential' }}_color mb-2">
                            {{ $product->description }}
                        </p>
                        <div class="d-flex flex-column align-items-start">
                            @php
                            $features = $product->features;
                            @endphp
                            @if (is_array($features))
                            @foreach ($features as $feature)
                            <div class="mb-2">
                                <i class="fas fa-check list-pricing-{{ $product_title ?? 'residential' }}"></i>
                                <span
                                    class="pricing-check {{ $product_title ?? 'residential' }}_color">{{ $feature }}</span>
                            </div>
                            @endforeach
                            @endif

                            @if ($product->slug == 'datacenter')
                            <div class="high-concurrency-container">
                                <div class="high-concurrency-switch">
                                    <input type="checkbox" id="high-concurrency-{{ $product->id }}"
                                        class="high-concurrency-toggle" data-product-id="{{ $product->id }}"
                                        data-product-uuid="{{ $product->uuid }}">
                                    <label for="high-concurrency-{{ $product->id }}" class="toggle-label"></label>
                                </div>
                                <span class="high-concurrency-text">
                                    High Concurrency
                                </span>
                                <span class="ms-2" id='concurrencyInfo'>
                                    <i class="fas fa-question"></i>
                                </span>

                            </div>
                            @endif
                        </div>
                        <div class="d-flex align-items-center mb-2 mt-2">
                            <div class="text-wrapper mr-2 product-price price-display"
                                style="color: var(--{{ $product_title ?? 'residential' }})"
                                data-base-price="{{ $product->price }}" data-product-id="{{ $product->id }}"
                                data-product-uuid="{{ $product->uuid }}">€<span
                                    class="price-value">{{ number_format($product->price, 2) }}</span>
                            </div>
                            @if ($product->slug == 'datacenter')
                            <p class="pricing-description {{ $product_title ?? 'residential' }}_color mb-2">for
                                ∞ GB</p>
                            @else
                            <p class="pricing-description {{ $product_title ?? 'residential' }}_color mb-2">for
                                {{ $product->data_limit_gb }}GB</p>
                            @endif
                        </div>
                        <div class="bottom-btn">
                            <div class="bottom-btn">
                                <a href="javascript:void(0)"
                                    class="btn_buy btn-block get-started-btn  {{ $product_title ?? 'residential' }}_bg"
                                    data-product-id="{{ $product->id }}" data-product-uuid="{{ $product->uuid }}">
                                    Get Started ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-7 text-center m-auto">
                <div class="heading-bg-white">
                    <p style="opacity: 1">For any custom plans <a
                            class="btn btn_buy btn-block {{ $product_title ?? 'residential' }}_bg"
                            style="width: auto; padding:10px; margin-left:16px;" onclick="Intercom('show')">Contact us
                            ></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function filterProducts(limit) {
        document.querySelectorAll('.pricing-card').forEach(function(card) {
            const productLimit = card.getAttribute('data-plan');
            if (productLimit === limit) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    document.getElementById('regular').addEventListener('change', function() {
        if (this.checked) {
            filterProducts('2500');
        }
    });
    document.getElementById('premium').addEventListener('change', function() {
        if (this.checked) {
            filterProducts('15000');
        }
    });
    filterProducts('2500');
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.high-concurrency-toggle').forEach(function(toggle) {
        toggle.addEventListener('change', function() {
            let productId = this.dataset.productUuid;
            let priceContainer = document.querySelector(
                '.product-price[data-product-uuid="' + productId + '"]');
            if (priceContainer) {
                let basePriceAttr = priceContainer.getAttribute('data-base-price');
                let basePrice = parseFloat(basePriceAttr);
                console.log('Base Price:', basePriceAttr, 'Parsed Base Price:', basePrice);
                if (!isNaN(basePrice)) {
                    let updatedPrice = this.checked ? basePrice * 1.75 : basePrice;
                    priceContainer.querySelector('.price-value').textContent = updatedPrice
                        .toFixed(2);
                } else {
                    console.error('Invalid base price for product UUID: ' + productId);
                }
            } else {
                console.error('Price container element not found for product UUID: ' +
                    productId);
            }
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Tippy.js for the tooltip target
    const concurrencyInfoTip = tippy('#concurrencyInfo', {
        content: "High concurrency supports up to 2000 connections. Normal concurrency supports up to 500 connections.",
    });

    function updateTooltipContent(state) {
        const highConcurrencyContent = "This concurrency supports up to 2000 connections.";
        const normalConcurrencyContent = "This concurrency supports up to 500 connections.";

        // Update Tippy content based on the state
        concurrencyInfoTip[0].setContent(state ? highConcurrencyContent : normalConcurrencyContent);
    }

    document.querySelectorAll('.high-concurrency-toggle').forEach(function(toggle) {
        let uuid = toggle.dataset.productUuid;

        toggle.addEventListener('change', function() {
            // Save the state and update the tooltip content
            saveHighConcurrencyState(uuid, toggle.checked);
            updateTooltipContent(toggle.checked);
        });

        // Initialize the tooltip content based on stored state or default
        let storedState = localStorage.getItem('highConcurrency-' + uuid);
        toggle.checked = storedState === 'true';
        updateTooltipContent(toggle.checked);
    });

    function saveHighConcurrencyState(uuid, state) {
        if (state) {
            localStorage.setItem('highConcurrency-' + uuid, 'true');
        } else {
            localStorage.removeItem('highConcurrency-' + uuid);
        }
    }
    document.querySelectorAll('.get-started-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            let productId = button.dataset.productId;
            let productUuid = button.dataset.productUuid;
            localStorage.setItem('chosenPlanId', productUuid);
            window.location.href = "{{ route('home.register') }}";
        });
    });
});
</script>