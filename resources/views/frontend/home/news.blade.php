<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>News</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
				<div class="news-bot">
					@foreach ($articles as $article)
						@if ($article->status == 'published')
							<div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
								@php
									$image = $article->cover;
								@endphp
								<a href="{{url('article/read/'.$article->slug)}}">
									<div class="content-item" style="background: url('{{asset('backend/images/article/'.$image)}}') no-repeat;">
										<div class="overlay"></div>
										{{-- <img src="{{asset('backend/images/article/'.$article->cover)}}" alt=""> --}}
										<div class=" news-bottom2">
											<ul class="grid-news">
												<li><span><i class="glyphicon glyphicon-calendar"> </i>{{$article->created_at->format('d M Y')}}</span><b>/</b></li>
												<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
												<li><span><i class="glyphicon glyphicon-user"> </i>{{$article->user->name}}</span></li>
											</ul>
											<p>{{$article->title}}</p>
										</div>
									</div>
								</a>
								<br>
							</div>
						@endif
					@endforeach
					{{-- <div class="clearfix"> </div> --}}
				</div>	
			</div>
		</div>
	</div>