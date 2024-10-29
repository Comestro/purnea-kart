@extends('vendor.include.vendorBase')
@section('content')

    <div class="row">
        {{-- <livewire:vendor.product.edit-product :product="$product"/> --}}
        <livewire:vendor.product.editProduct  :ven_id="$ven_id"/>

        
    </div>

@endsection