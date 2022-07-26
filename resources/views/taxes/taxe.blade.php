@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Toutes les taxes")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" data-target="#add-tax" data-toggle="modal" class="btn btn-circle btn-info">
                        <span>@lang("Ajouter une taxe")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Toutes les taxes")</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang("Type de taxe")</th>
                            <th>Status</th>
                            <th class="text-right">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($impots ?? '' as $index=>$impot)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $impot->name}}</td>

                            <td>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input onchange="update_tax_status(this)" value="4" type="checkbox" @if ($impot->status)
                                    checked
                                    @endif>
                                    <span class="slider round"></span>
                                </label>

                            </td>
                            <td class="text-right">
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#" data-target="#update-tax" data-toggle="modal" title="Edit">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="" title="Delete">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div><!-- .aiz-main-content -->

<!-- Tax Add Modal -->
<div id="add-tax" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header bord-btm">
                <h4 class="modal-title h6">@lang("Ajouter une nouvelle taxe")</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>

            <form class="form-horizontal" action="{{route('add.impot')}}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <div class=" row">
                            <label class="col-sm-3 control-label" for="name">
                                @lang("Nom de la taxe")
                            </label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="@lang('Nom de la taxe')" id="name" name="name" class="form-control" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-styled btn-base-3" data-dismiss="modal">
                        @lang("Fermer")
                    </button>
                    <button type="submit" class="btn btn-primary btn-styled btn-base-1">
                        @lang("Enregistrer")
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- delete Modal -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Etes-vous sur de supprimer ceci?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" id="delete-link" class="btn btn-primary mt-2">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Tax update Modal -->
<div id="update-tax" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header bord-btm">
                <h4 class="modal-title h6">@lang("Editer une taxe")</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>

            <form class="form-horizontal" action="https://demo.activeitzone.com/ecommerce/admin/tax" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <div class=" row">
                            <label class="col-sm-3 control-label" for="name">
                                @lang("Nom de la taxe")
                            </label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="@lang('Nom de la taxe')" id="name" name="name" class="form-control" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-styled btn-base-3" data-dismiss="modal">
                        @lang("Fermer")
                    </button>
                    <button type="submit" class="btn btn-primary btn-styled btn-base-1">
                        @lang("Enregistrer")
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
