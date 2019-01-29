@extends('backend.layouts.app', ['activeMenu' => 'add-gallery'])

@section('css')

@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    @if (session('message'))
        <div class="alert alert-success" style="margin-top: 75px; margin-bot: -50px">
            {{ session('message') }}
        </div>
    @endif
    @if(Session::has('error_message'))
      <div class="alert alert-danger" style="margin-top: 75px; margin-bot: -50px">
          {{Session::get('error_message')}}
      </div>
    @endif
    
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Photo</h3>
      </div>
    </div>
    {{-- <div class="row"> --}}        
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Edit Gallery</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form role="form" action="{{Help::url('gallery/'.$gallery->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <label>Current photo : </label><br>
                    <img src="{{asset('/backend/images/gallery/'.$gallery->file)}}" alt="warung dewa rama" style="height: 200px;">
                    <br><br>
                    <div class="form-group">
                        <label for="file">New photo</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <textarea name="caption" rows="6" class="form-control" placeholder="Write a caption">{{$gallery->caption}}</textarea>
                    </div>
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <a href="{{Help::url('gallery')}}" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
    {{-- </div> --}}
    <div class="clearfix"></div>
  </div>
</div>
@endsection
