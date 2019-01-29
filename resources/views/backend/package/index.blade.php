@extends('backend.layouts.app',['activeMenu' => 'packages'])

@section('css')
    <link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
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
                <h2>Data Package</h2>
                <div class="clearfix"></div>
                </div>
                <a href="{{ Help::url('package/create') }}" class="btn btn-primary">Add Package</a>
                <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="25px"><center>No</center></th>
                        <th><center>Name</center></th>
                        <th><center>Price</center></th>
                        <th><center>Detail</center></th>
                        <th><center>Opsi</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($packages as $package)
                        <tr>
                            <td><center> {{ $no++ }} </center></td>
                            <td><center> {{ $package->nama }} </center></td>
                            <td><center> {{ $package->price }} </center></td>
                            <td>
                                <center>
                                        <button type="button" class="btn btn-success" 
                                            data-toggle="modal" data-target="#detailPackageModal{{ $package->id }}">
                                            Show Detail
                                        </button>
                                </center>
                            </td>
                            <td>
                                <center> 
                                    <a href="{{ Help::url('package/'.$package->id.'/edit') }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil mr-2"></i> Edit </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="deletePackage({{ $package->id }}, '{{ $package->nama }}')"><i class="fa fa-trash"></i> Delete</a>
                                </center>
                            </td>
                        </tr>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailPackageModal{{ $package->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                    
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    {!! $package->detail !!}
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
    <!-- /page content -->
@endsection

@section('js')
    <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}"></script>
    <script>
        function showDetail() {
            $('#packageDetailModal').modal('show');
        }
        function deletePackage(id, nama) {
            bootbox.confirm('Apakah anda ingin menghapus paket '+nama+' ?', function(result){
                if (result) {
                    $('#formDelete').attr('action', '{{Help::url('package')}}/'+id);
                    $('#formDelete').submit();
                }
            });
        }
    </script>
@endsection