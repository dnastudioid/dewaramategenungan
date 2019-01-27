@extends('frontend.layouts.master')
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
        <div class="auto-container">
            <h1>Detail Article</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('articles')}}">Article</a></li>
                <li>{{$articles->title}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <br>
    
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Information !</h4>
                            {{Session::get('success')}}
                        </div>
                    @elseif (Session::has('error'))
                        <div class="alert alert-error alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Information !</h4>
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('backend/images/article/'.$articles->cover)}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="post-info">{{$articles->created_at->format('d M Y')}} By {{$articles->user->name}}    </div>
                                <h2>{{$articles->title}}</h2>
                                <div class="text-justify">
                                    <p>{!! $articles->description !!}</p>
                                </div>
                                <div class="post-share-options clearfix">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Comments Area-->
                    <div class="comments-area">
                        <div class="group-title">
                            <h2>
                                @if ($count == 0)
                                    0 Comment
                                @else
                                    {{$count}} Comments
                                @endif
                            </h2>
                        </div>
                        
                        <!--Comment Box-->
                        @foreach ($comments as $comment)
                            @if ($comment->status == 'approved')
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>{{$comment->name}}</strong><div class="comment-time">{{$comment->created_at->format('D, d M Y')}}</div></div>
                                            <div class="text">{{$comment->comment}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        
                    </div>
                    <!--End Comments Area-->
                    
                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="group-title"><h2>Post A Comment</h2></div>
                        <!--Comment Form-->
                        <form method="POST" action="{{url('article/'.$articles->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="comment" placeholder="Comments"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send</button>
                                </div>
                            </div>
                        </form>
                            
                    </div>
                    <!--End Comment Form --> 
                    
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form action="{{ url('article/search') }}" method="GET">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            @php
                                $categories = explode(',',strtr($articles->categories,[' ' => '']));
                            @endphp
                            @foreach ($categories as $category)
                                <ul class="blog-cat style-two">
                                    <li><a>{{$category}}</a></li>
                                </ul>
                            @endforeach
                        </div>
                        
                        <!--News-->
                        <div class="sidebar-widget recent-news">
                            <div class="sidebar-title">
                                <h2>Recent News</h2>
                            </div>
                            
                            <!--News Widget-->
                            @foreach ($all as $alls)
                                <div class="news-widget">
                                    <div class="text">
                                        <a href="{{url('detail-article/'.$alls->slug)}}">{{$alls->title}}</a>
                                    </div>
                                    <span class="days">{{$alls->created_at->format('d M Y')}}</span>
                                </div>
                            @endforeach
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
@stop