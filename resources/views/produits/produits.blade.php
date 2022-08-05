@extends('layouts.app')
@section('content')
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Nos produits")</span>
                </h3>
            </div>

            <div class="produits">
                <div class="row" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <!-- Nos produits -->
                    @for ($x=0; $x<6; $x++) <div class="col-md-3 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="#" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" data-src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                    @lang("En vente")
                                </span>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="@lang('plus de details')" data-placement="left">
                                        <i class="la la-info-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="@lang('Modifier')" data-placement="left">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="@lang('publier')" data-placement="left">
                                        <i class="las la-store"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" data-title="@lang('visibilite du stock')" data-placement="left">
                                        <i class="las la-eye-slash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">ooook</a>
                                </h3>
                                <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                    @lang("Quantite en stocks")
                                    <span class="fw-700 float-right">750</span>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
