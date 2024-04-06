<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}">


    @if (str_contains(Request::url(), 'blog/') && \Illuminate\Support\Str::after(Request::url(), 'blog/') !== '')
    @else
    @include('widgets.meta')
    @endif
    @if (str_contains(Request::url(), 'faq'))
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    @endif

    @yield('meta')

    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="https://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-29ET4JNHF5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-29ET4JNHF5');
    </script>
</head>

<body>



    <div class="content-wrapper">


        @yield('content')



        <script>
        window.intercomSettings = {
            api_base: "https://api-iam.intercom.io",
            app_id: "frzu3rg0"
        };
        </script>

        <script>
        // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/frzu3rg0'
        (function() {
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', w.intercomSettings);
            } else {
                var d = document;
                var i = function() {
                    i.c(arguments);
                };
                i.q = [];
                i.c = function(args) {
                    i.q.push(args);
                };
                w.Intercom = i;
                var l = function() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/frzu3rg0';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                };
                if (document.readyState === 'complete') {
                    l();
                } else if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();
        </script>

    </div>




    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <script>
    document.getElementById("close-icon").addEventListener("click", closeTop);

    function closeTop() {
        // hide the notification div
        document.getElementById("notification").style.display = "none";
        // set a cookie to remember the div was closed
        setCookie("notificationClosed", "true", 1 / 24);
    }

    function setCookie(cname, cvalue, exHours) {
        var d = new Date();
        d.setTime(d.getTime() + (exHours * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    </script>

    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/theme.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/cards.css') }}">
    <x-footer />
</body>

</html>