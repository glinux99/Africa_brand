@extends('layouts.page')
@section('titre')
@lang("Tous nos produits ")
@endsection
@section('content')
@if ($prodcats!="produitOnly")
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Produits suivant la categorie") {{ $categorie->name}}</span>
                </h3>
            </div>
            <div class="produits">
                @if($prodcats->count())
                <div class="row">
                    <!-- Nos produits -->
                    @foreach ($prodcats as $produit)
                    <div class="col-md-3 col-lg-3 col-6 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ asset('storage/'.$produit->images)}}" data-src="{{ asset('storage/'.$produit->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                    @lang("En vente")
                                </span>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="J'aime" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="Ajouter pour comparer" data-placement="left">
                                        <i class="las la-comment"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" class="charriot" data-id="{{$produit->produit_id}}" data-title="Acheter" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">{{$produit->name}}</a>
                                </h3>
                                <!-- @if ($produit->stocks_visible=="Oui")
                                <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                    @lang("Quantite en stocks")
                                    <span class="fw-700 float-right">750</span>
                                </div>
                                @endif -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="d-flex justify-content-center">
                    @lang("Aucune donnee a afficher")
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="pb-3 d-inline-block">
                        @lang("Nos produits")
                    </span>

                    <span class="text-section-hover"></span>
                </h3>
            </div>
            <div class="produits">
                @if ($produits->count())
                <div class="row">
                    <!-- Nos produits -->
                    @foreach ($produits as $produit)
                    <div class="col-md-3 col-lg-3 col-6 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ asset('storage/'.$produit->images)}}" data-src="{{ asset('storage/'.$produit->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                    @lang("En vente")
                                </span>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="J'aime" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="Ajouter pour comparer" data-placement="left">
                                        <i class="las la-comment"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" class="charriot" data-id="{{$produit->produit_id}}" data-title="Acheter" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">{{$produit->name}}</a>
                                </h3>
                                <!-- @if ($produit->stocks_visible=="Oui")
                                <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                    @lang("Quantite en stocks")
                                    <span class="fw-700 float-right">750</span>
                                </div>
                                @endif -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="d-flex justify-content-center">
                    @lang("Aucune donnee a afficher")
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
