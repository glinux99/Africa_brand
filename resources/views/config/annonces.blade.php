@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Configuration des annonces")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" data-target="#add-tax" data-toggle="modal" class="btn btn-circle btn-info">
                        <span>@lang("Annonces Actuelles")</span>
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('add.annonces')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information sur le produit")</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Nom du produit')</label>
                                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="@lang('nom du produit')">
                                        <small id="helpId" class="form-text text-muted">@lang('Ex: Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL')</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Prix')</label>
                                        <input type="number" class="form-control" name="prix" id="" aria-describedby="helpId" placeholder="@lang('prix en dollars')">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Categorie')</label>
                                        <input type="text" class="form-control" name="categorie" id="" aria-describedby="helpId" placeholder="@lang('categorie')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Unite')</label>
                                        <input type="text" class="form-control" name="unite" id="" aria-describedby="helpId" placeholder="@lang('unite de mesure')">
                                        <small id="helpId" class="form-text text-muted">@lang('Ex: piece, kilo, etc')</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Images du produit')</label>
                                        <input type="file" class="form-control" name="images[]" id="" aria-describedby="helpId" multiple>
                                        <small id="helpId" class="form-text text-muted">@lang('Tout au plus 3 images')</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">@lang('Lien video')</label>
                                        <input type="url" class="form-control" name="video" id="" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">@lang('Ex: https://www.youtube.com/watch?v=o0P8c1E1-6s')</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 row">
                                    <label class="col-md-3 col-from-label">@lang("Description")</label>
                                    <div class="col-md-12">
                                        <textarea class="aiz-text-editor" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">
                                @lang("État du produit")
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-md-6 col-from-label">@lang("Produit neuf")</label>
                                <div class="col-md-6">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" name="status" checked value="1">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <small id="helpId" class="form-text text-muted">@lang('Si c\'est un ancien produit, laissez desactive')</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information sur le vendeur")</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">@lang('Nom vendeur')</label>
                                <input type="text" class="form-control" name="vendeur" id="" aria-describedby="helpId" placeholder="@lang('nom du vendeur')" value="{{ Config('app.name')}}">
                                <small id="helpId" class="form-text text-muted">@lang('Laisser vide si le produit appartient a l\'entreprise') {{ Config('app.name')}}</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">@lang('Adresse du vendeur')</label>
                                <input type="text" class="form-control" name="adresse" id="" aria-describedby="helpId" placeholder="@lang('Ex: Goma, RDC')">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">@lang('Numero de Tel')</label>
                                <input type="text" class="form-control" name="numero" id="" aria-describedby="helpId" placeholder="@lang('numero de Tel du vendeur')">
                                <small id="helpId" class="form-text text-muted">@lang('+243 970 912 428')</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="Third group">
                        <button type="submit" class="btn btn-primary">@lang("Envoyer")</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div><!-- .aiz-main-content -->

@endsection
