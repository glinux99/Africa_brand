@extends('layouts.page')
@section('content')
<div class="home-banner-area mb-4 pt-3">
    <div class="mx-3 containerd">
        <div class="row gutters-10 position-relative">
            <div class=" col-lg-9">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                    <!-- Images centrales -->
                    @foreach ($center_img as $image)
                    <div class="carousel-box">
                        <a href="#">
                            <img class="d-block img-fit rounded shadow-sm overflow-hidden" src="{{ asset('storage/'.$image->images)}}" alt="Africa brand" height="400" style="min-width:100%;" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    @endforeach
                </div>
                <ul class="list-unstyled mb-0 row gutters-5">
                    <!-- Images en bas de  l image centrale -->
                    @for ($x=0; $x<3;$x++) <li class="minw-0 col-4 col-md-4 mt-3">
                        <a href="#" class="d-block rounded bg-white p-2 text-reset shadow-sm">

                            <div class="text-truncate fs-12 fw-600 mt-2 opacity-70 text-center">{{ Config('app.name')}}</div>
                        </a>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    @foreach ($pub_img as $image)
                    <div class="col-lg-6 col-3 my-2 mt-md-0 mb-3">
                        <img src="{{ asset('storage/'.$image->images)}}" alt="" class="img-fit">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-green2 shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class=" pb-3 d-inline-block text-white">@lang("Promotion")</span>

                    <span class="text-section-hover-white"></span>
                </h3>
                <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2022/8/20 00:00:00"></div>
                <a href="{{ route('home.produit')}}" class="ml-auto mr-0 btn bg-green btn-sm shadow-md bg-dark-btn">@lang("Voir plus")</a>
            </div>

            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- Nos produits -->
                @foreach ($produits as $produit)
                <div class="carousel-box ">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                <img class="img-fit img-scale lazyload mx-auto h-140px h-md-210px" src="{{ asset('storage/'.$produit->images)}}" data-src="{{ asset('storage/'.$produit->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                            <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                @lang("En vente")
                            </span>
                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="ajouter a la liste" data-placement="left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="@lang('Ecrivez-nous')" data-placement="left">
                                    <i class="las la-comment"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" data-title="Acheter" data-placement="left">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">
                                    {!! $produit->name!!}
                                </a>
                            </h3>
                            <div class="rating rating-sm mt-1">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">
                                    {!! $produit->description!!}
                                </a>
                                <!-- </h3>
                            @if ($produit->stocks_visible=="Oui")
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Quantite en stocks")
                                <span class="fw-700 float-right">750</span>
                            </div>
                            @else
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Quantite en stocks")
                                <span class="fw-700 float-right">-</span>
                            </div>
                            @endif -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="pb-3 d-inline-block">
                        @lang("Nos produits")
                    </span>

                    <span class="text-section-hover"></span>
                </h3>
                <a href="{{ route('home.produit')}}" class="ml-auto mr-0 btn bg-white-btn btn-sm shadow-md">@lang("Voir plus")</a>
            </div>

            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- Nos produits -->
                @foreach ($produits as $produit)
                <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                <img class="img-fit lazyload mx-auto h-140px h-md-210px" zz src="{{ asset('storage/'.$produit->images)}}" data-src="{{ asset('storage/'.$produit->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                            <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                @lang("En vente")
                            </span>
                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="ajouter a la liste" data-placement="left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="@lang('Ecrivez-nous')" data-placement="left">
                                    <i class="las la-comment"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="" class="charriot" data-id="{{$produit->produit_id}}" data-toggle=" tooltip" data-title="@lang('Ajouter au charriot')" data-placement="left">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">
                                    {!! $produit->name!!}
                                </a>
                            </h3>
                            <div class="rating rating-sm mt-1">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">
                                    {!! $produit->description!!}
                                </a>
                                <!-- </h3>
                            @if ($produit->stocks_visible=="Oui")
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Quantite en stocks")
                                <span class="fw-700 float-right">750</span>
                            </div>
                            @else
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Quantite en stocks")
                                <span class="fw-700 float-right">-</span>
                            </div>
                            @endif -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-green2 shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="pb-3 d-inline-block text-white">@lang("Categories")</span>

                    <span class="text-section-hover-white"></span>
                </h3>
                <a href="#" class="ml-auto mr-0 btn bg-green btn-sm shadow-md bg-dark-btn">@lang("Voir plus")</a>
            </div>
            <div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <!-- TOrra en ligne -->
                    @foreach ($categories as $categorie)
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="#" class="d-block">
                                    <img class="img-fit " src="{{ asset('storage/'.$categorie->images)}}" height="200" data-src="{{ asset('storage/'.$categorie->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left ">
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                    <a href="#" class="d-block text-reset">{{ $categorie->name}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- Nos produits -->
                @foreach ($pub_img as $image)
                @for ($x=0;$x<1;$x++) <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <img src="{{ asset('storage/'.$image->images)}}" alt="" class="img-fit">
                    </div>
            </div>
            @endfor
            @endforeach
        </div>
    </div>
    </div>
</section>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("NewsRoom")</span>
                </h3>
                <a href="#" class="ml-auto mr-0 btn bg-white-btn btn-sm shadow-md">@lang("Voir plus")</a>
            </div>
            <div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <!-- TOrra en ligne -->
                    @foreach ($actualites as $actualite)
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="{{ route('news.show',[$actualite->actualite_id])}}" class="d-block">
                                    <img class="img-fit " src="{{ asset('storage/'.$actualite->images)}}" data-src="{{ asset('storage/'.$actualite->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left ">
                                <p>{{$actualite->updated_at}}</p>
                                <p class="fw-600 fs-18 text-center m-0 p-0">
                                    <a href="#" class="d-block text-reset">{{ $actualite->title}}</a>
                                </p>
                                <p>
                                <div class="d-flex justify-content-center" role="group" aria-label="Third group">
                                    <a href="{{ route('news.show',[$actualite->actualite_id])}}" name="button" value="unpublish" class="">@lang("Lire plus")</a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
