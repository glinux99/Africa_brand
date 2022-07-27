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
                        <span>@lang("Images Actuelles")</span>
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
                <form action="{{ route('home.page.alter')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang("Images Centrales")</label>
                                <input type="file" class="form-control" id="" multiple name="imagesCenter[]">
                            </div>
                            <div class="form-group">
                                <label for="">@lang("Image Zone basse")</label>
                                <input type="file" class="form-control" id="" multiple name="imagesBottom[]">
                            </div>
                            <div class="form-group">
                                <label for="">@lang("Publicites 1")</label>
                                <input type="file" class="form-control" id="" multiple name="imagesPub[]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang("Publicites 2")</label>
                                <input type="file" class="form-control" id="" multiple name="imagesPub1[]">
                            </div>
                            <div class="form-group">
                                <label for="">@lang("Publicites 3")</label>
                                <input type="file" class="form-control" id="" multiple name="imagesPub2[]">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div><!-- .aiz-main-content -->

@endsection
