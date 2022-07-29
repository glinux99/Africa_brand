@extends( (Auth::user()->hasRole('client')) ? 'layouts.page' : 'layouts.app')
@section('content')
<section class="main-content col-md-10 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang('Profile')</h1>
                    </div>
                    <div class="col-md-6 text-md-right">

                        <a href="{{route('user.profile')}}" class="btn btn-circle btn-info">
                            <span>@lang('Modifier')</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">@lang("Mon profile Actuel")</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="image">
                            <img class="w-100" src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <style>
                                    .avatar:hover {
                                        transform: scale(1.2);
                                        transition: transform 1s 0s ease;
                                    }
                                </style>
                                <a href="#">
                                    <img class="avatar border-gray" src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />

                                    <h4 class="title text-center">{{ Auth::user()->name }}<br />
                                        <small>{{ auth()->user()->getRoleNames()->first()}}</small>
                                        <br><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </h4>
                                </a>
                            </div>
                            <p class="description text-center"> A propos de moi
                            </p>
                        </div>
                        <hr>
                        <div class="text-center py-3">
                            {{__("Profile design")}} {{Config("app.name")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
