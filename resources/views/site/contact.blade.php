@extends('layouts.page')
@section('titre')
@lang("Contact ")
@endsection
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="col-md-11 mx-auto px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <h3 class="text-center mb-5 fw-900">
                Contactez-nous
            </h3>
            <div class="row">
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Votre nom')</label>
                            <input type="text" name="number" id="inputNumeroligne" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Votre adresse Email')</label>
                            <input type="text" name="number" id="inputNumeroligne" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Votre sujet')</label>
                            <input type="text" name="number" id="inputNumeroligne" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="">
                            <label for="inputNumeroligne" class="control-label">@lang('Message')</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" cols="40" name="question" placeholder="@lang('Tapez votre question, commentaire ou suggestion')" style="resize: none;"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="btn-toolbar  mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="Third group">
                                <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Envoyer")</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rounded text-white bg-dark-2">
                    <h5 class="my-4 text-center fw-700 text-uppercase">@lang("Nos adresses")</h5>
                    <div>
                        <ul class="list-unstyled mx-2">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="la la-address-card la-3x" aria-hidden="true"></span>
                                    <span class="fs-15 fw-600">@lang('Adresse physique')</span>
                                </div>
                                <div class="px-5 fs-13">
                                    {{ Session('config')->adresse ?? 'Goma, Nord-Kivu, RDC, Virunga 20'}}
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="la la-envelope la-3x" aria-hidden="true"></span>
                                    <span class="fs-15 fw-600">@lang('Email')</span>
                                </div>
                                <div class="px-5 fs-13">
                                    {{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="la la-phone la-3x" aria-hidden="true"></span>
                                    <span class="fs-15 fw-600">@lang('Telephone')</span>
                                </div>
                                <div class="px-5 fs-13">
                                    {{ Session('config')->numero ?? '+243 970912428'}}
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="la la-facebook la-2x" aria-hidden="true"></span>
                                    <span class="la la-twitter la-2x" aria-hidden="true"></span>
                                    <span class="fs-15 fw-600">@lang('Reseaux sociaux')</span>
                                </div>
                                <div class="px-5 fs-13">
                                    <p class="d-flex p-0 m-0">
                                        <span class="la la-facebook la-2x" aria-hidden="true"></span>
                                        <span>{{ Session('config')->facebook ?? 'African brand'}}</span>
                                    </p>
                                    <p class="d-flex p-o m-0">
                                        <span class="la la-twitter la-2x" aria-hidden="true"></span>
                                        <span>{{ Session('config')->twitter?? 'African brand'}}</span>
                                    </p>
                                    <p class="d-flex p-o m-0">
                                        <span class="la la-instagram la-2x" aria-hidden="true"></span>
                                        <span>{{ Session('config')->instagram?? 'African brand'}}</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
