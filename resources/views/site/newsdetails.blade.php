@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Actualite")</span>
                </h3>
            </div>
            @if ($news->count())
            <div class="row">
                <div class="col-md-9">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit " src="{{ asset('storage/'.$news[0]->images)}}" data-src="{{ asset('storage/'.$news[0]->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                        </div>
                        <div class="p-md-3 p-2 text-left ">
                            <p>{{$news[0]->updated_at}}</p>
                            <p class="fw-600 fs-18 text-center m-0 p-0">
                                <a href="#" class="d-block text-reset">{{ $news[0]->title}}</a>
                            </p>
                            <p class="fw-600 fs-13 text-truncate-2 h-25px p-0 m-0 text-muted">
                                {!! $news[0]->description!!}
                            </p>
                            <p>
                            <div class="d-flex justify-content-center" role="group" aria-label="Third group">
                                <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Lire plus")</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="aiz-card-box  rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="card-user">
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="mb-0 text-center">@lang("Les articles les plus lus")</h6>
                            </div>
                            <div class="px-3 border c-scrollbar-light overflow-auto " style="max-height:300px;">
                                <ul class="list-group list-group-flush">
                                    @foreach ($news as $actualite)
                                    <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                        <div class="media text-inherit">
                                            <div class="media-body">
                                                <p class="mb-1 text-truncate-2">
                                                    {{$actualite->title}}
                                                </p>
                                                <small class="text-muted">
                                                    {{$actualite->created_at}}
                                                </small>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aiz-pagination mt-3 d-flex justify-content-center">
                <nav>
                    {{ $news->links()}}
                </nav>

            </div>
            @else
            <div class="d-flex justify-content-center">
                @lang("Aucune actualite a affiche")
            </div>
            @endif
        </div>
    </div>
</section>
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-success border-width-2 pb-3 d-inline-block">@lang("Actualite")</span>
                </h3>
            </div>
            @if ($news->count())
            <div class="row">
                @foreach ($news as $actualite)
                <div class="col-md-4">
                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="#" class="d-block">
                                <img class="img-fit " src="{{ asset('storage/'.$actualite->images)}}" data-src="{{ asset('storage/'.$actualite->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                            </a>
                        </div>
                        <div class="p-md-3 p-2 text-left ">
                            <p>{{$actualite->updated_at}}</p>
                            <p class="fw-600 fs-18 text-center m-0 p-0">
                                <a href="#" class="d-block text-reset">{{ $actualite->title}}</a>
                            </p>
                            <p class="fw-600 fs-13 text-truncate-2 h-25px p-0 m-0 text-muted">
                                {!! $actualite->description!!}
                            </p>
                            <p>
                            <div class="d-flex justify-content-center" role="group" aria-label="Third group">
                                <button type="submit" name="button" value="unpublish" class="btn btn-primary action-btn">@lang("Lire plus")</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="aiz-pagination mt-3 d-flex justify-content-center">
                <nav>
                    {{ $news->links()}}
                </nav>

            </div>
            @else
            <div class="d-flex justify-content-center">
                @lang("Aucune actualite a affiche")
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
