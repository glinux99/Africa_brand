<!-- Modal categorie -->
<div id="categorie-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Configuration d'une categorie")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('categories.config')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Description d\'une categorie')</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="@lang('Description d\'une categorie')" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Image Descriptive')</label>
                                <input type="file" class="form-control" name="images" required>
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Sauvegarder")</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="categorie-modif-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <form action="{{ route('categories.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Modifier une categorie")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="id" id="idCat" hidden>
                                <label for="">@lang('Nom d\'une categorie')</label>
                                <input type="text" class="form-control" name="name" id="nameCat" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Image Descriptive')</label>
                                <input type="file" class="form-control" name="images">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="categorie-info-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">Information</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body c-scrollbar-light position-relative" id="info-modal-content">
                <div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal categorie -->
<!-- Information sur le produit -->
<div id="produitInfo-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">Information</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body c-scrollbar-light position-relative" id="infoprod-modal-content">
                <div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modification sur le produit -->
<div id="editproduit" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('produit.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Modifier un produit")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="id" id="idProd" hidden>
                                <label for="">@lang('Description du produit')</label>
                                <input type="text" class="form-control" name="name" id="nameProd" aria-describedby="helpId" placeholder="@lang('Description du produit')">
                            </div>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-6">
                                <label for="">@lang('Quantite de produit')</label>
                                <input type="text" class="form-control" name="qte" id="qteProd" aria-describedby="helpId" placeholder="@lang('')">
                            </div>
                            <div class="col-6">
                                <label for="">@lang('Prix du produit')</label>
                                <input type="text" class="form-control" name="prix" id="prixProd" aria-describedby="helpId" placeholder="@lang('')">
                            </div>
                        </div>
                        <div class="">
                            <label class="col-md-12 col-from-label">@lang("La description")</label>
                            <div class="col-md-12">
                                <textarea class="aiz-text-editor" name="description" rows="20"> <span id="descriptionProd"></span></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Image Descriptive')</label>
                                <input type="file" class="form-control" name="images" multiple>
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Suppression modal -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer cet element?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<!-- Suppression modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>@lang("Supprimer le message de confirmation")</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang("Annuler")</button>
                <a id="delete_link" class="btn btn-danger btn-ok">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addcards">
    <div class="modal-dialog modal-lg modal-dialog-zoom product-modal" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader text-center p-3">
                <i class="las la-spinner la-spin la-3x"></i>
            </div>
            <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="la-2x">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>

<div id="addcart" class="modal fade">
    <div class=" modal-dialog modal-lg modal-dialog-zoom product-modal">
        <div class="modal-content">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">
                    <section class="mb-4 pt-3">
                        <div class="container">
                            <div class="bg-white shadow-sm rounded p-3">
                                <div class="row">
                                    <div class="col-lg-7 mb-4">
                                        <div class="sticky-top z-3 row gutters-10">
                                            <div class="col order-1 order-md-2">
                                                <div class="aiz-carousel product-gallery images-res" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                                                <div class="aiz-carousel product-gallery-thumb images-res-tumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="text-left">
                                            <h1 class="mb-2 fs-20 fw-600 title-details">

                                            </h1>

                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="rating">
                                                        <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                                    </span>
                                                    <span class="ml-1 opacity-50">(100 vues)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row no-gutters">
                                                    <div class="col-sm-2">
                                                        <div class="opacity-50 my-2">@lang("Quantite")</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="product-quantity d-flex align-items-center">
                                                            <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                                                <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantite" disabled="">
                                                                    <i class="las la-minus"></i>
                                                                </button>
                                                                <input type="number" name="quantite" class="col border-0 text-center flex-grow-1 fs-16 input-number qte_modal" id="modal-in" placeholder="1" max="100000000000000000000" lang="fr">
                                                                <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantite">
                                                                    <i class="las la-plus"></i>
                                                                </button>
                                                            </div>
                                                            <div class="avialable-amount opacity-60">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                                    <div class="col-sm-2">
                                                        <div class="opacity-50 my-2">@lang("Prix total")</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="product-price">
                                                            <strong id="chosen_price" class="h4 fw-600 text-primary">

                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="row d-flex">
                                                    <a href="javascript:void(0)" type="button" data-id="" @if (Auth::user()) id="addcart-modal" @else onclick="connectedOnly()" @endif class="btn btn-soft-primary mr-2 add-to-cart fw-600">
                                                        <i class="las la-shopping-bag"></i>
                                                        <span class="d-none d-md-inline-block"> @lang("ajouter chariot")</span>
                                                    </a>
                                                    <a href="" id="link-chariot" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                                        <i class="la la-shopping-cart"></i> @lang("Achetez")
                                                    </a>
                                                </div>
                                                <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                                    <i class="la la-cart-arrow-down"></i> @lang("Au dessus du stock")
                                                </button>
                                            </div>
                                            <div class="row no-gutters mt-3">
                                                <div class="col-3">
                                                    <div class="opacity-50 mt-2">@lang("Remboursement")</div>
                                                </div>
                                                <div class="col-9">
                                                    <a href="#" target="_blank">
                                                        <img src="{{ asset('assets/img/remboussement.jpg')}}" height="36">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row no-gutters mt-4">
                                                <div class="col-sm-3">
                                                    <div class="opacity-50 my-2">@lang("partager")</div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="aiz-share"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adresse -->
<div class="modal fade" id="new-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Nouvelle adresse")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="{{ route('adresse.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Adresse")</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" placeholder="@lang('Votre adresse')" rows="2" name="adresse" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Email")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" value="{{ Auth::user()->email ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Pays")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" name="pays" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Ville")</label>
                            </div>
                            <div class="col-md-10 mb-3">
                                <input type="text" name="ville" class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Code postale")</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="@lang('Votre code postal')" name="code_postal" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Telephone")</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="+243" name="numero" value="{{ Auth::user()->numero ?? '0970912428'}}" required>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Adresse Edit -->
<div class="modal fade" id="edit-address-modal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">@lang("Nouvelle adresse")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="{{ route('adresse.editer')}}" method="POST">
                @csrf
                <input type="text" id="Adresse_id" name="adresse_id" hidden>
                <div class=" modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Adresse")</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" id="adresse" placeholder="@lang('Votre adresse')" rows="2" name="adresse" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Email")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Pays")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" name="pays" id="pays" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Ville")</label>
                            </div>
                            <div class="col-md-10 mb-3">
                                <input type="text" name="ville" id="ville" class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Code postale")</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" id="code_postal" placeholder="@lang('Votre code postal')" name="code_postal" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Telephone")</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" id="numero" placeholder="+243" name="numero" value="{{ Auth::user()->numero ?? '0970912428'}}" required>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Decision commande -->
