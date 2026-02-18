@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')

    <div class="menu_mobile_overlay"></div>
    <div class="menu_mobile scheme_">
        <div class="menu_mobile_inner">
            <a class="menu_mobile_close icon-cancel"></a>
            <nav class="menu_mobile_nav_area">
                <ul id="menu_mobile" class="sc_layouts_menu_nav menu_main_nav">
                    <li class="menu-item"><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li class="menu-item current-menu-item"><a href="{{ route('about') }}"><span>About</span></a></li>
                    <li class="menu-item"><a href="{{ route('contact') }}"><span>Contacts</span></a></li>
                    <li class="menu-item"><a href="{{ route('login') }}"><span>Login</span></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="page_content_wrap scheme_default">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item_single page hentry">
                    <div class="post_content entry-content">
                        
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h2 class="sc_item_title sc_item_title_default sc_align_center">About Our Company</h2>
                                                <p style="text-align: center;">We are dedicated to providing the best HR solutions for your business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_empty_space empty_4"><span class="vc_empty_space_inner"></span></div>

                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="vc_single_image-img attachment-full" alt="About Us" style="border-radius: 5px;">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h3>Who We Are</h3>
                                                <p>HR Advisor is a leading consultancy firm specializing in human resources management. We help organizations optimize their workforce strategies and ensure compliance with labor regulations.</p>
                                                <br>
                                                <h3>Our Mission</h3>
                                                <p>To empower businesses by providing innovative HR solutions that drive growth and employee satisfaction.</p>
                                                <br>
                                                <a href="{{ route('contact') }}" class="sc_button sc_button_default sc_button_size_normal">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_empty_space empty_4"><span class="vc_empty_space_inner"></span></div>

                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection