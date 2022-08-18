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
