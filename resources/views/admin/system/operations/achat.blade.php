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
                                        <input type="text" class="form-control" id="article_Lname" name="article_name" placeholder="@lang(' Nom du produit')" required>
                                    </div>
                                </div>
                                <div class="form-group row" id="brand">
                                    <label class="col-md-3 col-from-label">@lang("Quantite")</label>
                                    <div class="col-md-8">
                                        <input type="number" name="article_qte" id="article_Lqte" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row" id="brand">
                                    <label class="col-md-3 col-from-label">@lang("Prix")</label>
                                    <div class="col-md-8">
                                        <input type="number" name="" id="article_Lprix" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Date")</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" id="article_Ldate">
                                    </div>
                                </div>
                                <div class="col-md-11 px-0">
                                    <button type="button" name="button" id="list_add" class="btn btn-success action-btn float-right">@lang("Ajouter a la liste")</button>
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
                                        <input type="number" class="form-control" id="total_input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Montant de la TVA")</label>
                                    <div class="col-md-8">
                                        <input type="number" id="tva" class="form-control" min="1" onchange="tva_change();">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Charges")</h5>
                                <a class="btn btn-success action-btn float-right" data-toggle="modal" data-target="#new-charge-modal">@lang("Nouvelle charge")</a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table class="table table-hover" id="charge_null">
                                        <tbody>
                                            <td class="text-center ">
                                                @lang("Aucune donnee pour le moment")
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">@lang("Fournisseur")</h5>
                                <a class="btn btn-success action-btn float-right" data-toggle="modal" data-target="#fournisseurs-modal">@lang("Nouveau fournisseur")</a>
                            </div>
                            <div class="card-body">
                                <!-- charges ici -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label">@lang("Forunisseur")</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Nom de votre fournisseur">
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
                                <div>
                                    <table class="table table-hover table-responsive" id="tbodyArticle">
                                        <tbody>
                                            <td class="text-center ">
                                                @lang("Aucune donnee pour le moment")
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <button type="button" name="button" id="btn-achat-operation" data-target="#operation-achat" data-toggle="modal" class="btn btn-primary action-btn">@lang("Acheter et payer")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="mb-5 btn-dark position-fixed right-0 bottom-0 rounded px-3 mr-3">
            <div class="border-bottom py-2">
                @lang("Montant total a payer")
            </div>
            <div class="py-2 text-center">
                <span id="total" class="fs-18"></span>
            </div>
        </div>
    </div>
</div><!-- .aiz-main-content -->
@endsection
