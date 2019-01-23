@extends('frontend.layouts.master')

@section('content')
	<!--Main Slider-->
    <section class="main-slider">
    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                
                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to('frontend/images/main-slider/image-1.jpg')}}"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','650','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-90','-100','-100','-85']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<h2 class="text-center"><span>Welcome</span> Warung Dewa Rama</h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['60','35','25','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<div class="text text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ac cusantium doloremque laudantium.</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['150','130','130','110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<div class="btns-box text-center">
                        	<a href="about.html" class="theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>
                    
                    </li>
                    
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{URL::to('frontend/images/main-slider/image-2.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to('frontend/images/main-slider/image-2.jpg')}}"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','650','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-90','-100','-100','-85']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<h2 class="text-center"><span>Welcome</span> Warung Dewa Rama</h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['60','35','25','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<div class="text text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ac cusantium doloremque laudantium.</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['550','550','550','420']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['150','130','130','110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;">
                    	<div class="btns-box text-center">
                        	<a href="about.html" class="theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>
                    
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Delicious Section-->
    <section class="delicius-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Our Delicious</h2>
            	<div class="title">Magical Experience</div>
                <div class="separator"></div>
            </div>
            
            <div class="row clearfix">
            	
                <!--Delicious Block-->
                <div class="delicious-block col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="{{URL::to('frontend/images/resource/delicious_1.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<h3><a href="#">Break Fast</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                    <a href="shop-single.html" class="theme-btn btn-style-two">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Delicious Block-->
                <div class="delicious-block col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="{{URL::to('frontend/images/resource/delicious_2.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<h3><a href="#">Delicious Lunch</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                    <a href="shop-single.html" class="theme-btn btn-style-two">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Delicious Block-->
                <div class="delicious-block col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="{{URL::to('frontend/images/resource/delicious_3.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<h3><a href="#">Dinner</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                    <a href="shop-single.html" class="theme-btn btn-style-two">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Delicious Block-->
                <div class="delicious-block col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="{{URL::to('frontend/images/resource/delicious_4.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<h3><a href="#">Desserts</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                    <a href="shop-single.html" class="theme-btn btn-style-two">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End Delicious Section-->
    
    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
        	
            <!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Food Gallery</h2>
                <div class="title">We Create Delicous Memory</div>
                <div class="separator"></div>
            </div>
            
        </div>
    	<div class="clearfix">
        	
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/1.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/1.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/2.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/2.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/3.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/3.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/4.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/4.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/5.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/5.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/6.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/6.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/7.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/7.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Block-->
            <div class="gallery-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{URL::to('frontend/images/gallery/8.jpg')}}" alt="" />
                        <div class="overlay-box">
                            <a href="images/gallery/8.jpg" class="plus-icon lightbox-image" data-fancybox="images" data-caption=""><span class="icon flaticon-plus"></span></a>
                            <div class="content clearfix">
                                <h3><a href="gallery-single.html">Spicy Dinner</a></h3>
                                <div class="category">Chicken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Gallery Section-->
    
    <!--chefs Team-->
    <section class="chefs-section">
        <div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Our Delicious</h2>
                <div class="title">Meet Our Passionate Chefs</div>
                <div class="separator"></div>
            </div>
            
            <div class="three-item-corousel owl-carousel owl-theme">
            
                <!--Chef Member-->
                <div class="chef-member">
                    <div class="inner-box">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="{{URL::to('frontend/images/resource/chef-1.jpg')}}" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fa fa-facebook" href="#"></a></li>
                                        <li><a class="fa fa-twitter" href="#"></a></li>
                                        <li><a class="fa fa-linkedin" href="#"></a></li>
                                        <li><a class="fa fa-instagram" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h3>Rick Grimes</h3>
                            <div class="designation">Cheef Cook</div>
                        </div>
                    </div>
                </div>
            
                <!--Chef Member-->
                <div class="chef-member">
                    <div class="inner-box">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="{{URL::to('frontend/images/resource/chef-2.jpg')}}" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fa fa-facebook" href="#"></a></li>
                                        <li><a class="fa fa-twitter" href="#"></a></li>
                                        <li><a class="fa fa-linkedin" href="#"></a></li>
                                        <li><a class="fa fa-instagram" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h3>ELena Gilbert</h3>
                            <div class="designation">Master Chef & Founder</div>
                        </div>
                    </div>
                </div>
            
                <!--Chef Member-->
                <div class="chef-member">
                    <div class="inner-box">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="{{URL::to('frontend/images/resource/chef-3.jpg')}}" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fa fa-facebook" href="#"></a></li>
                                        <li><a class="fa fa-twitter" href="#"></a></li>
                                        <li><a class="fa fa-linkedin" href="#"></a></li>
                                        <li><a class="fa fa-instagram" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h3>Rick Grimes</h3>
                            <div class="designation">Cheef Cook</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End chefs Team-->
    
    <!--Call To Action-->
    <section class="call-to-action" style="background-image:url(frontend/images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Enjoy Together</h2>
        </div>
    </section>
    <!--End Call To Action-->
    
    <!--Reservation Section-->
    <section class="reservation-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Reservation</h2>
                <div class="title">Magical  Experience</div>
                <div class="separator"></div>
            </div>
            
            <!--Reserve Form-->
            <div class="reserve-form">
                <form method="post" action="https://expert-themes.com/html/shangrila/contact.html">
                    <div class="row clearfix">
                    
                    	<!--Column-->
                        <div class="column col-md-4 col-sm-6 col-xs-12">
                            <!--Form Group-->
                            <div class="form-group">
                                <label class="fa fa-calendar"></label>
                                <select class="custom-select-box">
                                    <option>15/10/2016</option>
                                    <option>16/10/2016</option>
                                    <option>17/10/2016</option>
                                    <option>18/10/2016</option>
                                    <option>19/10/2016</option>
                                    <option>20/10/2016</option>
                                </select>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group">
                                <label class="fa fa-clock-o"></label>
                                <select class="custom-select-box">
                                    <option>5:00 PM</option>
                                    <option>6:00 PM</option>
                                    <option>7:00 PM</option>
                                    <option>8:00 PM</option>
                                    <option>9:00 PM</option>
                                    <option>10:00 PM</option>
                                </select>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="fa fa-users"></label>
                                <select class="custom-select-box">
                                    <option>1 Guests</option>
                                    <option>2 Guests</option>
                                    <option>3 Guests</option>
                                    <option>4 Guests</option>
                                    <option>5 Guests</option>
                                    <option>6 Guests</option>
                                </select>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column text-center col-md-12 col-sm-12 col-xs-12">
                        	<button href="#" class="theme-btn btn-style-one">Find A Table</button>
                        </div>
                        
            		</div>
                </form>
            </div>
        </div>
    </section>
    <!--End Reservation Section-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section">
    	<div class="auto-container">
        	<div class="single-item-carousel owl-carousel owl-theme">
            	
                <div class="testimonial-block">
                	<div class="inner-box">
                    	
                        <div class="upper-box">
                        	<div class="image">
                            	<img src="{{URL::to('frontend/images/resource/chef-thumb.jpg')}}" alt="" />
                            </div>
                            <div class="quote-icon">
                            	<span class="icon flaticon-left-quote-1"></span>
                            </div>
                        </div>
                        <div class="text">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products hereas parallel platforms holisticly predominate.</div>
                        <div class="author">Michale Joe</div>
                    </div>
                </div>
                
                <div class="testimonial-block">
                	<div class="inner-box">
                    	
                        <div class="upper-box">
                        	<div class="image">
                            	<img src="{{URL::to('frontend/images/resource/chef-thumb.jpg')}}" alt="" />
                            </div>
                            <div class="quote-icon">
                            	<span class="icon flaticon-left-quote-1"></span>
                            </div>
                        </div>
                        <div class="text">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products hereas parallel platforms holisticly predominate.</div>
                        <div class="author">Michale Joe</div>
                    </div>
                </div>
                
                <div class="testimonial-block">
                	<div class="inner-box">
                    	
                        <div class="upper-box">
                        	<div class="image">
                            	<img src="{{URL::to('frontend/images/resource/chef-thumb.jpg')}}" alt="" />
                            </div>
                            <div class="quote-icon">
                            	<span class="icon flaticon-left-quote-1"></span>
                            </div>
                        </div>
                        <div class="text">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products hereas parallel platforms holisticly predominate.</div>
                        <div class="author">Michale Joe</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
    
    <!--News Blog Section-->
    <section class="news-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>Our Blog</h2>
                <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, toed ut perspiciatis under.</div>
                <div class="separator"></div>
            </div>
            
            <div class="row clearfix">
            	<!--News Block-->
            	<div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="{{URL::to('frontend/images/resource/news-2.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">The Best Tips For Tasty Food</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="{{URL::to('frontend/images/resource/news-3.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Your Weeknight Dinner Plan</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End News Blog Section-->
@endsection