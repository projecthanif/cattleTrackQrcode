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
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet"/>
</head>

<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85"
         data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="d-inline-block align-top img-fluid" src="{{asset('assets/img/gallery/logo-icon.png')}}"
                     alt="" width="50"/>
                <span class="text-theme font-monospace fs-4 ps-2">FarmHerds</span>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 d-lg-flex justify-content-end"
                 id="navbarSupportedContent">
                <a href="/farmHerd" class="d-flex justify-content-end">
                    <button class="btn btn-lg btn-dark bg-gradient order-0" type="submit">Sign Up</button>
                </a>
            </div>
        </div>
    </nav>


    <section class="py-5 mt-5" id="Features">
        <div class="bg-holder d-none d-sm-block"
             style="background-image:url({{ asset('assets/img/illustrations/bg.png') }});background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center mb-3">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Cattle Record</h5>
                    <p class="mb-5">Manage Your Herd with Ease: Introducing QR Code Cattle Identification.</p>
                </div>
            </div>
            <div class="row  h-100">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="card shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                            <div class="text-center text-md-start card-hover">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around flex-wrap">
                                        <p class="">
                                            <span class="fw-bold fs-1 text-dark">Farmer's name: </span>
                                            {{$farmer}}
                                        </p>
                                        <p class="">
                                            <span class="fw-bold fs-1 text-dark">Breed: </span>
                                            {{$cattle->breed}}
                                        </p>
                                        <p class="">
                                            <span class="fw-bold fs-1 text-dark">Origin: </span>
                                            {{$cattle->origin}}
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-around flex-wrap">
                                        <p class="">
                                            <span class="fw-bold fs-1 text-dark">Date of birth: </span>
                                            {{$dob}}
                                        </p>
                                        <p class="">
                                            <span class="fw-bold fs-1 text-dark">Last Immunization Date: </span>
                                            {{$immunization_date}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-3" id="invest">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center mb-3">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Cattle Health Record</h5>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Medication</th>
                        <th>Dosage</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $sn = 0;
                    @endphp
                    @foreach($table as $set)
                        <tr>
                            <td>{{++$sn}}</td>
                            <td>{{$set->medication}}</td>
                            <td>{{$set->dosage}}</td>
                            <td>{{$set->description}}</td>
                            <td>{{$set->date}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


{{--    @include('components.footer')--}}
</main><!-- ===============================================-->
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
