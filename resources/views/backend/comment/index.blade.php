@extends('backend.layouts.app', ['activeMenu' => 'comment'])

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
            <h2>Comments</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="25px"><center>No</center></th>
                  <th><center>Article</center></th>
                  <th><center>Name</center></th>
                  <th><center>Comment</center></th>
                  <th><center>Time</center></th>
                  <th><center>Status</center></th>
                  <th><center>Option</center></th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($comments as $comment)
                    <tr>
                        <td><center> {{$no++}} </center></td>
                        <td><center> {{$comment->article->slug}} </center></td>
                        <td><center> {{$comment->name}} </center></td>
                        <td><center> {{$comment->comment}} </center></td>
                        <td><center> {{$comment->created_at->format('d-m-Y')}} </center></td>
                        <td><center> 
                            @if ($comment->status == 'approved')
                                <span class="label label-success">Approved</span>
                            @elseif ($comment->status == 'not_approved')
                                <span class="label label-danger">Not Approved</span>
                            @elseif ($comment->status == 'not_yet')
                                <span class="label label-warning">Not Yet</span>
                            @endif 
                        </center></td>
                        <td><center>
                            @if ($comment->status == 'approved')
                                <button class="btn btn-success btn-sm" disabled>Approved</button>
                            @elseif ($comment->status == 'not_approved')
                                <button class="btn btn-danger btn-sm" disabled>Not Approved</button>
                            @else
                                <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="approve('{{$comment->id}}');">Approve</a> 
                                <a href="javascript:void(0)" class="btn btn-warning btn-sm"  onclick="disApprove('{{$comment->id}}');">Disapprove</a> 
                            @endif
                            <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="deleteComment('{{$comment->id}}');">Delete</a>
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
<form class="hidden" action="" method="post" id="formApprove">
    {{ csrf_field() }}
</form>
<form class="hidden" action="" method="post" id="formNotApprove">
    {{ csrf_field() }}
</form>
@endsection

@section('js')
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">
        function deleteComment(id){
            bootbox.confirm("Do you want to delete this comment ?", function(result){
                if (result) {
                    $('#formDelete').attr('action', '{{Help::url('comment')}}/'+id);
                    $('#formDelete').submit();
                }
            });
        }

        function approve(id){
            bootbox.confirm("Do you want to approve this comment ?", function(result){
                if (result) {
                    $('#formApprove').attr('action', '{{Help::url('comment/approve')}}/'+id);
                    $('#formApprove').submit();
                }
            });
        }

        function disApprove(id){
            bootbox.confirm("Do you want to disapprove this comment ?", function(result){
                if (result) {
                    $('#formNotApprove').attr('action', '{{Help::url('comment/notapprove')}}/'+id);
                    $('#formNotApprove').submit();
                }
            });
        }
    </script>
@endsection
