@extends('frontend.layouts.master', ['activeMenu' => 'articles'])
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection
@section('content')
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
    	<div class="auto-container">
        	<h1>Our Articles</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('articles')}}">Article</a></li>
                <li>
                    @if ($searchs)
                        Search For : {{$searchs}}
                    @elseif ($categoriessearch)
                        Categories For : {{$categoriessearch}}
                    @endif
                </li>
            </ul>
        </div>
    </section>
    <section class="blog-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="col-md-9 col-sm-6 col-xs-12" style="margin-top: -55px">
                        <center>
                            <h1>
                                @if ($searchs)
                                    <center><h2>Search For : {{$searchs}}</h2></center>
                                @elseif ($categoriessearch)
                                <center> <h2>Categories For : {{$categoriessearch}}</h2> </center>
                                @endif
                            </h1>
                        </center>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 pull-right" style="margin-top: -55px">
                        <div class="input-group mb-3">
                            <form action="{{ url('article/search') }}" method="GET">
                                <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" style="font-size: 13px">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text" id="basic-addon2" style="padding: 9px"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @foreach ($results as $article)
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
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    {!! $results->links() !!}
                </ul>
            </div>
        </div>
    </section>
@stop