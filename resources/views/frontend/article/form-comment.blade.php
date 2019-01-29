<div class="leave" style="margin-top: 25px">
    <h3>Leave a comment</h3>
    <br>
    <form method="POST" action="{{url('article/'.$articles->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" style="padding: 18px 15px; font-size: 1.5em" placeholder="Fill your name">
                </div>
                <div class="form-group">
                    <textarea name="comment" id="" cols="30" rows="10" class="form-control" style="font-size: 1.5em" placeholder="Your comment"></textarea>
                </div>
                <div class="pull-left">
                    <button type="submit" class="btn btn-primary" style="padding: 8px 20px; font-size: 1.5em">Send</button>
                </div>
            </div>
        </div>
    </form>
</div>