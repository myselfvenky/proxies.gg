<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="title" content="{{ $meta->meta_title ?? '' }}"/>
<meta name="keywords" content="{{ $meta->meta_keywords ?? '' }}"/>
<meta name="description" content="{{ $meta->meta_description ?? '' }}"/>
<meta name="url" content="{{ request()->url() }}">

<meta name="author" content="{{ $meta->author ?? '' }}">

<meta property="og:title" content="{{ $meta->og_title ?? '' }}"/>
<meta property="og:image" content="{{ isset($meta) && isset($meta->og_image) ? asset('storage/'. $meta->og_image) : '' }}" />

<meta property="og:type" content="{{ $meta->og_type ?? '' }}"/>
<meta property="og:url" content="{{ request()->url() }}"/>

<meta name="twitter:title" content="{{ $meta->twitter_title ?? '' }}" />
<meta name="twitter:description" content="{{ $meta->twitter_description ?? '' }}"/>
<meta name="twitter:image" content="{{ isset($meta) && isset($meta->twitter_image) ? asset('storage/'. $meta->twitter_image) : '' }}"/>
<meta name="twitter:creator" content="{{ $meta->twitter_creator ?? '' }}"/>