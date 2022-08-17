@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Les commandes")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ route('staff.create')}}" class="btn btn-circle btn-info">
                        <span>@lang("Ajouter une catorie")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Les commandes de produits")</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table  mb-0">
                    <thead>
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">@lang("Nom")</th>
                        <th class="text-center">@lang("Email/Num Tel")</th>
                        <th class="text-center">@lang("Description du produit")</th>
                        <th class="text-center">@lang("Quantite")</th>
                        <th class="text-center">@lang("P.U")</th>
                        <th class="text-center">@lang("Etat de la commande")</th>
                        <th class="text-center">@lang("Actions")</th>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $index=>$commande)
                        <tr class="text-center">
                            <td>
                                {{ $index+1}}
                            </td>
                            <td>{{ $commande->username}}</td>
                            <td>{{ $commande->email}} <br>
                                {{$commande->numero}}
                            </td>
                            <td>{{ $commande->produit_name}}</td>
                            <td>{{ $commande->qte}}</td>
                            <td>{{ $commande->prix}} USD</td>
                            <td>
                                <a class="btn-sm btn-primary" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    En attente
                                </a>
                            </td>
                            <td>
                                <a href="" class="btn-primary btn-sm">@lang("Decider")</span></a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div><!-- .aiz-main-content -->
@endsection
