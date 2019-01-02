<style media="screen">
    .text-style{
        font-size: 1.2em;
    }
    .thumbnail{
        height: 40px;
        width: 40px;
    }
</style>
<div class="text-style">
    <div class="comment">
        
        @if ($count == 0)
            <h3>Comments <span class="badge badge-info">{{$count}}</span></h3>
        @else
            <h3>Comments <span class="badge badge-info">{{$count}}</span></h3>
        @endif
    </div>
    <div class="row">
        @foreach ($comments as $item)
            @if ($item->status == 'approved')
                <div class="col-md-10">
                    <div class="col-md-1">
                        <div class="thumbnail">
                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                    </div><!-- /col-md-1 -->
                    <div class="col-md-11">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>{{$item->name}}</strong> <span class="text-muted">{{$item->created_at->format('d-m-Y')}}</span>
                            </div>
                            <div class="panel-body">
                                {{$item->comment}}
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-md-5 -->
                </div>
            @endif
        @endforeach
    </div><!-- /row -->
</div>