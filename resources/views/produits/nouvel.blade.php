@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">


        <div class="aiz-titlebar text-left mt-2 mb-3">
            <h5 class="mb-0 h6">@lang("Ajouter un nouveau produit")</h5>
        </div>
        <div class="">
            <form class="form form-horizontal mar-top" action="{{ route('produit.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
                @csrf
                <div class="row gutters-5">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Information sur le produit")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Nom du produit") <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="@lang(' Nom du produit')" onchange="update_sku()" required>
                                    </div>
                                </div>
                                <div class="form-group row" id="brand">
                                    <label class="col-md-3 col-from-label">@lang("Categorie")</label>
                                    <div class="col-md-8">
                                        <select class="form-control selectcategorie" name="categorie" id="brand_id" data-live-search="true">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Unite")</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="unite" placeholder="Unit (e.g. KG, Pc etc)" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Quantité minimum d'achat") <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="number" lang="fr" class="form-control" name="qte_min" value="1" min="1" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Remboursable")</label>
                                    <div class="col-md-8">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" name="remboursable" checked value="Oui">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Images du produit")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">@lang("Image de la galerie") <small>(600x600)</small></label>
                                    <div class="col-md-8">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                            <input type="file" name="images[]" id="" class="form-control" multiple>
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small class="text-muted">@lang("Ces images sont visibles dans la galerie de la page de détails du produit. Utilisez des images de taille 600x600.")</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">@lang("Vignette") <small>(300x300)</small></label>
                                    <div class="col-md-8">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                            <input type="file" name="vignette" id="" class="form-control">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                        <small class="text-muted text-justify">@lang("Cette image est visible dans toutes les boîtes de produits. Utilisez une image de taille 300 x 300. Gardez un espace vide autour de l'objet principal de votre image car nous avons dû recadrer certains bords dans différents appareils pour le rendre réactif.")</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Vidéos de produits")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Fournisseur vidéo")</label>
                                    <div class="col-md-8">
                                        <select class="form-control aiz-selectpicker" name="video_fournisseur" id="video_provider">
                                            <option value="youtube">Youtube</option>
                                            <option value="dailymotion">Dailymotion</option>
                                            <option value="vimeo">Vimeo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Lien vidéo")</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="video" placeholder="@lang('Lien video')">
                                        <small class="text-muted">@lang("Utilisez le lien approprié sans paramètre supplémentaire. N'utilisez pas de
                                            lien de partage court/de code iframe intégré.")</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Prix ​​du produit + stock")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Prix Unitaire")<span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number" lang="fr" min="0" value="0" step="0.01" placeholder="@lang('prix unitaire')" name="prix" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Remise *")<span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number" lang="fr" min="0" value="0" step="0.01" placeholder="remise" name="remise" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control aiz-selectpicker" name="type_reduction">
                                            <option value="montant">@lang("Montant")</option>
                                            <option value="pourcent">@lang("Pourcentage")</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Description du produit")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("La description")</label>
                                    <div class="col-md-8">
                                        <textarea class="aiz-text-editor" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Shipping Cost</h5>
                    </div>
                    <div class="card-body">

                    </div>
                </div>-->

                    </div>

                    <div class="col-lg-4">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">
                                    @lang("Configuration de l'expédition")
                                </h5>
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">@lang("Livraison gratuite")</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="expedition" value="gratuite" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">@lang("Forfait")</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="expedition" value="forfait">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flat_rate_shipping_div" style="display: none">
                                    <div class="form-group row">
                                        <label class="col-md-6 col-from-label">Shipping cost</label>
                                        <div class="col-md-6">
                                            <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Shipping cost" name="flat_shipping_cost" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Avertissement de quantité de stock faible")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="name">
                                        @lang("Quantite")
                                    </label>
                                    <input type="number" name="alert" value="1" min="0" step="1" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">
                                    @lang("État de visibilité du stock")
                                </h5>
                            </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-md-6 col-from-label">@lang("Afficher la quantité de stock")</label>
                                    <div class="col-md-6">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="radio" name="stocks_visible" value="Oui" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Estimer le délai de livraison")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="name">
                                        @lang("Jours d'expédition")
                                    </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="est_livraison" min="1" step="1" placeholder="@lang('Jour d\'expedition')">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@lang("Jour")</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Valeur et taxe")</h5>
                            </div>
                            <div class="card-body">
                                <label for="name">
                                    @lang("Taxe")
                                    <input type="hidden" value="3" name="tax_id[]">
                                </label>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Tax" name="tax[]" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control aiz-selectpicker" name="tax_type[]">
                                            <option value="amount">Flat</option>
                                            <option value="percent">Percent</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="name">
                                    @lang("Valeur")
                                    <input type="hidden" value="4" name="tax_id[]">
                                </label>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Tax" name="tax[]" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control aiz-selectpicker" name="tax_type[]">
                                            <option value="amount">Flat</option>
                                            <option value="percent">Percent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Enregistrer")</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Second group">
                                <button type="submit" name="button" value="publish" class="btn btn-success action-btn">@lang("Enregistrer et publier")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div><!-- .aiz-main-content -->
@endsection
