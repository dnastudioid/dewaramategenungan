@extends('frontend.layouts.index')
    @section('content')
    <div class="header head">
        <div class="container">
            <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h1><a href="index.html"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
            </div>
            @include('frontend.layouts.navigation')
            <div class="clearfix"></div>
        </div>      
    </div>
    <div class="content" id="content-down">
        @include('frontend.article.all-article')
        {{-- @include('frontend.home.about')
        @include('frontend.home.services')
        @include('frontend.home.news') --}}
    </div>
    @endsection