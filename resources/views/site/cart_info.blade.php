@extends('layouts.page')
@section('content')

<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">1. @lang("mon charriot")</h3>
                        </div>
                    </div>
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">2. @lang("Infos achats")</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">3. @lang("Livraison Info")</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">4. @lang("Payement")</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">5. @lang("Confirmation")</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4 gry-bg">
    <div class="container">
        <div class="row cols-xs-space cols-sm-space cols-md-space">
            <div class="col-xxl-8 col-xl-10 mx-auto">
                <form class="form-default" data-toggle="validator" action="#" role="form" method="POST">
                    <input type="hidden" name="_token" value="YifDPOG0KnaR7GHvfkFnW6m9l2loBUap8alaYdOa">
                    <div class="shadow-sm bg-white p-4 rounded mb-4">
                        <div class="row gutters-5">
                            <div class="col-md-6 mb-3">
                                <label class="aiz-megabox d-block bg-white mb-0">
                                    <input type="radio" name="address_id" value="1" checked required>
                                    <span class="d-flex p-3 aiz-megabox-elem">
                                        <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                        <span class="flex-grow-1 pl-3 text-left">
                                            <div>
                                                <span class="opacity-60">@lang("Adresse")</span>
                                                <span class="fw-600 ml-2">Q keshero, avenu de l'Unite n 133</span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">@lang("Code postal")</span>
                                                <span class="fw-600 ml-2">1254</span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">@lang("Ville")</span>
                                                <span class="fw-600 ml-2">Goma</span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">@lang("Pays")</span>
                                                <span class="fw-600 ml-2">RDC</span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">@lang("Telephone")</span>
                                                <span class="fw-600 ml-2">0870912428</span>
                                            </div>
                                        </span>
                                    </span>
                                </label>
                                <div class="dropdown position-absolute right-0 top-0">
                                    <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                        <i class="la la-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" onclick="edit_address('1')">
                                            @lang("Editer")
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="checkout_type" value="logged">
                            <div class="col-md-6 mx-auto mb-3">
                                <a href="" data-toggle="modal" data-target="#new-address-modal" class="border p-3 rounded mb-3 c-pointer text-center bg-white h-100 d-flex flex-column justify-content-center">
                                    <i class="las la-plus la-2x mb-3"></i>
                                    <div class="alpha-7">@lang("Nouvelle adresse")</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="#" class="btn btn-link">
                                <i class="las la-arrow-left"></i>
                                @lang("Retourner vers la boutique")
                            </a>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <button type="submit" class="btn btn-primary fw-600">@lang("Continuer pour la livraison")</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
