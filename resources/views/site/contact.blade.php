@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="col-md-10 mx-auto px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <h3 class="text-center mb-5">
                Contactez-nous
            </h3>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6 bg-dark rounded text-white">
                    <h5 class="my-4 text-center">@lang("Contactez-nous sur nos adresses")</h5>
                    <div>
                        <ul class="list-group list-group-flush h6">
                            <li class="mb-3 d-flex justify-content-left align-items- py-3 text-white rounded">
                                <span class="mr-4">@lang("Adresse "):</span>
                                <span>{{ Session('config')->adresse ?? 'Goma, RDC, Virunga 20'}}</span>
                            </li>
                            <li class="mb-3 list-group-item d-flex justify-content-left align-items- py-3 text-dark rounded">
                                <span class="mr-4">@lang("Email "):</span>
                                <span>{{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}</span>
                            </li>
                            <li class="mb-3 list-group-item d-flex justify-content-left align-items- py-3 text-dark rounded">
                                <span class="mr-4">@lang("Numero "):</span>
                                <span>{{ Session('config')->numero ?? '+243970912428'}}</span>
                            </li>

                            <li class="mb-3 list-group-item d-flex justify-content-left align-items- py-3 text-dark rounded">
                                <div class="d-flex">
                                    <div>
                                        <span class="mr-4">@lang("Resaux sociaux "):</span>
                                    </div>
                                    <div>
                                        <span class="d-block">
                                            <a href="{{ Session('config')->facebook ?? 'African brand'}}" class="text-dark">
                                                @lang("Facebook") <i class="lab la-facebook-f">: {{ Session('config')->facebook ?? 'African brand'}}</i>
                                            </a>
                                        </span>
                                        <span class="d-block">
                                            <a href="{{ Session('config')->facebook ?? 'African brand'}}" class="text-dark">
                                                @lang("Twitter") <i class="lab la-twitter">: {{ Session('config')->facebook ?? 'African brand'}}</i>
                                            </a>
                                        </span>
                                        <span class="d-block">
                                            <a href="{{ Session('config')->facebook ?? 'African brand'}}" class="text-dark">
                                                @lang("Instagram") <i class="lab la-instagram">: {{ Session('config')->facebook ?? 'African brand'}}</i>
                                            </a>
                                        </span>
                                    </div>
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
