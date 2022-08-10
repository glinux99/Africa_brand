@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Apropos de l'Entreprise")</span>
                </h3>
            </div>
            <div class="apropos">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">@lang("Présentation de l'entreprise")</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">@lang("Équipes de direction")</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">@lang("Cultures et valeurs")</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">@lang("Nos autres affaires")</a>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h3>
                                    Présentation de l'entreprise
                                </h3>
                                <div class="text-justify ">
                                    {!! $config->presentation!!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h3>Notre Equipe</h3>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <h3>
                                    Notre Mission
                                </h3>
                                <div class="text-justify">
                                    {!! $config->culture!!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <h3>Autres Busness</h3>
                                <div class="row">
                                    <div class="text-justify col-md-6 my-5">
                                        <h4>
                                            Africa-brand App
                                        </h4>
                                        <div class="text-justify">
                                            Africa brand application pour vous aider a maneger votre entreprise
                                        </div>
                                    </div>
                                    <div class="text-justify col-md-6 my-5">
                                        <h4>
                                            Africa-brand App
                                        </h4>
                                        <div class="text-justify">
                                            Africa brand application pour vous aider a maneger votre entreprise
                                        </div>
                                    </div>
                                    <div class="text-justify col-md-6 my-5">
                                        <h4>
                                            Africa-brand App
                                        </h4>
                                        <div class="text-justify">
                                            Africa brand application pour vous aider a maneger votre entreprise
                                        </div>
                                    </div>
                                    <div class="text-justify col-md-6 my-5">
                                        <h4>
                                            Africa-brand App
                                        </h4>
                                        <div class="text-justify">
                                            Africa brand application pour vous aider a maneger votre entreprise
                                        </div>
                                    </div>
                                    <div class="text-justify col-md-6 my-5">
                                        <h4>
                                            Africa-brand App
                                        </h4>
                                        <div class="text-justify">
                                            Africa brand application pour vous aider a maneger votre entreprise
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
