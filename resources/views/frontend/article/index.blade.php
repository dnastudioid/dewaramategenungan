@extends('frontend.layouts.master', ['activeMenu' => 'articles'])
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
    	<div class="auto-container">
        	<h1>Our Articles</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">Home</a></li>
                <li>Our Articles</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--News Block-->
            	<div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box">
                        	<a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
            	<div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <!--News Block-->
            	<div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{ url('detail-article') }}"><img src="{{URL::to('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('detail-article') }}">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                                <div class="read-more pull-left"><a href="{{ url('detail-article') }}">Read More</a></div>
                                <div class="likes pull-right"><a href="{{ url('detail-article') }}"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!--Styled Pagination-->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    <li><a href="#"><span class="fa fa-caret-left"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><span class="fa fa-caret-right"></span></a></li>
                </ul>
            </div>
            <!--End Styled Pagination-->
            
        </div>
    </section>
    <!--End Blog Page Section-->
@stop