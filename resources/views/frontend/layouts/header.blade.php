<header class="top_panel top_panel_style_2 scheme_default">
    <div class="top_panel_fixed_wrap"></div>
    <div class="top_panel_navi scheme_dark">
        <div class="menu_main_wrap clearfix">
            <div class="content_wrap">
                
                <a class="logo scheme_dark" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/images/logo.png') }}" class="logo_main" alt="">
                </a>

                <nav class="menu_main_nav_area menu_hover_fade">
                    <div class="menu_main_inner">
                        <div class="contact_wrap scheme_default ">
                            <div class="phone_wrap icon-mobile">+3 833 211 32</div>
                            <div class="socials_wrap">
                                <span class="social_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="trx_addons_icon-twitter"></span>
                                    </a>
                                </span>
                                <span class="social_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="trx_addons_icon-facebook"></span>
                                    </a>
                                </span>
                                <span class="social_item">
                                    <a href="#" target="_blank" class="social_icons social_gplus">
                                        <span class="trx_addons_icon-gplus"></span>
                                    </a>
                                </span>
                            </div>
                            <div class="search_wrap search_style_fullscreen">
                                <div class="search_form_wrap">
                                    <form role="search" method="get" class="search_form" action="#">
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                        <button type="submit" class="search_submit icon-search"></button>
                                        <a class="search_close icon-cancel"></a>
                                    </form>
                                </div>
                                <div class="search_results widget_area">
                                    <a href="#" class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                        </div>
                        
                        <ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
    
    <li class="menu-item {{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
        <a href="{{ route('home') }}"><span>Home</span></a>
    </li>

    <li class="menu-item {{ request()->routeIs('about') ? 'current-menu-item' : '' }}">
        <a href="{{ route('about') }}"><span>About</span></a>
    </li>

    <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
        <a href="{{ route('contact') }}"><span>Contacts</span></a>
    </li>

    <li class="menu-item">
        <a href="{{ route('login') }}"><span>Login</span></a>
    </li>

</ul>
                    </div>
                </nav>
                <a class="menu_mobile_button"></a>
            </div>
        </div>
    </div>
</header>