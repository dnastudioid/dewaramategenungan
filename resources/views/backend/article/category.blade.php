@extends('backend.layouts.app', ['activeMenu' => 'category'])

@section('css')
<link href="{{asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    </div>
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
    <div class="clearfix"></div>

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
                    <form role="form" action="{{Help::url('article/category')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <br>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <h6>The description column can be left blank. </h6>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Save New Category</button>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
            <div class="x_panel">
              <div class="x_title">
                <h2>Categories</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered" w>
                  <thead>
                    <tr>
                      <th width="20px"><center>No</center></th>
                      <th><center>Name</center></th>
                      <th><center>Description</center></th>
                      <th><center>Option</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($categories as $c)
                        <tr>
                            <td>{{$no++}}</td>
                            <td><input type="text" name="name" value="{{$c->name}}" style="border: none;background: transparent;"></td>
                            <td>
                                @if ($c->descroption !=0 || $c->description != null)
                                    <input type="text" name="description" value="{{$c->description}}" style="border: none;background: transparent;">    
                                @else
                                    <input type="text" name="description" value="--" style="border: none;background: transparent;">    
                                @endif
                                
                            </td>
                            <td>
                                <a href="{{Help::url('article/category/'.$c->id)}}" class="btn btn-warning btn-xs">Edit</button>
                                <a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="deleteCategory('{{$c->id}}')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<form class="hidden" action="" method="post" id="formDelete">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
</form>
@endsection

@section('js')
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">
    function deleteCategory(id){
        bootbox.confirm("Are you sure to delete this category ?", function(result){
            if (result) {
                $('#formDelete').attr('action', '{{Help::url('article/category')}}/'+id);
                $('#formDelete').submit();
            }
        });
    }
    </script>
@endsection
