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
                    <a href="{{route('create.annonces')}}" class="btn btn-circle btn-info">
                        <span>@lang("Creer une annonce")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row gutters-5">
                @foreach ($annonces as $annonce)
                <div class="col-auto w-140px w-lg-220px">
                    <div class="aiz-file-box">
                        <div class="dropdown-file">
                            <a class="dropdown-link" data-toggle="dropdown">
                                <i class="la la-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item" onclick="detailsInfo(this)" data-id="1317">
                                    <i class="las la-info-circle mr-2"></i>
                                    <span>@lang("Details infos")</span>
                                </a>
                                <a href="{{ asset('storage/'.$annonce->images)}}" target="_blank" download="{{ 'AfricaBrand'.$annonce->images}}" class="dropdown-item">
                                    <i class="la la-download mr-2"></i>
                                    <span>@lang("Telecharger")</span>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item" onclick="copyUrl(this)" data-url="link">
                                    <i class="las la-clipboard mr-2"></i>
                                    <span>@lang('Copier le lien')</span>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item confirm-alert" data-href="#" data-target="#delete-modal-annonce">
                                    <i class="las la-trash mr-2"></i>
                                    <span>@lang('Supprimer l\'annonce entiere')</span>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item confirm-alert" data-href="{{ $annonce->id}}" data-target="#delete-modal">
                                    <i class="las la-trash mr-2"></i>
                                    <span>@lang('Supprimer l\'image')</span>
                                </a>
                            </div>
                        </div>
                        <div class="card card-file aiz-uploader-select c-default" title="t-50.png">
                            <div class="card-file-thumb">
                                <img src="{{ asset('storage/'.$annonce->images)}}" class="img-fit">
                            </div>
                            <div class="card-body">
                                <h6 class="d-flex">
                                    <span class="text-truncate title">{{ $annonce->name}}</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="aiz-pagination mt-3">
                <nav>
                    {{ $annonces->links()}}
                </nav>

            </div>
        </div>
    </div>
</div><!-- .aiz-main-content -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer cette image?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<div id="delete-modal-annonce" class="modal fade">
    <form action="{{ route('delete.annonces', [1])}}" method="get">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-1">@lang("Voulez-vous vraiment supprimer cette annonce?")</p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Supprimer")</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="info-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">File Info</h5>
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
<script type="text/javascript">
    function detailsInfo(e) {
        $('#info-modal-content').html('<div class="c-preloader text-center absolute-center"><i class="las la-spinner la-spin la-3x opacity-70"></i></div>');
        var id = $(e).data('id')
        $('#info-modal').modal('show');
        $.post('https://demo.activeitzone.com/ecommerce/admin/uploaded-files/file-info', {
            _token: AIZ.data.csrf,
            id: id
        }, function(data) {
            $('#info-modal-content').html(data);
            // console.log(data);
        });
    }

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
    if ($('#lang-change').length > 0) {
        $('#lang-change .dropdown-menu a').each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var locale = $this.data('flag');
                $.post('https://demo.activeitzone.com/ecommerce/language', {
                    _token: 'VcC75XFcLdImwXoDnbMCfttESQJI5hJX7gAFOYGF',
                    locale: locale
                }, function(data) {
                    location.reload();
                });

            });
        });
    }

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
