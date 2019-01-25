@extends('frontend.layouts.master', ['activeMenu' => 'articles'])
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
    	<div class="auto-container">
        	<h1>Our Articles</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
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
                
                @foreach ($articles as $article)
                @php
                    $descs = strip_tags($article->description);
                    $image = $article->cover;
                @endphp
                    <div class="news-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ url('detail-article/'.$article->slug) }}"><img src="{{asset('backend/images/article/'.$image)}}" alt="" /></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ url('detail-article/'.$article->slug) }}">{{$article->title}}</a></h3>
                                <div class="meta">{{$article->created_at->format('d M Y')}}  by <span>{{$article->user->name}}</span></div>
                                <div class="text-justify">{!! str_limit($descs, 250) !!} </div>
                                <div class="lower-box clearfix">
                                    <div class="read-more pull-left"><a href="{{ url('detail-article/'.$article->slug) }}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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