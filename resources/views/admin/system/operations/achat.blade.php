@extends('layouts.system')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">


        <div class="aiz-titlebar text-left mt-2 mb-3">
            <h5 class="mb-0 h6">@lang("Ajouter une nouvelle Operation")</h5>
        </div>
        <div class="">
            <form class="form form-horizontal mar-top" action="#" method="POST" enctype="multipart/form-data" id="choice_form">
                @csrf
                <div class="row gutters-5">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Information sur l'Operation d'Achat")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Article") <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="@lang(' Nom du produit')" onchange="update_sku()" required>
                                    </div>
                                </div>
                                <div class="form-group row" id="brand">
                                    <label class="col-md-3 col-from-label">@lang("Prix")</label>
                                    <div class="col-md-8">
                                        <input type="number" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Date")</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Detail des articles pour l'achat")</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Libele")</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Montant Total")</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" value="12" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Montant de la TVA")</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Liste des articles achetes")</h5>
                            </div>
                            <div class="card-body">
                                LIste Here
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Enregistrer et Acheter")</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Second group">
                                <button type="submit" name="button" value="publish" class="btn btn-success action-btn">@lang("Enregistrer")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div><!-- .aiz-main-content -->
@endsection
