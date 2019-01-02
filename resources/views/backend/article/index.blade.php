@extends('backend.layouts.app', ['activeMenu' => 'article'])

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
        <div class="x_panel">
          <div class="x_title">
            <h2>Articles</h2>
            <div class="clearfix"></div>
          </div>
          <a href="{{Help::url('article/create')}}" class="btn btn-primary"> Add Article</a>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="25px"><center>No</center></th>
                  <th><center>Title</center></th>
                  <th><center>Author</center></th>
                  <th><center>Place</center></th>
                  <th><center>Cover</center></th>
                  <th><center>Time</center></th>
                  <th><center>Detail</center></th>
                  <th><center>Status</center></th>
                  <th><center>Option</center></th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($articles as $article)
                    <tr>
                        <td><center> {{$no++}} </center></td>
                        <td><center> {{$article->title}} </center></td>
                        <td><center> {{$article->user->name}} </center></td>
                        <td><center> {{$article->place}} </center></td>
                        <td><center> <button class="btn btn-sm btn-success" onClick="showImage('{{$article->cover}}');">Cover</button></center></td>
                        <td><center> {{$article->created_at->format('d-m-Y')}} </center></td>
                        <td>
                        <center>
                            <button type="button" class="btn btn-primary" 
                                data-toggle="modal" data-target="#detailArticle{{ $article->id }}">
                                Detail
                            </button>  
                        </center></td>
                        <td><center> 
                          @if ($article->status == 'published')
                            <span class="label label-success">Published</span>
                          @else
                            <span class="label label-warning">Archived</span>
                          @endif 
                        </center></td>
                        <td><center>
                            <a href="{{Help::url('article/'.$article->id.'/edit')}}" class="fa fa-pencil"></a>
                            <a href="javascript:void(0)" class="fa fa-trash" onclick="deleteArticle('{{$article->id}}')"></a>
                        </center></td>
                    </tr>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailArticle{{ $article->id }}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Content Article : {{$article->title}}</h4>
                                </div>
                                <div class="modal-body">
                                    <b style="font-size: 15px;">Categories : {{$article->categories}}</b>
                                    <hr>
                                    {!! $article->description !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection

@section('js')
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">
    function showDetail() {
        $('#detailArticle').modal('show');
    }
    function showImage(cover){
      bootbox.dialog({
        message: '<img src="{{asset('backend/images/article')}}/'+cover+'" class="img-responsive" style="height:250px; width:350px;">',
        closeButton: true,
        size: 'small'
      });
    }
    function deleteArticle(id){
        bootbox.confirm("Are you sure to delete this article ?", function(result){
            if (result) {
                $('#formDelete').attr('action', '{{Help::url('article')}}/'+id);
                $('#formDelete').submit();
            }
        });
    }
    </script>
@endsection
