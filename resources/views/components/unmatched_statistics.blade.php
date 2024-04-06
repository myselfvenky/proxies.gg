<head>
    <link href="{{ asset('/assets/css/unmatched.css') }}" rel="stylesheet">
</head>
<div class="container">
    <div class="statistics-{{ $product_title ?? 'residential' }}">
        <div class="popular-item-label-{{ $product_title ?? 'residential' }}">{{ $statisticsTitle }}</div>
        <div class="row custom-country-card">
            @foreach ($statisticsItems as $item)
            <div class="umscard">
                <ul class="fa-ul">
                    <li style="padding-left: 10px;">
                        <span class="fa-li">{!! $item['icon'] !!}</span>
                        <span class="list-check-header {{ $product }}_color">{{ $item['header'] }}</span>
                        <span class="list-check {{ $product }}_color">{{ $item['text'] }}</span>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>