<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt">
    <meta name="app-url" content="//demo.activeitzone.com/ecommerce/">
    <meta name="file-base-url" content="//demo.activeitzone.com/ecommerce/public/">

    <title>@lang("Africa Brand ") | @lang("Acceuil")</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@lang('Africa brand acceuil')" />
    <meta name="keywords" content="">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="@lang('Africa Brand  commerce')">
    <meta itemprop="description" content="@lang('Africa Brand  commerce')">
    <meta itemprop="image" content="">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@linux99">
    <meta name="twitter:title" content="@lang('Africa Brand  commerce')">
    <meta name="twitter:description" content="@lang('Africa Brand  commerce')">
    <meta name="twitter:creator" content="@linux99">
    <meta name="twitter:image" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="@lang('Africa Brand  commerce')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/')}}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="@lang('Africa Brand  commerce')S" />
    <meta property="og:site_name" content="@lang('Africa Brand  commerce')" />
    <meta property="fb:app_id" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('uploads/all/4xnLnzEeu3dFKDGSBMlvLXPLGXFdHEkvqBSZREmO.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aiz-core.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css')}}">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <li class="list-inline-item dropdown mr-3" id="lang-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2" data-toggle="dropdown" data-display="static">
                                    <img src="{{asset('assets/img/placeholder.jpg')}}" data-src="{{ asset('assets/img/flags/en.png')}}" class="mr-2 lazyload" alt="English" height="11">
                                    <span class="opacity-60">@lang("Anglais")</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="{{asset('assets/img/placeholder.jpg')}}" data-src="{{ asset('assets/img/flags/en.png')}}" class="mr-1 lazyload" alt="English" height="11">
                                            <span class="language">@lang("Anglais")</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="{{asset('assets/img/placeholder.jpg')}}" data-src="{{ asset('assets/img/flags/fr.png')}}" class="mr-1 lazyload" alt="Bangla" height="11">
                                            <span class="language">@lang("Francais")</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-5 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="tel:+243 970 912 428" class="text-reset d-inline-block opacity-60 py-2">
                                    <i class="la la-phone"></i>
                                    <span>@lang('Ligne d\'aide')</span>
                                    <span>+243 970 912 428</span>
                                </a>
                            </li>
                            @if(Auth::user())
                            <div class="aiz-topbar-item ml-2">
                                <div class="align-items-stretch d-flex dropdown">
                                    <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                        <span class="d-flex align-items-center">
                                            <span class="avatar avatar-sm mr-md-2">
                                                <img src="{{ asset(Session('picprofile'))}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                                            </span>
                                            <span class="d-none d-md-block">
                                                <span class="d-block fw-500">{{ Auth::user()->name }}</span>
                                                <span class="d-block small opacity-60 text-center">{{ auth()->user()->getRoleNames()->first()}}</span>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                        <a href="{{ route('profile')}}" class="dropdown-item">
                                            <i class="las la-user-circle"></i>
                                            <span>@lang("Profile")</span>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            <i class="las la-sign-out-alt"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </div>
                            </div><!-- .aiz-topbar-item -->
                            @else
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('login')}}" class="text-reset d-inline-block opacity-60 py-2">@lang("Se connecter")</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('register')}}" class="text-reset d-inline-block opacity-60 py-2">@lang("Enregistrement")</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Top Bar -->
        <header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
            <div class="position-relative logo-bar-area z-1">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="https://demo.activeitzone.com/ecommerce">
                                <img src="{{asset('assets/img/logo.png')}}" alt="@lang('Africa Brand  commerce')" class="mw-100 h-30px h-md-40px" height="40">
                            </a>

                            <div>
                                @lang("AFRICA BRAND")
                            </div>
                        </div>
                        <div class="d-lg-none ml-auto mr-0 d-none">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>

                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                            <div class="position-relative flex-grow-1">
                                <form action="h#" method="GET" class="stop-propagation d-none">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="border-0 border-lg form-control" id="search" name="keyword" placeholder="I am shopping for..." autocomplete="off">
                                            <div class="input-group-append d-none d-lg-block">
                                                <button class="btn btn-success" type="submit">
                                                    <i class="la la-search la-flip-horizontal fs-18"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">

                                    </div>
                                    <div id="search-content" class="text-left">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="#" class="d-flex align-items-center text-reset">
                                    <i class="la la-refresh la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-success badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">@lang("Comparer")</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="#" class="d-flex align-items-center text-reset">
                                    <i class="la la-heart-o la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-success badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">@lang("Souhaits")</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items">
                                <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                                    <i class="la la-shopping-cart la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-success badge-inline badge-pill cart-count">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">@lang("Chariot")</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                                    <div class="text-center p-3">
                                        <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                        <h3 class="h6 fw-700">@lang("Votre chariot est vide")</h3>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-white border-top border-gray-200 py-1">
                <div class="container">
                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('index')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Acceuil")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('offre')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Offre du Jour")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('blog')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Blogs")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('marque')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Toutes nos marques")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('categorie.all')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Toutes les categories")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('vendeur.all')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang("Tous nos vendeurs")
                            </a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="{{ route('reduction')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                @lang('Reductions')
                            </a>
                        </li>
                    </ul>
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


        @yield('content')

        <section class="bg-dark py-5 text-light footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 text-center text-md-left">
                        <div class="mt-4">
                            <a href="{{ route('index')}}" class="d-block">
                                <img class="lazyload" src="{{ asset('assets/img/logo.png')}}" alt="Africa Brand" height="44">
                            </a>
                            <div class="my-3">
                                <span style="color: rgb(242, 243, 248); font-family: 'Open Sans', sans-serif; background-color: rgb(17, 23, 35);">@lang('Africa brand E-commerce System')</span>
                            </div>
                            <div class="d-inline-block d-md-block mb-4">
                                <form class="form-inline" method="POST" action="#">
                                    <input type="hidden" name="_token" value="zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control" placeholder="@lang('votre adresse email')" name="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">
                                        @lang('s\'abonner')
                                    </button>
                                </form>
                            </div>
                            <div class="w-300px mw-100 mx-auto mx-md-0">
                                <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/play.png" class="mx-100 h-40px">
                                </a>
                                <a href="#" target="_blank" class="d-inline-block">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/app.png" class="mx-100 h-40px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang("Contact")
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang("Adresse")</span>
                                    <span class="d-block opacity-70">Goma</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang("Telephone")</span>
                                    <span class="d-block opacity-70">+243 970 912 428</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">@lang('Email:')</span>
                                    <span class="d-block opacity-70">
                                        <a href="mailto:">genesiskikimba@gmail.com</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="text-center text-md-left mt-4">
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
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Contactez-nous")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        @lang("Joignez-nous")
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang('Mon compte')
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('login')}}">
                                        @lang('Se connecter')
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="#">
                                        @lang("Mes souhaits")
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="#">
                                        @lang('Mes achats')
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-light" href="#">@lang("Devenir un partenaire")</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                @lang("Devenir un vendeur")
                            </h4>
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
                        <div class="text-center text-md-left" current-verison="1.0.1">
                            © @lang("Africa Brand Busness")
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline my-3 my-md-0 social colored text-center">
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe.png" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
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
                        <span class="d-block fs-10 fw-600 opacity-60 opacity-100 fw-600">@lang("Acceuil")</span>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce/categories" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-list-ul fs-20 opacity-60 "></i>
                        <span class="d-block fs-10 fw-600 opacity-60 ">@lang("Categories")</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="https://demo.activeitzone.com/ecommerce/cart" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="align-items-center bg-success border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                            <i class="las la-shopping-bag la-2x text-white"></i>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                            Cart
                            (<span class="cart-count">0</span>)
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce/all-notifications" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-bell fs-20 opacity-60 "></i>
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce/users/login" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png" class="rounded-circle size-20px">
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">Account</span>
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
                    <p><img src="{{asset('uploads/all/dwaK3um8tkVgEsgmZN1peQb844tFRAIQ1wAS8e3z.png')}}" style="width: 100%;"></p>
                    <p style="text-align: center; "><br></p>
                    <h2 style="text-align: center; "><b>@lang("Abonnez-vous à notre newsletter")</b></h2>
                    <p style="text-align: center;">@lang("Abonnez-vous à notre newsletter pour un coupon, une offre et une réduction promotionnelle passionnante..")</p>
                </div>
                <div class="pb-5 pt-4 px-5">
                    <form class="" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                        <input type="hidden" name="_token" value="zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="@lang('Your Email Address')" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-3">
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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>@lang("Supprimer le message de confirmation")</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang("Annuler")</button>
                    <a id="delete_link" class="btn btn-danger btn-ok">@lang("Supprimer")</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>


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
                        $.post('https://demo.activeitzone.com/ecommerce/category/nav-element-list', {
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
                        $.post('https://demo.activeitzone.com/ecommerce/language', {
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
                        $.post('https://demo.activeitzone.com/ecommerce/currency', {
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
                $.post('https://demo.activeitzone.com/ecommerce/ajax-search', {
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
            $.post('https://demo.activeitzone.com/ecommerce/cart/removeFromCart', {
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
            $.post('https://demo.activeitzone.com/ecommerce/compare/addToCompare', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            AIZ.plugins.notify('warning', "Please login first");
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', {
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

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/product/variant_price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('.product-gallery-thumb .carousel-box').each(function(i) {
                            if ($(this).data('variation') && data.variation == $(this).data('variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        } else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }

                        AIZ.extra.plusMinus();
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
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
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("https://demo.activeitzone.com/ecommerce/cart");
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
            $.post('https://demo.activeitzone.com/ecommerce/home/section/featured', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('https://demo.activeitzone.com/ecommerce/home/section/best_selling', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('https://demo.activeitzone.com/ecommerce/home/section/auction_products', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('https://demo.activeitzone.com/ecommerce/home/section/home_categories', {
                _token: 'zRebXLF17zvMVZMSBH25YrFFgmb0gmz607tgEyPt'
            }, function(data) {
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('https://demo.activeitzone.com/ecommerce/home/section/best_sellers', {
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
