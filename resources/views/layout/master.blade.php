<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">

    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate.css')}}" rel="stylesheet">
    <link href="{{asset('lib/selectric/selectric.css')}}" rel="stylesheet">
    <link href="{{asset('lib/swiper/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Magnific-Popup/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('lib/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('lib/photoswipe/default-skin/default-skin.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('lib/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('lib/popper.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/selectric/jquery.selectric.js')}}"></script>
    <script src="{{asset('lib/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('lib/swiper/js/swiper.js')}}"></script>
    <script src="{{asset('lib/aos/aos.js')}}"></script>
    <script src="{{asset('lib/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('lib/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('lib/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('lib/sticky-sidebar/ResizeSensor.min.js')}}"></script>
    <script src="{{asset('lib/sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('lib/sidr/jquery.sidr.min.js')}}"></script>
    <script src="{{asset('lib/lib.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }</style>

</head>

@yield('body')

</html>
