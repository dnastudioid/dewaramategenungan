@extends('backend.layouts.app')

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
        <h3>Edit Menu</h3>
      </div>
    </div>
    {{-- <div class="row"> --}}        
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Menu Data</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form role="form" action="{{Help::url('edit-menu')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Menu name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter menu name" value="{{$menu->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="5" class="form-control" placeholder="Enter a description">{{$menu->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                        <option value="">-- Select a category -- </option>
                        <option value="foods">Foods</option>
                        <option value="drinks">Drinks</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Menu photo</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$menu->id}}">
                    </div>
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <a href="{{Help::url('menus')}}" class="btn btn-primary">Cancel</a>
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