<div id="commande-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de la commade")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p>
                <div class="col-auto">
                    @lang("Details sur la commande")
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang("Nom du client")</th>
                                <th>@lang("Commande ID")</th>
                                <th>@lang("Qte Client /Stock")</th>
                                <th>@lang("Montant total")</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="name-client"></td>
                                <td id="commande-id"></td>
                                <td id="qtestock"></td>
                                <td id="montant-total"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </p>
                <a href="" id="accept-commande" class="btn btn-primary mt-2 comfirm-link">@lang("Accepter")</a>
                <a href="" id="annuler-commande" type="button" class="btn btn-dark mt-2">@lang("Annuler")</a>
                <a href="" id="delete-commande" class="btn btn-danger mt-2 " data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<!-- Promotion de produits -->
<div id="deadline-modal" class="modal fade">
    <div class="modal-dialog modal-md">
        <form action="{{ route('promition.produit.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("DeadLine de la promotion")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                        @lang("Les informations ci-contre permettrons de verifier te temps d'echeance pour le deadline de promotion de produits")
                    <div class="row">
                        <input type="text" name="produit_id" id="dealineProdId" value="" hidden>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">@lang('Date d\'echeances')</label>
                                <input type="date" class="form-control" name="deadline" aria-describedby="helpId" required>
                            </div>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">@lang('Prix actuel')</label>
                                    <input type="text" class="form-control" name="" id="prix_deadline" value="{{ $produit->prix ?? 'inconnu'}}" min="1" aria-describedby="helpId" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">@lang('Reduction en %')</label>
                                    <input type="number" class="form-control" name="prix" value="1" min="1" max="100" aria-describedby="helpId" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- SYSTEM MODALS -->
<!-- new charges -->
<div class="modal fade" id="new-charges-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Nouvelle Charge")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Designation")</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" placeholder="@lang('Votre adresse')" rows="2" name="adresse" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Compte")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero de compte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Sous Compte")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- observations -->
<!-- MP MC -->
<div class="modal fade" id="new-stockMpMc-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Nouvelle Observation")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Libele")</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" placeholder="@lang('Votre adresse')" rows="2" name="adresse" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Article")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero de compte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Quantite")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- PF -->
<div class="modal fade" id="new-stockPF-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Nouvelle Charge")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Libele")</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control mb-3" placeholder="@lang('Votre adresse')" rows="2" name="adresse" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Article")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero de compte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Quantite")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="new-charge-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Ajouter une charge")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Descritpion")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" name="" id="charge_Ldescription" class="form-control" placeholder="Entrer ici le numero de compte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>@lang("Montant")</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="number" name="" id="charge_Lmontant" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-sm btn-primary" id="charge_btn">@lang("Valider")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="fournisseurs-modal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Ajouter un Fournisseur")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('fournisseurs.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Nom')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse E-mail')</label>
                                <input type="text" class="form-control" name="email" id="" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('adresse email de l\'agent')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Numero Tel /Whatsapp')</label>
                                <input type="text" class="form-control" name="numero" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse physique')</label>
                                <input type="text" class="form-control" name="adresse" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Images')</label>
                                <input type="file" class="form-control" name="images[]" multiple>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Autres documents')</label>
                                <input type="file" class="form-control" name="documents[]" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site web')</label>
                                <input type="text" class="form-control" name="site" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Lien facebook/Twitter')</label>
                                <input type="text" class="form-control" name="liens" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="operation-achat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang("Finaliser avec le payement")</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="px-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label id="mode_payement_label" for="mode_payement">@lang("Mode de payement:")</label>
                            </div>
                            <div class="mb-3 col-md-8">
                                <select id="mode_payement" name="mode_payement" class="form-control form-select " aria-label="">
                                    <option>@lang("Cash")</option>
                                    <option>@lang("Banque")</option>
                                    <option>@lang("Credit")</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>@lang("Montant")</label>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <input type="number" name="" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>@lang("Reference")</label>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <input type="text" name="" class="form-control" placeholder="Entrer ici le numero du sous compte">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top mb-3">
                            <div class="col-6">
                                @lang("Montant Global a payer")
                            </div>
                            <div class="border-left col-6 text-right">
                                120usd
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">@lang("Enregistrer")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
