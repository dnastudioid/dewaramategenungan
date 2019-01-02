@extends('backend.layouts.app',['activeMenu' => 'article'])

@section('css')

@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
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
    
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Category </h3>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="page-title">
                                <div class="title_left">
                                    <h4>Add New Category</h4>
                                </div>
                            </div>
                            <form role="form" action="{{Help::url('article/category/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                            <br>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$data->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control">{{$data->description}}</textarea>
                                    <h6>The description column can be left blank. </h6>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary" value="Save Category">
                                <a href="{{Help::url('article/category')}}" class="btn btn-dark">Back</a>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    {{-- </div> --}}
    <div class="clearfix"></div>
  </div>
</div>
@endsection
@section('js')

@endsection