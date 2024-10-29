@extends('vendor.include.vendorBase')
@section('content')
    <div class="row">
        <livewire:vendor.product.edit-product :ven_id="$ven_id" />
        <livewire:vendor.product.product-variant :ven_id="$ven_id"  />
    </div>
    
@endsection
