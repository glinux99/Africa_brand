@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Site Configuration")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ route('staff.create')}}" class="btn btn-circle btn-info">
                        <span>@lang("Voir les modifications")</span>
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('autres.config.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h5 class="mb-md-0 h6">@lang("Entreprise Info")</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputNumeroligne" class="control-label">@lang('Nom de l\'Entreprise')</label>
                                <input type="text" class="form-control" value="{{Config('app.name')}}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumeroligne" class="control-label">@lang('Adresse physique')</label>
                                <input type="text" name="adresse" class="form-control" value="{{ $config->adresse ?? ''}}" placeholder="@lang('001 Av. du touriste, Q. les volcans, Com. De, Goma')">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumeroligne" class="control-label">@lang('Numero RCCM')</label>
                                <input type="numero" class="form-control" value="{{ $config->rccm ?? ''}}" title="@lang('Ecrivez le numero RCCM de l\'entreprise')">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumeroligne" class="control-label">@lang('Boite Postal')</label>
                                <input type="text" name="bp" class="form-control" value="{{ $config->bp ?? ''}}" title="@lang('Ecrivez l\'adresse intagram de votre site')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h5 class="mb-md-0 h6">@lang("Reseaux sociaux")</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Facebook')</label>
                            <input type="text" name="facebook" id="inputNumeroligne" class="form-control" value="{{ $config->facebook ?? ''}}" title="@lang('Ecrivez l\'adresse de facebook de votre site')">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Instagram')</label>
                            <input type="text" name="instagrame" id="inputNumeroligne" class="form-control" value="{{ $config->instagrame ?? ''}}" title="@lang('Ecrivez l\'adresse intagram de votre site')">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Twitter')</label>
                            <input type="text" name="twitter" id="inputNumeroligne" class="form-control" value="{{ $config->twitter ?? ''}}" title="@lang('Ecrivez l\'adresse de twitter de votre site')">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Linkdin')</label>
                            <input type="text" name="linkdin" id="inputNumeroligne" class="form-control" value="{{ $config->linkdin ?? ''}}" title="@lang('Ecrivez l\'adresse linkdin  de votre page')">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Youtube')</label>
                            <input type="text" name="youtube" id="inputNumeroligne" class="form-control" value="{{ $config->youtube ?? ''}}" title="">
                        </div>
                    </div>
                </div>
                <div class="mx-2 card">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h5 class="mb-md-0 h6">@lang("Autres contacts du site")</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Numero de la ligne prive')</label>
                            <input type="tel" name="numeropv" id="inputNumeroligne" class="form-control" value="{{ $config->numeropv ?? ''}}" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Numero whatsapp')</label>
                            <input type="text" name="whatsapp" id="inputNumeroligne" class="form-control" value="{{ $config->whatsapp ?? ''}}" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Numero/Lien Telegram')</label>
                            <input type="text" name="telegram" id="inputNumeroligne" class="form-control" value="{{ $config->telegram ?? ''}}" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Email de l\'entreprise')</label>
                            <input type="text" name="email" id="inputNumeroligne" class="form-control" value="{{ $config->email ?? ''}}" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Adresse de l\'entreprise')</label>
                            <input type="text" name="adresse" id="inputadresse" class="form-control" value="{{ $config->adresse ?? ''}}" title="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-3">
                <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="Third group">
                        <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Enregistrer")</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Second group">
                        <button type="submit" name="button" value="publish" class="btn btn-success action-btn">@lang("Enregistrer et publier")</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Mes scripts -->
<!-- <script>
    function imageDelete(el) {
        $('#supp').attr('href', `xxxx`);
    }
</script> -->
<script type="text/javascript">
    function copyUrl(e) {
        var url = $(e).data('url');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(url).select();
        try {
            document.execCommand("copy");
            AIZ.plugins.notify('success', "@lang('Lien a ete copie en cache')");
        } catch (err) {
            AIZ.plugins.notify('danger', "@lang('Oooh!, desole, le lien ne peut etre copie')");
        }
        $temp.remove();
    }

    function sort_uploads(el) {
        $('#sort_uploads').submit();
    }
</script>

<script type="text/javascript">
    function menuSearch() {
        var filter, item;
        filter = $("#menu-search").val().toUpperCase();
        items = $("#main-menu").find("a");
        items = items.filter(function(i, item) {
            if ($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#') {
                return item;
            }
        });

        if (filter !== '') {
            $("#main-menu").addClass('d-none');
            $("#search-menu").html('')
            if (items.length > 0) {
                for (i = 0; i < items.length; i++) {
                    const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
                    const link = $(items[i]).attr('href');
                    $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
                }
            } else {
                $("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing found</span></li>`);
            }
        } else {
            $("#main-menu").removeClass('d-none');
            $("#search-menu").html('')
        }
    }
</script>
@endsection
