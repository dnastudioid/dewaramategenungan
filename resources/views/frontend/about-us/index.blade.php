@extends('frontend.layouts.master')
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
    	<div class="auto-container">
        	<h1>About Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Welcome Section-->
    <section class="welcome-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-column">
                		<div class="title">Welcome to</div>
                    	<h2>Warung Dewa Rama</h2>
                    	<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                        <a href="about.html" class="theme-btn btn-style-one">Read More</a>
                    </div>
                </div>
                <!--Images Column-->
                <div class="images-column col-md-6 col-sm-6 col-xs-12">
                	<div class="images clearfix">
                    	
                        <div class="image upper-img">
                        	<img src="{{URL::to('frontend/images/resource/welcome_1.jpg')}}" alt="" />
                        </div>
                        <div class="image lower-img">
                        	<img src="{{URL::to('frontend/images/resource/welcome_1.jpg')}}" alt="" />
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Welcome Section-->
    
    <!--chefs Team-->
    <section class="chefs-section grey-bg">
        <div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Our Team</h2>
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
    
    <!--Place Section-->
    <section class="place-section" style="background-image:url(frontend/images/background/7.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12"></div>
                <!--Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="content-inner">
                    	<h2>The Place</h2>
                        <div class="text">Unique experience for the Holidays at Monde. Proina  nibhel velit auctor aliquet. Aenean sollicit udine oremual biben dum auctor, nisi elit consequat ipsum, nec sagittis am sem nibhad elit. Duis sed odio sit amet nibvupususa amet uris. Morbi accumsan ipsum vitamec tellus bodio tincwa idunt auctor a ornare odio. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Place Section-->
    
    <!--Talk Section-->
    <section class="talk-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="icon-box">
                        	<span class="icon flaticon-right-arrow-1"></span>
                        </div>
                        <h3>Let’s talk about some work Team.</h3>
                        <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
                    </div>
                </div>
                <!--Button Column-->
                <div class="button-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<a href="contact.html" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Talk Section-->
@stop