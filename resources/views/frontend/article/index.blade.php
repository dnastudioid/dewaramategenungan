@extends('frontend.layouts.index', ['activeMenu' => 'articles'])
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
@endsection
@section('content')
    <div class="content" id="content-down">
        @include('frontend.article.all-article')
    </div>
@endsection