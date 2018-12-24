@extends('backend.layouts.app', ['activeMenu' => 'gallery'])

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
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Galleries</h2>
            <div class="clearfix"></div>
          </div>
          <a href="{{Help::url('gallery/create')}}" class="btn btn-primary">Add Photo</a>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="25px"><center>No</center></th>
                  <th><center>Created by</center></th>
                  <th><center>Image</center></th>
                  <th style="width: 300px;"><center>Caption</center></th>
                  <th><center>Date added</center></th>
                  <th><center>Opsi</center></th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp

               @foreach ($galleries as $gallery)
                    <tr>
                        <td><center> {{$no++}} </center></td>
                        <td><center> {{$gallery->name}} </center></td>
                        <td><center> <button class="btn btn-sm btn-success" onClick="showImage('{{$gallery->file}}');">Show image</button></center></td>
                        <td><center> {{$gallery->caption}} </center></td>
                        <td><center> {{$gallery->galleryCreated->format('d M Y')}} </center></td>
                        <td><center>
                            <a href="{{Help::url('gallery/'.$gallery->galleryId.'/edit')}}" class="fa fa-pencil"></a>
                            <a href="javascript:void(0)" class="fa fa-trash" onclick="deleteGallery('{{$gallery->galleryId}}')"></a>
                        </center></td>
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
<form class="hidden" action="" method="post" id="formDelete">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
</form>
<!-- /page content -->
@endsection

@section('js')
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">

    function showImage(file){
      bootbox.dialog({
        message: '<img src="{{asset('backend/images/gallery')}}/'+file+'" class="img-responsive">',
        closeButton: true,
        size: 'small'
      });
    }

    function deleteGallery(id){
        bootbox.confirm("Are you sure you want to delete this gallery ?", function(result){
            if (result) {
                $('#formDelete').attr('action', '{{Help::url('gallery')}}/'+id);
                $('#formDelete').submit();
            }
        });
    }
    </script>
@endsection
