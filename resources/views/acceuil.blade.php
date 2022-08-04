@extends('layouts.page')
@section('content')
<div class="home-banner-area mb-4 pt-3">
    <div class="mx-3 containerd">
        <div class="row gutters-10 position-relative">
            <div class=" col-lg-9">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                    <!-- Images centrales -->
                    <div class="carousel-box">
                        <a href="#">
                            <img class="d-block img-fuid rounded shadow-sm overflow-hidden" src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1658922695/contentservice/Intel-Untitled-12-copy.jpg_By10LiR29.jpg" alt="Africa brand" height="400" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a href="#">
                            <img class="d-block img-fuid rounded shadow-sm overflow-hidden" src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1658581172/contentservice/PC.jpg_rJ5he_K3c.jpg" alt="Africa brand" height="400" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg';">
                        </a>
                    </div>
                </div>
                <ul class="list-unstyled mb-0 row gutters-5">
                    <!-- Images en bas de  l image centrale -->
                    @for ($x=0; $x<4;$x++) <li class="minw-0 col-4 col-md mt-3">
                        <a href="#" class="d-block rounded bg-white p-2 text-reset shadow-sm">

                            <div class="text-truncate fs-12 fw-600 mt-2 opacity-70 text-center">Go Market</div>
                        </a>
                        </li>
                        @endfor
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-6 mb-3">
                        <img src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1659431775/contentservice/ezgif.com-video-to-gif.gif_HyZvovLp9.gif" alt="" class="img-fit">
                    </div>
                    <div class="col-6 mb-3">
                        <img src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1659200173/contentservice/access.gif_HkE3z1Xp5.gif" alt="" class="img-fit">
                    </div>
                    <div class="col-6 mb-1">
                        <img src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1651137227/contentservice/edo.gif_BJeAq0wSq.gif" alt="" class="img-fit">
                    </div>
                    <div class="col-6 mb-1">
                        <img src="https://www-konga-com-res.cloudinary.com/image/upload/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/v1659340959/contentservice/pow%20%281%29.gif_HJAq_WHT5.gif" alt="" class="img-fit">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<section class="mb-4">
    <div class="mx-3 containerd">
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
                @for ($x=0; $x<6; $x++) <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" data-src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
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
                            <div class="rating rating-sm mt-1">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">ooook</a>
                            </h3>
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Cotation")
                                <span class="fw-700 float-right">750</span>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>
<section class="mb-4">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Categories")</span>
                </h3>
                <a href="#" class="ml-auto mr-0 btn btn-success btn-sm shadow-md">@lang("Voir plus")</a>
            </div>
            <div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <!-- TOrra en ligne -->
                    @for ($x=0; $x<6; $x++) <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="#" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" data-src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left ">
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                    <a href="#" class="d-block text-reset">Axe</a>
                                </h3>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>
        <div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <!-- TOrra en ligne -->
                @for ($x=0; $x<6; $x++) <div class="carousel-box">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" data-src="https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/H/I/HINOWA-Mini-Dumper---Red-7416525.jpg" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
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
                            <div class="rating rating-sm mt-1">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="#" class="d-block text-reset">ooook</a>
                            </h3>
                            <div class="rounded px-2 mt-2 bg-soft-success border-soft-success border">
                                @lang("Cotation")
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
