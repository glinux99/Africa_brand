@extends('layouts.page')
@section('content')
<section class="mb-4 mt-3">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="pb-3 d-inline-block">
                        @lang("Toutes nos categories")
                    </span>

                    <span class="text-section-hover"></span>
                </h3>

            </div>
            @if($categories->count()<=0) <div class="d-flex justify-content-center">
                @lang('Aucune donnee a affiche')
        </div>
        @else
        <div class="row">
            @foreach ($categories as $categorie)
            <div class="col-md-3 col-lg-3 col-6 carousel-box">
                <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                    <div class="position-relative">
                        <a href="{{ route('produit.categorie', [$categorie->categorie_id])}}" class="d-block">
                            <img class="img-fit " src="{{ asset('storage/'.$categorie->images)}}" data-src="{{ asset('storage/'.$categorie->images)}}" height="200" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                        </a>
                    </div>
                    <div class="p-md-3 p-2 text-left ">
                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                            <a href="#" class="d-block text-reset">{{ $categorie->name}}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="aiz-pagination mt-3 d-flex justify-content-center">
            <nav>
                {{ $categories->links()}}
            </nav>

        </div>
        @endif
    </div>
    </div>
</section>
@endsection
