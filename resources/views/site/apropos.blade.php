@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="col-md-11 mx-auto p-0 bg-white shadow-sm rounded">
            <style>
                .breadcrumb .breadcrumb-item {
                    margin: 0;
                }

                .breadcrumb {
                    margin: -20px;
                    background-color: #fff;
                    padding: 1.5rem 20px;
                    border-bottom: 1px solid #4329a333;
                    border-radius: 0;
                    margin-bottom: 20px;
                }

                .breadcrumb .breadcrumb-item a {
                    color: #131313;
                    font-weight: 600;
                }

                .breadcrumb-item.active {
                    color: #141433;
                }

                .breadcrumb-area {
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: cover;
                    min-height: 50vh;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    text-align: center;
                }

                .breadcrumb-area .breadcrumb-content>h2 {
                    font-weight: 700;
                    color: #ffffff;
                    text-transform: uppercase;
                    text-align: center;
                    font-size: 36px;
                    margin-bottom: 0;
                    padding-bottom: 20px;
                }

                .breadcrumb-area .breadcrumb-content ul>li:first-child {
                    padding-left: 0;
                }

                .breadcrumb-area .breadcrumb-content ul>li {
                    color: #000000;
                    display: inline-block;
                    padding-left: 20px;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content ul>li:before {
                    content: "\f054";
                    font-family: 'Font Awesome 5 Free';
                    font-weight: 600;
                    position: absolute;
                    right: -15px;
                    top: 2px;
                    font-size: 10px;
                    color: #ffffff;
                }

                .breadcrumb-area .breadcrumb-content ul>li:last-child:before {
                    display: none;
                    content: none;
                }

                .breadcrumb-area .breadcrumb-content ul>li>a {
                    color: #ffffff;
                }

                .breadcrumb-area .breadcrumb-content ul>li {
                    color: #ffffff;
                    display: inline-block;
                    padding-left: 20px;
                    position: relative;
                }

                .breadcrumb-area .breadcrumb-content ul>li.active {
                    color: #ba1c24;
                    font-weight: 600;
                }
            </style>
            <div class="breadcrumb-area " style="background-image: url('/assets/img/apropos.png')">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>@lang("APROPOS")</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="apropos">
                <div class="row">
                    <div class="col-md-3 my-5 sticky-top z-3">
                        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active border-bottom border-width-1 border-dark my-2 rounded" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">@lang("Présentation de l'entreprise")</a>
                            <a class="nav-link border-bottom border-width-1 border-dark my-2 rounded" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">@lang("Équipes de direction")</a>
                            <a class="nav-link border-bottom border-width-1 border-dark my-2 rounded" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">@lang("Cultures et valeurs")</a>
                            <a class="nav-link border-bottom border-width-1 border-dark my-2 rounded" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">@lang("Nos autres affaires")</a>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h3>
                                    Présentation de l'entreprise
                                </h3>
                                <div class="text-justify ">
                                    {!! $config->presentation ?? '' !!}
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
                                    {!! $config->culture ?? '' !!}
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
