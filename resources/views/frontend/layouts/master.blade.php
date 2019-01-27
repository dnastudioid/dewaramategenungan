<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Warung Dewa Rama</title>

	<link href="{{URL::to('frontend/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{URL::to('frontend/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::to('frontend/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::to('frontend/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::to('frontend/css/style.css')}}" rel="stylesheet">
	<link href="{{URL::to('frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{URL::to('frontend/css/color-switcher-design.css')}}" rel="stylesheet">
	<link id="theme-color-file" href="{{URL::to('frontend/css/color-themes/orange-theme.css')}}" rel="stylesheet">
	<link rel="shortcut icon" href="{{URL::to('frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::to('frontend/images/favicon.png')}}" type="image/x-icon">
    <link href="toastr.css" rel="stylesheet"/>
    @yield('css')

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-inner">
                	<div class="clearfix">
                        <div class="top-left">
                            <ul class="clearfix">
                                <li><span class="fa fa-phone"></span>00-000-0000</li>
                                <li><span class="fa fa-phone"></span>99-999-9999</li>
                                <li class="email"><a href="#"><span class="icon fa fa-envelope-o"></span>ask@tegenungan-warungdewarama.com</a></li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span> Twiter</a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
                	
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{URL::to('frontend/images/logo2.png')}}" alt="" title="" width="90px;"></a></div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                		<!-- Main Menu -->

                        @include('frontend.layouts.menu')
                        
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            		</div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="{{url('/')}}" class="img-responsive"><img src="{{URL::to('frontend/images/logo2.png')}}" alt="" width="70px;" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    @include('frontend.layouts.menu')
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
    @yield('content')
    
    <!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget link-widget">
                                    <div class="footer-title">
                                        <h2>Usefull Links</h2>
                                        <div class="separator"></div>
                                	</div>
                                    <ul class="list-links">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('menus') }}">Menu</a></li>
                                        <li><a href="{{ url('packages') }}">Packages</a></li>
                                        <li><a href="{{ url('galleries') }}">Gallery</a></li>
                                        <li><a href="{{ url('articles') }}">Articles</a></li>
                                    	<li><a href="{{ url('about-us') }}">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget link-widget">
                                    <div class="footer-title">
                                        <h2>Our Services</h2>
                                        <div class="separator"></div>
                                	</div>
                                    <ul class="list-links">
                                    	<li><a href="#">Transaction</a></li>
                                        <li><a href="#">Exchange</a></li>
                                        <li><a href="#">Investments</a></li>
                                        <li><a href="#">Shopping</a></li>
                                        <li><a href="#">Escrow Service</a></li>
                                        <li><a href="#">Fantales</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget info-widget">
                                	<div class="footer-title">
                                        <h2>Get In Touch</h2>
                                        <div class="separator"></div>
                                	</div>
									<ul class="info-list">
                                    	<li><span>Email:</span>ask@tegenungan-warungdewarama.com</li>
                                        <li><span>Phone:</span>Tollfree: 888-7010-7010</li>
                                        <li><span>Address:</span>203, Envato Labs, Behind Alis Str, <br> Melbourne, Australia.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget info-widget">
                                	<div class="footer-title">
                                        <h2>We Are Social</h2>
                                        <div class="separator"></div>
                                	</div>
                                    <ul class="social-links">
                                    	<li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span> Linkedin</a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span> Pinterest</a></li>
                                        <li><a href="#"><span class="fa fa-rss"></span> RSS Feed</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
    		</div>
            
            <!--Footer Nav Links-->
            <div class="footer-nav-links">
            	<ul class="footer-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('menus') }}">Menus</a></li>
                    <li><a href="{{ url('packages') }}">Packages</a></li>
                    <li><a href="{{ url('galleries') }}">Gallery</a></li>
                    <li><a href="{{ url('articles') }}">Articles</a></li>
                    <li><a href="{{ url('about-us') }}">About us</a></li>
                </ul>
            </div>
            
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright">Copyrights &copy; 2019 Warung Dewa Rama. All Rights Reserved.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="{{URL::to('frontend/js/jquery.js')}}"></script> 
<script src="{{URL::to('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{URL::to('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{URL::to('frontend/js/main-slider-script.js')}}"></script>

<script src="{{URL::to('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::to('frontend/js/jquery-ui.js')}}"></script>
<script src="{{URL::to('frontend/js/owl.js')}}"></script>
<script src="{{URL::to('frontend/js/widget.js')}}"></script>
<script src="{{URL::to('frontend/js/appear.js')}}"></script>
<script src="{{URL::to('frontend/js/wow.js')}}"></script>
<script src="{{URL::to('frontend/js/script.js')}}"></script>
<script src="{{URL::to('frontend/js/color-settings.js')}}"></script>
<script src="jquery.min.js"></script>
<script src="toastr.js"></script>
</body>
</html>