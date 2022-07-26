@extends('layouts.page')
@section('titre')
@lang("Details du produit ")
@endsection
@section('content')
<section class="mb-4 pt-3">
    <div class="container">
        <div class="bg-white shadow-sm rounded p-3">
            <div class="row">
                <div class="col-lg-7 mb-4">
                    <div class="sticky-top z-3 row gutters-10">
                        <div class="col order-1 order-md-2">
                            <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>
                                @foreach ($images as $image)
                                <div class="carousel-box img-zoom rounded">
                                    <img class="img-fit lazyload w-100" src="" data-src="{{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>
                                @foreach ($images as $image)
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto" src="{{ asset('storage/'.$image->images)}}" data-src="{{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="text-left">
                        <h1 class="mb-2 fs-20 fw-600">
                            {{$produit->name}}
                        </h1>

                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="rating">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                </span>
                                <span class="ml-1 opacity-50">(100 vues)</span>
                            </div>
                        </div>

                        <form id="option-choice-form">
                            @csrf
                            <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">@lang("Quantite")</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity" disabled="">
                                                <i class="las la-minus"></i>
                                            </button>
                                            <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="{{ $produit->qte_min ?? 1}}" min="{{ $produit->qte_min ?? 1}}" max="100000000000000000000" lang="en">
                                            <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity">
                                                <i class="las la-plus"></i>
                                            </button>
                                        </div>
                                        <div class="avialable-amount opacity-60">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">@lang("Prix total")</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-price">
                                        <strong id="chosen_price" class="h4 fw-600 text-primary">

                                        </strong>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="mt-3">
                            <a href="{{ route('produit.cart', [$produit->id])}}" class="btn btn-soft-primary mr-2 add-to-cart fw-600">
                                <i class="las la-shopping-bag"></i>
                                <span class="d-none d-md-inline-block"> @lang("ajouter au chariot")</span>
                            </a>
                            <button type="button" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                <i class="la la-shopping-cart"></i> @lang("Achetez maintenant")
                            </button>
                            <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                <i class="la la-cart-arrow-down"></i> @lang("Au dessus du stock")
                            </button>
                        </div>
                        <div class="row no-gutters mt-3">
                            <div class="col-2">
                                <div class="opacity-50 mt-2">@lang("Remboursement")</div>
                            </div>
                            <div class="col-10">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('assets/img/remboussement.jpg')}}" height="36">
                                </a>
                            </div>
                        </div>
                        <div class="row no-gutters mt-4">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">@lang("partager")</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="aiz-share"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <div class="col-xl-3 order-1 order-xl-0">
                <div class="bg-white shadow-sm mb-3">
                    <div class="position-relative p-3 text-left">
                        <div class="absolute-top-right p-2 bg-white z-1">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 287.5 442.2" width="22" height="34">
                                <polygon style="fill:#F8B517;" points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 " />
                                <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8" />
                                <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6" />
                                <polygon style="fill:#FCFCFD;" points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                            60,116.6 124.1,116.6 " />
                            </svg>
                        </div>
                        <div class="opacity-50 fs-12 border-bottom">@lang("Mis en vente par:")</div>
                        <a href="#" class="text-reset d-block fw-600">
                            {{"AFRICAN BRAND"}}
                            <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                        </a>
                        <!-- <div class="location opacity-70">{{ $vendeur->details ?? ''}}</div> -->
                        <div class="text-center border rounded p-2 mt-3">
                            <div class="rating">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <div class="opacity-60 fs-12">(100 vues)</div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center border-top">
                        <div class="col">
                            <a href="/" class="d-block btn btn-soft-primary rounded-0">@lang("Marche")</a>
                        </div>
                        <div class="col">
                            <ul class="social list-inline mb-0">
                                <li class="list-inline-item mr-0">
                                    <a href="" class="facebook" target="_blank">
                                        <i class="lab la-facebook-f opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a href="" class="twitter" target="_blank">
                                        <i class="lab la-twitter opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="youtube" target="_blank">
                                        <i class="lab la-youtube opacity-60"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm mb-3">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        @lang("Produits les plus vendus")
                    </div>
                    <div class="p-3">
                        <ul class="list-group list-group-flush">
                            <li class="py-3 px-0 list-group-item border-light">
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-5">
                                        <a href="#" class="d-block text-reset">
                                            <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px" src="" data-src="{{ asset('storage/'.$image->images)}}" alt="kkkk" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-7 text-left">
                                        <h4 class="fs-13 text-truncate-2">
                                            <a href="" class="d-block text-reset">{{ $produit->name }}</a>
                                        </h4>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 order-0 order-xl-1">
                <div class="bg-white mb-3 shadow-sm rounded">
                    <div class="nav border-bottom aiz-nav-tabs">
                        <a href="#tab_default_1" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset active show">@lang("Description")</a>
                        <a href="#tab_default_2" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset">Video</a>
                    </div>

                    <div class="tab-content pt-0">
                        <div class="tab-pane fade active show" id="tab_default_1">
                            <div class="p-4">
                                <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                    <p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">
                                            {!! $produit->description!!}</span><br></p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_default_2">
                            <div class="p-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $produit->lien_video}}"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm">
                    <div class="border-bottom p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            <span class="mr-4">@lang("Produits connexes")</span>
                        </h3>
                    </div>
                    <div class="p-3">
                        <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="5" data-xl-items="3" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true'>
                            @foreach ($produitCat as $produit)
                            <div class="carousel-box">
                                <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="#" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="" data-src="{{ asset('storage/'.$produit->images)}}" alt="rien" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">{{ $produit->name}}</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="#" class="d-block text-reset">{!! $produit->description !!}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm mt-3">
                    <div class="border-bottom p-3">
                        <h3 class="fs-18 fw-600 mb-0">
                            <span>@lang("Commentaire sur ce produit")</span>
                        </h3>
                    </div>

                    <div class="query form p-3">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" rows="3" cols="40" name="question" placeholder="@lang('Tapez votre question, commentaire ou suggestion sur ce produit ici')" style="resize: none;"></textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">@lang("Envoyer")</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
