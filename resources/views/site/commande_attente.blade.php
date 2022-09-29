@extends('layouts.page')
@section('titre')
@lang("NOs commandes en entente ")
@endsection
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
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">2. @lang("Infos achats")</h3>
                        </div>
                    </div>
                    <div class="col active">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">3. @lang("Commande Info")</h3>
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
                <form class="form-default" data-toggle="validator" action="{{ route('produit.comande.send')}}" role="form" method="POST">
                    @csrf
                    <div class="shadow-sm bg-white p-4 rounded mb-4">
                        <p>
                            @lang("Pour que votre commande soit accepte, veuillez vous aquiter des modalites de payements ou contactez nous sur le") <a href="tel:{{ Session('config')->numero ?? '0970912428'}}">{{ Session('config')->numero ?? '0970912428'}}</a>
                        </p>
                        @if ($commandes->count())
                        <table class="table table-striped table-inverse table-hover">
                            <thead class="thead-inverse">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>@lang("Commande ID")</th>
                                    <th>@lang("Nom produit")</th>
                                    <th>@lang("quantite")</th>
                                    <th>@lang("Status")</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commandes as $index=>$commande)
                                <tr class="text-center">
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $commande->commande_id}}</td>
                                    <td>{{ $commande->name}}</td>
                                    <td>{{ $commande->commande_qte}}</td>
                                    <td>
                                        @if ($commande->status=="1")

                                        <a class="btn-sm btn-primary" disabled>
                                            <span class="la la-check" role="status" aria-hidden="true"></span>
                                            @lang("accepte")
                                        </a>
                                        @else
                                        <a class="btn-sm btn-primary" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            @lang("En attente")
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center">@lang("Toutes les commandes ont deja ete checke! Veuillez voir la liste de vos achats!!!")</p>
                        @endif
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="/" class="btn btn-link">
                                <i class="las la-arrow-left"></i>
                                @lang("Retourner vers la boutique")
                            </a>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <a href="{{ route('produit.comande.buy')}}" class="btn btn-primary fw-600" id="commande-send">@lang("Voir mes achats")</a>
                        </div>
                    </div>
                </form>
                <div class="aiz-pagination mt-3 d-flex justify-content-center">
                    <nav>
                        {{ $commandes->links()}}
                    </nav>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
