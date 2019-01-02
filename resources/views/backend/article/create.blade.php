@extends('backend.layouts.app',['activeMenu' => 'add-article'])

@section('css')
  <link rel="stylesheet" href="{{asset('backend/plugins/select2/dist/css/select2.min.css')}}">
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
        <div class="page-title">
          <div class="title_left">
            <h3>Add New Article</h3>
          </div>
        </div>
          <div class="x_panel">
              <div class="x_content">
                <form role="form" action="{{Help::url('article')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="col-sm-9 col-xs-9">
                              <div class="form-group">
                                  <br>
                                  <label for="">Select Cover</label>
                                  <input type="file" name="cover" id="">
                                  <br>
                              </div>
                          </div>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea name="description" rows="13"></textarea>
                            <br>
                            <br>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Title</label>
                              <input type="text" name="title" id="" class="form-control" placeholder="Type title of article...">
                            </div>
                            <div class="form-group">
                              <label for="">Place</label>
                              <input type="text" name="place" id="" class="form-control" placeholder="Type place...">
                            </div>
                            <div class="form-group">
                              <label>Select Categories</label>
                              <select name="categories[]" class="form-control select2" multiple="multiple" style="width: 100%;" data-placeholder="Select Category">
                                  @foreach ($category as $c)
                                      <option value="{{$c->name}}">{{$c->name}}</option>
                                  @endforeach
                              </select>
                              <h6>Note: Please add some Categories in Sub Article Menu or you can <a href="{{Help::url('article/category')}}" style="color: blue">Click Here!</a> </h6>
                            </div>
                            <input type="submit" name="publish" class="btn btn-primary btn-md" value="Publish">
                            <input type="submit" name="archive" class="btn btn-success btn-md" value="Simpan Draft">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
@endsection
@section('js')
    <script src="{{asset('backend/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/plugins/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('backend/plugins/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
    tinymce.init({
      selector: "textarea",
      plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
      ],

      toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
      toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
      toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
      toolbar_items_size: 'small',

      style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
      ],

      templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
      ],
      
    });
    </script>
    <script>
      $(function (){
        // initialize select2
        $('.select2').select2()
      })
    </script>
@endsection