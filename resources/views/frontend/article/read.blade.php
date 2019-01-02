@extends('frontend.layouts.index', ['activeMenu' => 'articles'])
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
@endsection
@section('content')
<style media="screen">
    .thumbnail {
        padding:0px;
    }
    .panel {
        position:relative;
    }
    .panel>.panel-heading:after,.panel>.panel-heading:before{
        position:absolute;
        top:11px;left:-16px;
        right:100%;
        width:0;
        height:0;
        display:block;
        content:" ";
        border-color:transparent;
        border-style:solid solid outset;
        pointer-events:none;
    }
    .panel>.panel-heading:after{
        border-width:7px;
        border-right-color:#f7f7f7;
        margin-top:1px;
        margin-left:2px;
    }
    .panel>.panel-heading:before{
        border-right-color:#ddd;
        border-width:8px;
    }
</style>
    <div class="content" id="content-down">
        <div class="blog">
            <div class="container">
                <div class="col-md-9 ">
                    <div class="single">
                        @include('frontend.article.content-read')
                        @include('frontend.article.comment')
                        @include('frontend.article.form-comment')
                    </div>
                </div>
                @include('frontend.article.widget')
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection