@extends('frontend.layouts.index',['activeMenu' => 'home'])
    @section('css')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    @endsection
    @section('content')
    <div class="content" id="content-down">
        @include('frontend.home.about')
        @include('frontend.home.services')
        @include('frontend.home.news')
    </div>
    @endsection