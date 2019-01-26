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
					<p>There are many variations of packages available in Warung Dewa Rama Tegenungan. Pick your best choice and enjoy our services !</p>
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
                            {{-- <div class="read-more">						
                                <a class="link link-yaku" href="https://wa.me/6285232904156?text=Isi Pesan">
                                    <span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
                                </a>
                            </div> --}}
                        </center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
		</div>
	</div>
</div>
@endsection