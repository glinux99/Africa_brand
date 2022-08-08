@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
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
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('assets/img/contact.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
