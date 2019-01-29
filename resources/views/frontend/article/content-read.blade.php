<div class="single-top">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Information !</h4>
            {{Session::get('success')}}
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Information !</h4>
            {{Session::get('error')}}
        </div>
    @endif
    <img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="{{asset('backend/images/article/'.$articles->cover)}}" alt="" />
    <div class="lone-line text-justify">
        <h4>{{$articles->title}}</h4>
            <ul class="grid-blog">
                <li><span><i class="glyphicon glyphicon-time"> </i>{{$articles->created_at->format('d M Y')}}</span></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment"> </i>{{$count}}</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"> </i>{{$articles->user->name}}</a></li>
            </ul>
            <p class="wow fadeInLeft animated" data-wow-delay=".5s">
                <span>{!! $articles->description !!}</span>
            </p>
    </div>
</div>