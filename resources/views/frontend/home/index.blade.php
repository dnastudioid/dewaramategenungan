@extends('frontend.layouts.index',['activeMenu' => 'home'])
    @section('content')
    <div class="content" id="content-down">
        @include('frontend.home.about')
        @include('frontend.home.services')
        @include('frontend.home.news')
    </div>
    @endsection