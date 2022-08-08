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
                            <p class="fw-600 fs-13 text-truncate-2 h-25px p-0 m-0">
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
