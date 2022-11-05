@extends('layouts.systemAdd')
@section('compte')
<div class="form-group row">
    <label class="col-md-3 col-from-label">@lang("Compte") <span class="text-danger">*</span></label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="name" placeholder="@lang(' Nom du produit')" onchange="update_sku()" required>
    </div>
</div>
@endsection
