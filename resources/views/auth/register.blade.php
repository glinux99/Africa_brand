@extends('layouts.auth')
@section('content')
<header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1">
        <div class="container">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="https://demo.activeitzone.com/ecommerce">
                        <img src="{{asset('uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png')}}" alt="@lang('Africa Brand  commerce')" class="mw-100 h-30px h-md-40px" height="40">
                    </a>

                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="https://demo.activeitzone.com/ecommerce/search" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control" id="search" name="keyword" placeholder="I am shopping for..." autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary" type="submit">
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
                        <a href="https://demo.activeitzone.com/ecommerce/compare" class="d-flex align-items-center text-reset">
                            <i class="la la-refresh la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
                                <span class="badge badge-primary badge-inline badge-pill">0</span>
                                <span class="nav-box-text d-none d-xl-block opacity-70">Compare</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        <a href="https://demo.activeitzone.com/ecommerce/wishlists" class="d-flex align-items-center text-reset">
                            <i class="la la-heart-o la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
                                <span class="badge badge-primary badge-inline badge-pill">0</span>
                                <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                            <i class="la la-shopping-cart la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
                                <span class="badge badge-primary badge-inline badge-pill cart-count">0</span>
                                <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                            <div class="text-center p-3">
                                <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                <h3 class="h6 fw-700">Your Cart is empty</h3>
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
<div class="container">
    <div class="row align-items-center justify-content-center my-5">
        <div class="col-md-5">
            <div class="card pt-2 px-5 form-contact shadow rounded-custom">

                <a href="/" class="mb-4 d-block d-flex justify-content-center">
                    <img src="{{ asset('assets/img/logo.png')}}" alt="logo" class="m-0 p-0 img-fluid rounded-custom shadow logo-white" style="width: 5rem;">
                </a>
                <h3 class="text-center text-primary">@lang('Creer un compte')</h3>
                <form method="POST" action="{{ route('register.client') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="name" class="mb-1">@lang('Noms') <span class="text-danger">*</span></label>
                            <div class="mb-3 pinput_container">
                                <input id="name" type="text" class="form-control m-0 p-0 @error('name') is-invalid @enderror" name="name" autofocus>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="mb-1">@lang('Email') <span class="text-danger">*</span></label>
                            <div class="pinput_container mb-3">
                                <input id="email" type="email" class="form-control  m-0 p-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="mb-1">
                                @lang('Numero Tel') <span class="text-danger">*</span></label>
                            <div class="pinput_container mb-3">
                                <input type="number" class="form-control m-0 p-0" name="numero" placeholder="" required="" autofocus="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="password" class="mb-1">
                                @lang('Mot de passe') <span class="text-danger">*</span></label>
                            <div class="pinput_container mb-3">
                                <input id="password" type="password" class="form-control  m-0 p-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="password" class="mb-1">
                                @lang('Confirmez le mot de passe') <span class="text-danger">*</span></label>
                            <div class="pinput_container mb-3">
                                <input id="password-confirm" type="password" class="form-control  m-0 p-0" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row d-flex">
                                <div class="col-1 align-self-center form-check my-0 py-1">
                                    <input class="form-check-input m-0 p-0" type="checkbox" name="notificable" id="remember">
                                </div>
                                <div class="col-10 align-self-center">
                                    <label class="form-check-label m-0 p-0 text-primary" for="remember">
                                        @lang('Acceptez de recevoir les notifications et les bonus lie a votre compte')
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary my-5 rounded">@lang('S\'incrire')</button>
                        </div>
                    </div>
                    <div class="action-btns">
                        <a href="" class="btn rounded bg-primary shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                            <img src="{{ asset('assets/img/google-icon.svg')}}" alt="google" class="mr-3">
                            <span>@lang('S\'inscrire avec Google')</span>
                        </a>
                    </div>
                    <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace mb-3">@lang("Vous avez déjà un compte?")
                        <a href="{{ route('login')}}" class="text-decoration-none">@lang('Se connecter')</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
