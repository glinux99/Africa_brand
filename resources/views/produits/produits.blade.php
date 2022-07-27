@extends('layouts.alterPages')
@section('add-title')
@lang('Tout les produits')
@endsection
@section('tout')
@lang('Tous les produits de la maison')
@endsection
@section('button-add')
<a href="{{route('create.produit')}}" class="btn btn-circle btn-info">
    <span>@lang("Ajouter un produit")</span>
</a>
@endsection
@section('table-header')
<tr>
    <th class="text-center">#</th>
    <th class="text-center">@lang('Designation')</th>
    <th class="text-center">@lang('Categorie')</th>
    <th class="text-center">@lang('unite')</th>
    <th class="text-center">@lang('quantite en stock')</th>
    <th class="text-center">@lang('Prix')</th>
</tr>
@endsection
@section('table-body')
@foreach ($produits as $index=>$produit)
<tr>
    <td class="text-center">{{ $index}}</td>
    <td class="text-center">
        {{ $produit->name}}
    </td>
    <td class="text-center">
        {{$produit->categorie}}
    </td>
    <td class="text-center">
        {{$produit->unite}}
    </td>
    <td class="text-center">
        {{$produit->quantite}}
    </td>
    <td class="text-center">
        {{$produit->prix}}
    </td>
</tr>
@endforeach
@endsection
