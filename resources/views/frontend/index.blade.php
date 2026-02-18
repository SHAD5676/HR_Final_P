@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

    <div class="menu_mobile_overlay"></div>
    <div class="menu_mobile scheme_">
        <div class="menu_mobile_inner">
            <a class="menu_mobile_close icon-cancel"></a>
            <nav class="menu_mobile_nav_area">
                <ul id="menu_mobile" class="sc_layouts_menu_nav menu_main_nav">
                    <li class="menu-item"><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li class="menu-item"><a href="{{ route('about') }}"><span>About</span></a></li>
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
                        
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bg_gradient vc_custom_1467796921857 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.3.1.5">
                                                <ul>
                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                                        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="" title="1" width="1170" height="593" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        
                                                        <div class="tp-caption tp-resizeme" id="slide-1-layer-1" 
                                                             data-x="['left','left','left','left']" data-hoffset="['120','40','60','30']" 
                                                             data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" 
                                                             data-width="none" data-height="none" data-whitespace="nowrap" 
                                                             data-type="text" data-responsive_offset="on" 
                                                             data-frames='[{"from":"y:top;","speed":700,"to":"o:1;","delay":1200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                                             data-textAlign="['left','left','left','left']"
                                                             style="color: #ffffff; text-shadow: 0px 2px 5px rgba(0,0,0,0.5); font-weight: bold;">
                                                            Expert Knowledge 
                                                        </div>
                                                        
                                                        <div class="tp-caption tp-resizeme" id="slide-1-layer-2" 
                                                             data-x="['left','left','left','left']" data-hoffset="['120','40','60','30']" 
                                                             data-y="['top','top','top','top']" data-voffset="['180','180','180','180']" 
                                                             data-width="none" data-height="none" data-whitespace="nowrap" 
                                                             data-type="text" data-responsive_offset="on" 
                                                             data-frames='[{"from":"x:50px;opacity:0;","speed":700,"to":"o:1;","delay":700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                                             data-textAlign="['left','left','left','left']"
                                                             style="color: #ffffff; text-shadow: 0px 2px 5px rgba(0,0,0,0.5); font-weight: bold;">
                                                            Transforming <br> The Work Place 
                                                        </div>
                                                    </li>
                                                    
                                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="" title="2" width="1170" height="593" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        
                                                        <div class="tp-caption tp-resizeme" id="slide-3-layer-1" 
                                                             data-x="['left','left','left','left']" data-hoffset="['60','60','60','30']" 
                                                             data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" 
                                                             data-width="none" data-height="none" data-whitespace="nowrap" 
                                                             data-type="text" data-responsive_offset="on" 
                                                             data-frames='[{"from":"y:top;","speed":700,"to":"o:1;","delay":1200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                                             data-textAlign="['left','left','left','left']"
                                                             style="color: #ffffff; text-shadow: 0px 2px 5px rgba(0,0,0,0.5); font-weight: bold;">
                                                            Your Strategic 
                                                        </div>
                                                        
                                                        <div class="tp-caption tp-resizeme" id="slide-3-layer-2" 
                                                             data-x="['left','left','left','left']" data-hoffset="['60','60','60','30']" 
                                                             data-y="['top','top','top','top']" data-voffset="['180','180','180','180']" 
                                                             data-width="none" data-height="none" data-whitespace="nowrap" 
                                                             data-type="text" data-responsive_offset="on" 
                                                             data-frames='[{"from":"x:50px;opacity:0;","speed":700,"to":"o:1;","delay":700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                                             data-textAlign="['left','left','left','left']"
                                                             style="color: #ffffff; text-shadow: 0px 2px 5px rgba(0,0,0,0.5); font-weight: bold;">
                                                            Human Resource <br> Solution Partner 
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5 class="cblue">HOW WE ARE DIFFERENT</h5>
                                                <h2>Helping to create engaging, productive and profitable organizations</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>HR Advisors is a recruitment company that provides a comprehensive service that identifies the role requirements in the organization and designs the job description and skill requirements for that role.</p>
                                                <p>HR Advisors provides a broad menu of Human Resource Outsourcing Services for companies. From an economical complete service.</p>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space empty_4"><span class="vc_empty_space_inner"></span></div>
                                        <div class="sc_item_button sc_button_wrap">
                                            <a href="{{ route('about') }}" class="sc_button sc_button_default sc_button_size_large sc_button_icon_left">
                                                <span class="sc_button_text"><span class="sc_button_title">More info</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div id="sc_skills_807" class="sc_skills sc_skills_counter" data-type="counter">
                                    <div class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                        <div class="sc_skills_column trx_addons_column-1_2">
                                            <div class="sc_skills_item_wrap">
                                                <div class="sc_skills_item">
                                                    <div class="sc_skills_icon icon-target"></div>
                                                    <div class="sc_skills_total" data-start="0" data-stop="1273" data-step="5" data-max="536" data-speed="37" data-duration="9420" data-ed="">0</div>
                                                </div>
                                                <div class="sc_skills_item_title">Company We Help</div>
                                            </div>
                                        </div>
                                        <div class="sc_skills_column trx_addons_column-1_2">
                                            <div class="sc_skills_item_wrap">
                                                <div class="sc_skills_item">
                                                    <div class="sc_skills_icon icon-briefcase"></div>
                                                    <div class="sc_skills_total" data-start="0" data-stop="103" data-step="5" data-max="536" data-speed="20" data-duration="412" data-ed="">0</div>
                                                </div>
                                                <div class="sc_skills_item_title">Corporate Programs</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <h1>Online Courses</h1>
                                    </div>
                                </div>
                                <div class="sc_courses sc_courses_default" data-slides-per-view="3" data-slides-min-width="150">
                                    <div class="sc_courses_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                        
                                        <div class="trx_addons_column-1_3">
                                            <div class="sc_courses_item trx_addons_hover trx_addons_hover_style_links">
                                                <div class="sc_courses_item_thumb">
                                                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt=""/>
                                                    <span class="sc_courses_item_categories"><a href="#">Motivation</a></span>
                                                </div>
                                                <div class="sc_courses_item_info">
                                                    <div class="sc_courses_item_header">
                                                        <h4 class="sc_courses_item_title">Improving Resource Management</h4>
                                                        <div class="sc_courses_item_price">$80 <span class="sc_courses_item_period">month</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="trx_addons_column-1_3">
                                            <div class="sc_courses_item trx_addons_hover trx_addons_hover_style_links">
                                                <div class="sc_courses_item_thumb">
                                                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt=""/>
                                                    <span class="sc_courses_item_categories"><a href="#">Marketing</a></span>
                                                </div>
                                                <div class="sc_courses_item_info">
                                                    <div class="sc_courses_item_header">
                                                        <h4 class="sc_courses_item_title">Team Building and Team Management</h4>
                                                        <div class="sc_courses_item_price">Free!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="trx_addons_column-1_3">
                                            <div class="sc_courses_item trx_addons_hover trx_addons_hover_style_links">
                                                <div class="sc_courses_item_thumb">
                                                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt=""/>
                                                    <span class="sc_courses_item_categories"><a href="#">Team building</a></span>
                                                </div>
                                                <div class="sc_courses_item_info">
                                                    <div class="sc_courses_item_header">
                                                        <h4 class="sc_courses_item_title">Operational Management and Strategic Planning</h4>
                                                        <div class="sc_courses_item_price">$120 <span class="sc_courses_item_period">month</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection