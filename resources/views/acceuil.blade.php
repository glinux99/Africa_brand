@extends('layouts.page')
@section('content')
<div class="home-banner-area mb-4 pt-3">
    <div class="container">
        <div class="row gutters-10 position-relative">
            <div class="col-lg-3 position-static d-none d-lg-block">
                <div class="aiz-category-menu bg-white rounded  shadow-sm">
                    <div class="p-3 bg-soft-success d-none d-lg-block rounded-top all-category position-relative text-left">
                        <span class="fw-600 fs-16 mr-3">@lang('Categories')</span>
                        <a href="#" class="text-reset">
                            <span class="d-none d-lg-inline-block">@lang('Voir tout')</span>
                        </a>
                    </div>
                    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                        @foreach ($categories as $categorie)
                        <li class="category-nav-element" data-id="1">
                            <a href="#" class="text-truncate text-reset py-2 px-3 d-block">
                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.jpg')}}" width="16" alt="Women Clothing &amp; Fashion" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                <span class="cat-name">{{ $categorie->categorie }}</span>
                            </a>
                            <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class=" col-lg-7 ">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                    <!-- Images centrales -->
                    @foreach ($imagesCenter as $image)
                    <div class="carousel-box">
                        <a href="#">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden" src="{{ asset('storage/'.$image->images)}}" alt="Africa brand" height="315" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    @endforeach
                </div>
                <ul class="list-unstyled mb-0 row gutters-5">
                    <!-- Images en bas de  l image centrale -->
                    @foreach ($imagesBottom as $image)
                    <li class="minw-0 col-4 col-md mt-3">
                        <a href="#" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                            <img src="{{asset('storage/'.$image->image1)}}" alt="Women Clothing &amp; Fashion" class="lazyload img-fit" height="78" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg';">
                            <div class="text-truncate fs-12 fw-600 mt-2 opacity-70 text-center">{{$image->categorie}}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-2 order-3 mt-3 mt-lg-0">
                <div class="bg-white rounded shadow-sm">
                    <div class="bg-soft-success rounded-top p-3 d-flex align-items-center justify-content-center">
                        <span class="fw-600 fs-16 mr-2 text-truncate">
                            @lang('Ventes/24h')
                        </span>
                        <span class="badge badge-success badge-inline">@lang('Chaud')</span>
                    </div>
                    <div class="c-scrollbar-light overflow-auto h-lg-400px p-2 bg-success rounded-bottom">
                        <div class="gutters-5 lg-no-gutters row row-cols-2 row-cols-lg-1">
                            @for ($x=0; $x<3;$x++) <div class="col mb-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/FIFA-22-Standard---PC-Online-Game-Code-22545" class="d-block p-2 text-reset bg-white h-100 rounded">
                                    <div class="row gutters-5 align-items-center">
                                        <div class="col-xxl">
                                            <div class="img">
                                                <img class="lazyload img-fit h-140px h-lg-80px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/4gmGnYIZhgatZRJsxrhXVW2qO0aoLLdZT8U6qOQE.png" alt="FIFA 22 Standard - PC [Online Game Code]" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                            </div>
                                        </div>
                                        <div class="col-xxl">
                                            <div class="fs-16">
                                                <span class="d-block text-success fw-600">$56.050</span>
                                                <del class="d-block opacity-70">$59.000</del>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>



<div class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <!-- Publicites -->
            @foreach ($imagesPub as $image)
            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="#" class="d-block text-reset">
                        <img src="{{asset('storage/'.$image->images)}}" data-src="" alt="Africa brand" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Nos produits")</span>
                </h3>
                <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2025/01/01 00:00:00"></div>
                <a href="#" class="ml-auto mr-0 btn btn-success btn-sm shadow-md w-100 w-md-auto">@lang("Voir plus")</a>
            </div>

            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- Nos produits -->
                @foreach ($produits as $produit)
                <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        @if((int)$produit->reduction)
                        <span class="badge-custom">OFF<span class="box ml-1 mr-0">{{ $produit->reduction}} %</span></span>
                        @endif
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ asset('storage/'.$produit->image1)}}" data-src="{{ asset('storage/'.$produit->image1)}}" alt="Calvin Klein Women&#039;s Scuba Sleeveless Princess Seamed Sheath Dress" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                            <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                @lang("En vente")
                            </span>
                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                    <i class="las la-sync"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                @php
                                $reduction = ((float)$produit->prix)*((float)$produit->reduction)
                                @endphp
                                @if($reduction)
                                <del class="fw-600 opacity-50 mr-1">
                                    {{ $reduction}}
                                </del>
                                @endif
                                <span class="fw-700 text-success">{{ $produit->prix}}$</span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">{!! $produit->description !!}</a>
                            </h3>
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Cotation")
                                <span class="fw-700 float-right">750</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<div id="section_newest">
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">
                            @lang('Nouveaux produits')
                        </span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($newproduits as $produit)
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            @if((int)$produit->reduction)
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">{{ $produit->reduction}} %</span></span>
                            @endif
                            <div class="position-relative">
                                <a href="#" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ asset('storage/'.$produit->image1)}}" data-src="{{ asset('storage/'.$produit->image1)}}" alt="Africa brand" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(155)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(155)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(155)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    @php
                                    $reduction = ((float)$produit->prix)*((float)$produit->reduction)
                                    @endphp
                                    @if($reduction)
                                    <del class="fw-600 opacity-50 mr-1">
                                        {{ $reduction}}
                                    </del>
                                    @endif
                                    <span class="fw-700 text-success">{{ $produit->prix}}</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">{!! $produit->description !!}}</a>
                                </h3>
                                <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                    @lang('Cotaion')
                                    <span class="fw-700 float-right">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>


<div id="section_featured">

</div>


<div id="section_best_selling">

</div>

<!-- Auction Product -->
<div id="auction_products">

</div>




<div class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <!-- Publicite 2 -->
            @foreach ($imagesPub1 as $image)
            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="#" class="d-block text-reset">
                        <img src="{{asset('storage/'.$image->images)}}" data-src="" alt="Africa brand" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div id="section_home_categories">

</div>


<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Les annonces")</span>
                </h3>
                <a href="https://demo.activeitzone.com/ecommerce/customer-products" class="ml-auto mr-0 btn btn-success btn-sm shadow-md">View More</a>
            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- TOrra en ligne -->
                @foreach ($annonces as $annonce)
                <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="#" data-src="{{ asset('storage/'.$annonce->images)}}" alt="Africa brand" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                            <div class="absolute-top-left pt-2 pl-2">
                                @if ($annonce->status)
                                <span class="badge badge-inline badge-success">@lang('Neuf')</span>
                                @else
                                <span class="badge badge-inline badge-danger">@lang('Use')</span>
                                @endif
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15 mb-1">
                                <span class="fw-700 text-success">{{ $annonce->prix}} $</span>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">{{ $annonce->name}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<div class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            @foreach ($imagesPub2 as $image)
            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="#" class="d-block text-reset">
                        <img src="{{asset('storage/'.$image->images)}}" data-src="" alt="Africa brand" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div id="section_best_sellers">

</div>


<section class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <div class="col-lg-6">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang('Top 10 categories')</span>
                    </h3>
                    <a href="https://demo.activeitzone.com/ecommerce/categories" class="ml-auto mr-0 btn btn-success btn-sm shadow-md">@lang("Toutes les categories")</a>
                </div>
                <div class="row gutters-5">
                    <!-- Categroeies -->
                    @for ($x=0; $x<10;$x++) <div class="col-sm-6">
                        <a href="https://demo.activeitzone.com/ecommerce/category/women-clothing-fashion" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                            <div class="row align-items-center no-gutters">
                                <div class="col-3 text-center">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/1MUCmFKsjx73ETkmjx2DYGo3XgKPBDpr36r1b4OY.png" alt="Women Clothing &amp; Fashion" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </div>
                                <div class="col-7">
                                    <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Women Clothing &amp; Fashion</div>
                                </div>
                                <div class="col-2 text-center">
                                    <i class="la la-angle-right text-success"></i>
                                </div>
                            </div>
                        </a>
                </div>
                @endfor
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Top 10 Marques")</span>
                </h3>
                <a href="https://demo.activeitzone.com/ecommerce/brands" class="ml-auto mr-0 btn btn-success btn-sm shadow-md">@lang("toutes les marques")</a>
            </div>
            <div class="row gutters-5">
                @for ($x=0;$x<10;$x++) <div class="col-sm-6">
                    <a href="https://demo.activeitzone.com/ecommerce/brand/ford" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                        <div class="row align-items-center no-gutters">
                            <div class="col-4 text-center">
                                <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/CVo1G2QVpVtSoZlmCvC0l4hL9WIiWLlTQf6XclMC.jpg" alt="Ford" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </div>
                            <div class="col-6">
                                <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Ford</div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="la la-angle-right text-success"></i>
                            </div>
                        </div>
                    </a>
            </div>
            @endfor
        </div>
    </div>
    </div>
    </div>
</section>

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
                        Contact Info
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-30">Address:</span>
                            <span class="d-block opacity-70">Demo</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Phone:</span>
                            <span class="d-block opacity-70">123456789</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Email:</span>
                            <span class="d-block opacity-70">
                                <a href="/cdn-cgi/l/email-protection#0367666e6c2d667b626e736f6643646e626a6f2d606c6e" class="text-reset"><span class="__cf_email__" data-cfemail="6307060e0c4d061b020e130f0623040e020a0f4d000c0e">[email&#160;protected]</span></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Quick Links
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                Help
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                Support
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                About Us
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                Join Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        My Account
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/users/login">
                                Login
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/purchase_history">
                                Order History
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/wishlists">
                                My Wishlist
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/track-your-order">
                                Track Order
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-light" href="https://demo.activeitzone.com/ecommerce/affiliate">Be an affiliate partner</a>
                        </li>
                    </ul>
                </div>
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Be a Seller
                    </h4>
                    <a href="https://demo.activeitzone.com/ecommerce/shops/create" class="btn btn-success btn-sm shadow-md">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
