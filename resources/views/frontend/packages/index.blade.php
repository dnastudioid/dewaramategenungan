@extends('frontend.layouts.index', ['activeMenu' => 'packages'])
@section('content')
<div class="content">
	<div class="events">
		<div class="container">
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInLeft;">
					<h3>Packages</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 events-right animated wow fadeInRight animated" data-wow-duration="1000ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInRight;">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.</p>
				</div>
				<div class="clearfix"> </div>
            </div>
            @foreach ($packages as $package)
                <div class="events-bottom">
                    <div class="col-md-12 events-bottom2 animated wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                        <h3>{{ $package->nama }}</h3>
                        <label><i class="glyphicon glyphicon-menu-up"></i></label>
                        <center>
                            <h3>Price Only ${{ $package->price }} Each Person</h3>
                            <p>
                                {!! $package->detail !!}
                            </p>
                            <div class="read-more">						
                                <a class="link link-yaku" href="single.html">
                                    <span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
                                </a>
                            </div>
                        </center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
		</div>
	</div>
</div>
@endsection