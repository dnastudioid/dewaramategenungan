<!DOCTYPE html>
<html lang="en">
<head>
<title>Warung Dewa Rama Tegenungan</title>
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/component.css')}}" />
<link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

@yield("css")

</head>
<body>
    @yield("content")
    @include('frontend.layouts.footer')
    @yield("js")
</body>
</html>