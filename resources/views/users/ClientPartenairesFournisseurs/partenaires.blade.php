@extends('layouts.autres')
@section('titre')
@lang("Configuration")
@endsection
@section('button-add')
<a href="" class="btn btn-circle btn-info" data-target="#fournisseurs-modal" data-toggle="modal">
    <span>@lang("Ajouter un partenaire")</span>
</a>
@endsection
@section('titre-actuel')
@lang("Partenaires")
@endsection
@section('titre-modal')
@lang("Ajouter un Partenaire")
@endsection
