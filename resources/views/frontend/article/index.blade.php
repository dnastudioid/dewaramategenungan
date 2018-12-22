@extends('frontend.layouts.index', ['activeMenu' => 'articles'])
@section('content')
    <div class="content" id="content-down">
        @include('frontend.article.all-article')
    </div>
@endsection