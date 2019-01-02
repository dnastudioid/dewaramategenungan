<div class="col-md-3 categories-grid">
    <div class="search-in animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <h4>Search</h4>
            <div class="search">
            <form>
                <input type="text" placeholder="Search" required="" >
                <input type="submit" value="" >
            </form>
        </div>
    </div>
    <div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
        <h4>Categories</h4>
        <ul class="popular">
            @php
                $categories = explode(',',strtr($articles->categories,[' ' => '']));
                
            @endphp
            @foreach ($categories as $c)
                <a href="#" class="btn btn-outline-secondary btn-lg" style="margin-bottom: 4px;">{{$c}} </a> 
            @endforeach
        </ul>
    </div>
    <div class="blog-bottom animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
        <h4>Recent Posts</h4>
        @foreach ($all as $a)
            <div class="product-go">
                <a href="{{url('article/read/'.$a->slug)}}" class="fashion"><img class="img-responsive " src="{{asset('backend/images/article/'.$a->cover)}}" alt=""></a>
                <div class="grid-product">
                    <a href="{{url('article/read/'.$a->slug)}}" class="elit">{{$a->title}}</a>
                    <p>{!! str_limit($a->description, 300) !!}</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        @endforeach
    </div>
</div>