<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>FarmHerds</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">--}}
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
{{--    <meta name="msapplication-TileImage" content="{{}}">--}}
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" />
</head>

<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
{{$slot}}



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/is/is.min.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
<link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>
