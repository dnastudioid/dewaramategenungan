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
    
    <div class="page-title">
      <div class="title_left">
        <h3>Add Photo</h3>
      </div>
    </div>
    {{-- <div class="row"> --}}        
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Input Gallery</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form role="form" action="{{Help::url('gallery')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="file">Photo</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <textarea name="caption" rows="6" class="form-control" placeholder="Write a caption"></textarea>
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
