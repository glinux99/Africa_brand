<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="app-url" content="/">
    <meta name="file-base-url" content="public/">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/ico.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css')}}">
    <link href="{{asset('assets/selected2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <style>
        body {
            font-size: 12px;
        }
    </style>
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected2',
            nothing_found: 'Nothing found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

</head>

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">
        <!-- Header -->
        <!--  Publicite en haut
            <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
            <a href="#" class="d-block text-reset">
                <img src="{{asset('uploads/all/wVBJyFdkAaUHvGWhWklqZJ3ch8FYRchFcKCea1DH.png')}}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
            </a>
            <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
                <i class="la la-close la-2x"></i>
            </button>
        </div> -->
        <!-- Top Bar -->
        <div class="top-navbar bg-white border-bottom border-soft-secondary z-1035">
            <div class="container ">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end social">
                    <li class="list-inline-item mr-3  pr-3 pl-0 ">
                        <a href="{{ Session('config')->facebook ?? '' }}" class="soc text-reset d-inline-block opacity-60 py-2">
                            <i class="la la-facebook la-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3  pr-3 pl-0">
                        <a href="{{ (Session('config')->twitter) ?? '' }}" class="soc twitter text-reset d-inline-block opacity-60 py-2">
                            <i class="la la-twitter la-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3  pr-3 pl-0">
                        <a href="{{ (Session('config')->twitter) ?? '' }}" class="soc linkedin text-reset d-inline-block opacity-60 py-2">
                            <i class="la la-linkedin la-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3  pr-3 pl-0">
                        <a href="https://wa.me/{{ Session('config')->whatsapp ?? '' }}" class="soc whatsapp text-reset d-inline-block opacity-60 py-2">
                            <i class="la la-instagram la-lg"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3 pr-3 pl-0">
                        <a href="tel:+243 970 912 428" class="text-reset d-inline-block py-2">
                            <span class="mr-3 fw-700 opacity-70">@lang('Appel')</span>
                            <span class="opacity-60">{{ Session('config')->numeropv ?? '' }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Top Bar -->
        <header class="sticky-top  z-1020 bg-white border-bottom shadow-md ">
            <div class="position-relative logo-bar-area z-1 bg-danger">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-dark d-flex align-items-center">
                            <div class="pl-md-5 col-md-3 col-lg-3 col-5 pl-3 pr-5 bg-white logo-menu  d-flex align-items-center">
                                <a class="d-block py-10px" href="/">
                                    <img src="{{asset('assets/img/logo.png')}}" alt="@lang('Africa Brand  commerce')" class="mw-100 h-30px h-md-40px" height="40">
                                </a>
                                <div>
                                    @lang("AFRICAN BRAND")
                                </div>
                            </div>
                            <div class="col-md-8 text-white border-gray-200 py-1 d-none d-lg-block">
                                <div class="container">
                                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                                        <li class="list-inline-item mr-0 ">
                                            <a href="{{ route('index')}}" class="text-menu-hover-parent opacity-100 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("Acceuil")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="{{ route('home.produit')}}" class=" text-menu-hover-parent opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("Produits")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="{{ route('categories.all')}}" class="text-menu-hover-parent opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("Categorie")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="{{ route('news.all')}}" class="text-menu-hover-parent opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("Blog")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="{{ route('apropos')}}" class="text-menu-hover-parent opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("A propos")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a href="{{ route('contact')}}" class="text-menu-hover-parent opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                                @lang("Contact")
                                                <span class="text-menu-hover"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 text-white count-class" @if (Session('cart-count')) id="charriot-link" @endif>
                                <div class="nav-cart-box dropdown dropleft h-100" id="cart_items">
                                    <a href="javascript:void(0)" class="d-flex text-white align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                                        <i class="la la-shopping-cart la-3x opacity-80"></i>
                                        <span class="flex-grow-1 ml-1">
                                            <span class="badge badge-primary badge-inline badge-pill cart-count" id="cart-count">@if (Auth::user())
                                                {{ Session('cart-count')?? '0'}}
                                                @else
                                                0
                                                @endif</span>
                                        </span>
                                    </a>
                                    @if (!Session('cart-count'))
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-md p-0 stop-propagation">
                                        <div class="text-center p-3">
                                            <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                            <h3 class="h6 fw-700">@lang('Votre charriot est vide')</h3>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.modal')
        @yield('content')
        @include('sweetalert::alert')
        <section class="bg-dark py-5 text-light footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block d-md-block text-center text-md-left">
                        <div class="mt-4">
                            <a href="{{ route('index')}}" class="d-block">
                                <img class="lazyload" src="{{ asset('assets/img/logo.png')}}" alt="Africa Brand" height="44">
                            </a>
                            <div class="my-3">
                                <span style="color: rgb(242, 243, 248); font-family: 'Open Sans', sans-serif; background-color: rgb(17, 23, 35);">@lang('Africa brand E-commerce System')</span>
                            </div>
                            <div class="d-inline-block d-md-block mb-4">
                                <form class="form-inline" method="POST" action="#">
                                    @csrf
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control" placeholder="@lang('votre adresse email')" name="email" required>
                                        <button type="submit" class="btn text-white" style="background-color: #6c757d;">
                                            @lang('s\'abonner')
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="w-300px mw-100 mx-auto mx-md-0">
                                <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                                    <img src="{{ asset('assets/img/app.png')}}" class="mx-100 h-60px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 ml-auto col-md-4 mr-0">
                        <div class="text-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang("Contact")
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang("Adresse")</span>
                                    <span class="d-block opacity-70"> {{ Session('config')->adresse ?? 'Goma, Centre ville'}}</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang("Telephone")</span>
                                    <span class="d-block opacity-70">{{ Session('config')->numeropv ?? '+243970912428'}}</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang('Email:')</span>
                                    <span class="d-block opacity-70">
                                        <a href="mailto:{{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}" class="text-white">{{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 col-md-4">
                        <div class="text-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang('Liens rapides')
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang('Aides')
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Support")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('contact')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Joignez-nous")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('contact')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Contactez-nous")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Nos partenaires")
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12  col-lg-2 row ">
                        <div class="text-left mt-4 col-md-12 col-6  col-lg-12 m-0 p-0">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang('Mon compte')
                            </h4>
                            <ul class="list-unstyled">
                                @if (Auth::check())
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('profile')}}">
                                        @lang('Profile')
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('produit.comande.buy')}}">
                                        @lang('Mes achats')
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('produit.comande.index')}}">
                                        @lang("Commandes")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('login')}}">
                                        @lang('Se connecter')
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="text-left mt-4 col-md-12 col-6 col-lg-12 m-0 p-0">
                            <a href="{{ route('register')}}" class="text-white">
                                <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                    @lang("Devenir un client")
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="text-center text-md-left opacity-40" current-verison="1.0.1">
                            © @php
                            echo Date('Y')
                            @endphp @lang("Africa Brand ")| @lang("Limited. All Rights Reserved.") <br>
                            @lang("propulse par") <a href="http://subnetcongo.com" target="_blank" rel="noopener noreferrer" class="text-white">
                                subnetCongo
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline my-3 my-md-0 social text-center">
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->facebook  ?? ''}}" target="_blank" class="facebook soc text-reset d-inline-block opacity-60 py-2"><i class="soc lab la-facebook text-white la-lg opacity-50"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->twitter ?? '' }}" target="_blank" class="twitter soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-twitter text-white la-lg opacity-50"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->instragrame ?? '' }}" target="_blank" class="instagram soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-instagram text-white la-lg opacity-50"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->youtube ?? ''}}" target="_blank" class="youtube soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-youtube text-white la-lg opacity-50"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->lindin ?? ''}}" target="_blank" class="linkedin soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-linkedin-in text-white la-lg opacity-50"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ Session('config')->lindin ?? ''}}" target="_blank" class="whatsapp soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-whatsapp text-white la-lg opacity-60"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-inline mb-0">
                                <a href="" class="text-white">
                                    <span class="text-center text-md-left opacity-40">
                                        @lang("Terms & Condition | Cookie Policy")
                                    </span>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
            <div class="row align-items-center gutters-5">
                <div class="col">
                    <a href="{{route('index')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-home fs-20 opacity-60 opacity-100 text-success"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('apropos')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-info-circle fs-20 opacity-60 "></i>
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('categories.all')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-list-ul fs-20 opacity-60 "></i>

                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('home.produit')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="align-items-center bg-success border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                            <i class="las la-shopping-bag la-2x text-white"></i>
                        </span>

                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('news.all')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-globe fs-20 opacity-60 "></i>
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('contact')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-phone fs-20 opacity-60 "></i>
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ route('profile')}}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            <img src="{{ Session('picprofile')}}" class="rounded-circle size-20px">
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="aiz-cookie-alert shadow-xl">
        <div class="p-3 bg-dark rounded">
            <div class="text-white mb-3">
                <p>@lang("Nous utilisons des cookies pour une meilleure expérience utilisateur, consultez notre politique") <a href="#">@lang("Ici")</a>&nbsp;</p>
            </div>
            <button class="btn btn-success aiz-cookie-accept">
                @lang("D'accord. J'ai compris")
            </button>
        </div>
    </div>

    <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
        <div class="absolute-full bg-black opacity-60"></div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
            <div class="modal-content position-relative border-0 rounded-0">
                <div class="aiz-editor-data">
                    <p><img src="{{asset('assets/img/mailbox2.jpg')}}" style="width: 100%;"></p>
                    <p style="text-align: center; "><br></p>
                    <h2 style="text-align: center; "><b>@lang("Abonnez-vous à notre newsletter")</b></h2>
                    <p style="text-align: center;">@lang("Abonnez-vous à notre newsletter pour un coupon, une offre et une réduction promotionnelle passionnante..")</p>
                </div>
                <div class="pb-5 pt-4 px-5">
                    <form class="" method="POST" action="/subscribers">
                        @csrf
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="@lang('Your Email Address')" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-3">
                            @lang("Abonnez-vous maintenant")
                        </button>
                    </form>
                </div>
                <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                    <i class="la la-close fs-20"></i>
                </button>
            </div>
        </div>
    </div>

    <button data-toggle="modal" data-target="#addcart" id="charriotMod" hidden></button>
    <button data-toggle="modal" data-target="#edit-address-modal" id="adresseModal" hidden></button>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.session.min.js')}}"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>
    <script>
        $(document).ready(function($) {
            $('#charriot-link, chariot-class').click(function() {
                location.href = "{{ route('produit.cart.all')}}";
            });
            $('.charriot').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $urls = "{{ route('produit.details.post')}}";
                // ajax
                $('#addToCart-modal-body').html(null);
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: $urls,
                    data: {
                        id: $(this).attr('data-id')
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res.images[0].id);
                        $('#charriotMod').trigger('click');
                        $('.c-preloader').hide();
                        $('.images-res').empty();
                        $('.images-res-tumb').empty();
                        $('.title-details').empty();
                        $('.images-res').append(`
                             <div class="carousel-box img-zoom rounded">
                                                    <img class="img-fit lazyload w-100" src="" data-src="/storage/` + res.images[0].images + `" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                </div>
                            `);
                        $('.images-res-tumb').append(`
                            <div class="carousel-box c-pointer border p-1 rounded">
                                                    <img class="lazyload mw-100 size-50px mx-auto" src="/storage/` + res.images[0].images + `" data-src="/storage/` + res.images[0].images + `" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                </div>
                            `);
                        var id = res.produit.id;
                        $('#link-chariot').attr('href', `/charriot/` + id);
                        $('.title-details').text(res.produit.name);
                        $('#modal-in').attr({
                            'value': res.produit.qte_min,
                            'min': res.produit.qte_min
                        });

                        $('#addcart-modal').attr('data-id', id);
                    }
                });
            });
            $('#addcart-modal').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let urls = "{{ route('produit.cart.add')}}";
                $.ajax({
                    type: "POST",
                    url: urls,
                    data: {
                        id: $(this).attr('data-id'),
                        produit_id: $(this).attr('data-id'),
                        users_id: "@auth {{ Auth::user()->id}} @endauth",
                        qte: $('#modal-in').val()
                    },
                    dataType: 'json',
                    success: function(res) {
                        charriotProd();
                        console.log(res.count);
                        $('#charriotMod').trigger('click');
                        $('#cart-count').text(res.count);
                        // Bug a resoudre svp
                        // $('.count-class').addClass('bg-danger chariot-class');
                        // if (res.reload) location.reload();
                    }
                });
            });
            $('.editChart').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let urls = "{{ route('adresse.edit')}}";
                $.ajax({
                    type: "POST",
                    url: urls,
                    data: {
                        id: $(this).attr('data-id')
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res.adresse)
                        $('#adresseModal').trigger('click');
                        $('#adresse').val(res.adresse);
                        $('#email').val(res.email);
                        $('#pays').val(res.pays);
                        $('#ville').val(res.ville);
                        $('#code_postal').val(res.code_postal);
                        $('#numero').val(res.numero);
                        $('#Adresse_id').val(res.id);
                    }
                });
            });
        });

        function charriotProd() {
            AIZ.plugins.notify('light', "Le produit a ete ajoute avec success!!!");
        }

        function charriotCom() {
            AIZ.plugins.notify('light', "Votre commande a ete envoyer avec success!!!");
        }

        function showAddToCartModal(id) {
            alert(1);
            // if (!$('#modal-size').hasClass('modal-lg')) {
            //     $('#modal-size').addClass('modal-lg');
            // }
            // $('#addToCart-modal-body').html(null);
            // $('#addToCart').modal();
            // $('.c-preloader').show();
            // $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', {
            //     _token: AIZ.data.csrf,
            //     id: id
            // }, function(data) {
            //     $('.c-preloader').hide();
            //     $('#addToCart-modal-body').html(data);
            //     AIZ.plugins.slickCarousel();
            //     AIZ.plugins.zoom();
            //     AIZ.extra.plusMinus();
            //     getVariantPrice();
            // });
        }
    </script>
    <!-- SCRIPTS -->
    <script src="{{asset('public/assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/aiz-core.js')}}"></script>



    <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v3.3'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="">
    </div>

    <script>
    </script>

    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('/category/nav-element-list', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('/language', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('/currency', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('/ajax-search', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('/cart/removeFromCart', {
                _token: AIZ.data.csrf,
                id: key
            }, function(data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('/compare/addToCompare', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function connectedOnly() {
            AIZ.plugins.notify('warning', "Connectez-vous en premier lieu svp");
        }

        function likeproduct() {
            AIZ.plugins.notify('dark', "Merci d'avoir aimer notre produit");
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('/cart/show-cart-modal', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });


        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        AIZ.extra.plusMinus();
                        AIZ.plugins.slickCarousel();
                        updateNavCart(data.nav_cart_view, data.cart_count);
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow() {
            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("/cart");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $.post('/home/section/featured', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('/home/section/best_selling', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('/home/section/auction_products', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('/home/section/home_categories', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('/home/section/best_sellers', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>

    <script src="{{ asset('assets/js/vendors.js')}}"></script>
    <script src="{{ asset('assets/js/aiz-core.js')}}"></script>

</body>

</html>
