@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Configuration de la page d'acceuil")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" data-target="#add-tax" data-toggle="modal" class="btn btn-circle btn-info">
                        <span>@lang("Configuration")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Configuration actuelle")</h5>
                </div>
            </div>
            <div class="card-body">
                ok
            </div>
        </div>

    </div>
</div><!-- .aiz-main-content -->

@endsection
