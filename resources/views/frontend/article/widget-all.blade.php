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
            @foreach ($categories as $c)
                <a href="#" class="btn btn-outline-secondary btn-lg" style="margin-bottom: 4px;">{{$c->name}} </a> 
            @endforeach
        </ul>
    </div>

</div>