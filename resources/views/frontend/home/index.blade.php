@extends('frontend.layouts.master')

@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to('frontend/images/main-slider/image01.jpg')}}"> 
                    
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
                            <a href="{{ url('about-us') }}" class="theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>
                    
                    </li>
                    
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{URL::to('frontend/images/main-slider/image03.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to('frontend/images/main-slider/image03.jpg')}}"> 
                    
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
                <h2>Foods & Drinks</h2>
                <div class="title">Good Taste // Cheap Price</div>
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
                <h2>Our Gallery</h2>
                <div class="title">We Create Unforgettable Memory</div>
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
    
    <!--News Blog Section-->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Recent Articles</h2>
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

    <!--Call To Action-->
    <section class="call-to-action" style="background-image:url(frontend/images/background/2.jpg);">
        <div class="auto-container">
            <h2>Enjoy Your Day </h2>
        </div>
    </section>
    <!--End Call To Action-->
@endsection