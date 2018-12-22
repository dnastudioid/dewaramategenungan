<div class="blog">
    <div class="container">
        <div class="menu-top">
            <div class="col-md-4 menu-left">
                <h3>Blog</h3>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <span>There are many variations</span>
            </div>
            <div class="col-md-8 menu-right">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        
            <div class="col-md-9 blog-header">
                <div class=" blog-head">
                    @foreach ($articles as $article)
                    @php
                        $content = strip_tags($article->description);
                    @endphp
                    <div class="col-md-4 blog-top">
                        <div class="blog-in">
                            <a href="single.html"><img class="img-responsive" src="{{asset('backend/images/article/'.$article->cover)}}" alt=" "></a>
                            <div class="blog-grid">
                                <h3><a href="single.html">{{$article->title}}</a></h3>
                                <div class="date">
                                    <span class="date-in"><i class="glyphicon glyphicon-calendar"> </i>{{$article->created_at->format('d M Y')}}</span>
                                    <a class="author"><i class="glyphicon glyphicon-user"> </i> {{$article->user->name}}</a>
                                    <a class="comments"><i class="glyphicon glyphicon-comment"></i>24</a>
                                    <div class="clearfix"> </div>
                                </div>
                                <p>{!! str_limit($content, 100) !!}</p>
                                <div class="more">						
                                    <a class="link link-yaku" href="single.html">
                                        <span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
                                    </a>
                                </div>
                            </div>					
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
            @include('frontend.article.categories')
        <div class="clearfix"> </div>
        
    </div>
    
</div>