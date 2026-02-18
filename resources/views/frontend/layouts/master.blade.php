<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
<head>
    <title>HR Advisor - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <link rel='stylesheet' href="{{ asset('frontend/js/vendor/revslider/settings.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/js/custom/trx/trx_addons_icons-embedded.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/js/vendor/swiper/swiper.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/js/custom/trx/trx_addons.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/js/vendor/js_comp/js_comp_custom.css') }}" type='text/css' media='all' />
    
    <link rel='stylesheet' href="{{ asset('frontend/fonts/Carnas/stylesheet.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C800italic%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800&#038;subset=latin%2Clatin-ext&#038;ver=4.7.3" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/fontello/css/fontello.css') }}" type='text/css' media='all' />
    
    <link rel='stylesheet' href="{{ asset('frontend/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/animation.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/colors.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/styles.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/responsive.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/css/custom.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('frontend/js/vendor/js_comp/font-awesome.min.css') }}" type='text/css' media='all' />

    <link rel="icon" href="{{ asset('frontend/images/cropped-fav-big-32x32.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('frontend/images/cropped-fav-big-192x192.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/cropped-fav-big-180x180.jpg') }}" />
    
    @yield('styles')
</head>

<body class="homepg home page body_style_wide scheme_default blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-2 header_title_off no_layout vc_responsive">

    <div class="body_wrap">
        <div class="page_wrap">
            
            @include('frontend.layouts.header')

            @yield('content')

            @include('frontend.layouts.footer')

        </div>
    </div>

    <script type='text/javascript' src="{{ asset('frontend/js/vendor/jQuery/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/jQuery/jquery-migrate.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/custom/custom.js') }}"></script>
    
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/jquery.themepunch.tools.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/jquery.themepunch.revolution.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/swiper/swiper.jquery.min.js') }}"></script>
    
    <script type='text/javascript' src="{{ asset('frontend/js/custom/trx/trx_addons.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/custom/scripts.js') }}"></script>
    <script type='text/javascript' src="{{ asset('frontend/js/vendor/js_comp/js_comp.min.js') }}"></script>
    
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>

    @yield('scripts')
</body>
</html>