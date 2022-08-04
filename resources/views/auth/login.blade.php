@extends('layouts.auth')
@section('content')
<div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-image: url(public/uploads/all/SWK5EJL9UNbPEJzz04ClYpFj8rpZq33napoqLSM4.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            <img src="{{asset('assets/img/logo.png')}}" class="mw-100 mb-4" height="40">
                            <h1 class="h3 text-primary mb-0">@lang("Bienvenu dans Africa Brand")</h1>
                            <p>@lang("Se connecter avec votre propre compte")</p>
                        </div>
                        <form class="pad-hor" method="POST" role="form" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember" id="remember">
                                            <span>@lang("Se souvenir de moi")</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-right">
                                        <a href="password/reset.html" class="text-reset fs-14">@lang("Mot de passe oublie?")</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                @lang("Se connecter")
                            </button>
                        </form>
                        <div class="mt-4">
                            <a href="{{route('register')}}"> @lang("Vous n'avez pas de compte? creer votre compte")</a>
                        </div>
                        <div class="mt-4">
                            <p class="m-0 p-0 text-center">
                                @lang("Propulse par SubnetCongo")
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
