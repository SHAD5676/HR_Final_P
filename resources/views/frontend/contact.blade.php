@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')

    <div class="menu_mobile_overlay"></div>
    <div class="menu_mobile scheme_">
        <div class="menu_mobile_inner">
            <a class="menu_mobile_close icon-cancel"></a>
            <nav class="menu_mobile_nav_area">
                <ul id="menu_mobile" class="sc_layouts_menu_nav menu_main_nav">
                    <li class="menu-item"><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li class="menu-item"><a href="{{ route('about') }}"><span>About</span></a></li>
                    <li class="menu-item current-menu-item"><a href="{{ route('contact') }}"><span>Contacts</span></a></li>
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
                        
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner" style="padding: 0 !important;">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                            <div class="wpb_wrapper">
                                                <iframe 
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223908687!2d90.27923710576367!3d23.780887456211758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1708453483256!5m2!1sen!2sbd" 
                                                    width="100%" 
                                                    height="450" 
                                                    style="border:0; display: block; width: 100vw;" 
                                                    allowfullscreen="" 
                                                    loading="lazy">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        
                        <div class="vc_empty_space empty_4"><span class="vc_empty_space_inner"></span></div>

                        <div class="vc_row wpb_row vc_row-fluid">
                            
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="sc_icons sc_icons_default sc_icons_size_small sc_align_left">
                                            
                                            <div class="sc_icons_item">
                                                <div class="sc_icons_icon sc_icons_icon_type_fontawesome icon-location"></div>
                                                <div class="sc_icons_item_details">
                                                    <h4 class="sc_icons_item_title">Address</h4>
                                                    <div class="sc_icons_item_description">Gulshan-1, Dhaka<br>Bangladesh</div>
                                                </div>
                                            </div>
                                            
                                            <div class="vc_empty_space empty_2"><span class="vc_empty_space_inner"></span></div>

                                            <div class="sc_icons_item">
                                                <div class="sc_icons_icon sc_icons_icon_type_fontawesome icon-phone"></div>
                                                <div class="sc_icons_item_details">
                                                    <h4 class="sc_icons_item_title">Phone</h4>
                                                    <div class="sc_icons_item_description">+880 1234 567 890<br>+880 1700 000 000</div>
                                                </div>
                                            </div>

                                            <div class="vc_empty_space empty_2"><span class="vc_empty_space_inner"></span></div>

                                            <div class="sc_icons_item">
                                                <div class="sc_icons_icon sc_icons_icon_type_fontawesome icon-mail"></div>
                                                <div class="sc_icons_item_details">
                                                    <h4 class="sc_icons_item_title">Email</h4>
                                                    <div class="sc_icons_item_description">contact@hradvisor.bd<br>hr@company.com</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <h2 class="sc_item_title sc_item_title_default">Send Us a Message</h2>
                                                <p>Have a question? Fill out the form below and we will get back to you shortly.</p>
                                            </div>
                                        </div>

                                        <div class="sc_form sc_form_default">
                                            <form class="sc_form_form" method="post" action="#">
                                                @csrf
                                                <div class="sc_form_details trx_addons_columns_wrap">
                                                    <div class="trx_addons_column-1_2">
                                                        <label class="sc_form_field sc_form_field_name required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" name="name" placeholder="Your Name" aria-required="true">
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="trx_addons_column-1_2">
                                                        <label class="sc_form_field sc_form_field_email required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="email" name="email" placeholder="Your Email" aria-required="true">
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="sc_form_field sc_form_field_message required">
                                                    <span class="sc_form_field_wrap">
                                                        <textarea name="message" placeholder="Your Message" aria-required="true"></textarea>
                                                    </span>
                                                </label>
                                                <div class="sc_form_field sc_form_field_button">
                                                    <button class="sc_button sc_button_default sc_button_size_normal">Send Message</button>
                                                </div>
                                                <div class="trx_addons_message_box sc_form_result"></div>
                                            </form>
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