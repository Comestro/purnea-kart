@extends('vendor.include.vendorBase')
@section('content')

    <div class="row">
        <livewire:vendor.product.editProduct  :product="$product"/>
    </div>

@endsection