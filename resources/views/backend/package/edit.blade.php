@extends('backend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
@endsection

@section('content')
<div class="right_col" role="main">
        <div class="">
            @if (session('message'))
                <div class="alert alert-success" style="margin-top: 75px; margin-bot: -50px">
                    {{ session('message') }}
                </div>
            @endif
            
            <div class="page-title">
                <div class="title_left">
                <h3>Edit Paket</h3>
                </div>
            </div>

            <div class="x_panel">
                <div class="x_content">

                    <form id="demo-form" method="POST" novalidate action="{{ Help::url('package/'.$package->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">
                        <label for="nama_paket">Nama Paket :</label> <span class="red">{{ $errors->first('nama') }}</span>
                        <input type="text" id="nama_paket" class="form-control" 
                            name="nama" required="" placeholder="Masukkan Nama Paket..."
                            value="{{ $package->nama }}">
                        <br>

                        <label for="price">Harga (Per Orang) :</label> <span class="red">{{ $errors->first('price') }}</span>
                        <input type="number" id="price" class="form-control"
                            name="price" required="" placeholder="Masukkan Harga..."
                            value="{{ $package->price }}">
                        <br>

                        <label for="detail">Detail</label>
                        <textarea class="form-control" id="detail" name="detail">{{ $package->detail }}</textarea>
                        <br>

                        <button class="btn btn-success" type="submit">Perbarui</button>
                    </form>
                    
                </div>
                </div>

            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('backend/plugins/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('backend/plugins/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
    tinymce.init({
            selector: "#detail",
            plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
            ],

            toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor | inserttime preview | forecolor backcolor",
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
            ]
    });
    </script>
@endsection