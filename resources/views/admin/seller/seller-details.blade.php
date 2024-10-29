
@extends('admin.include.adminBase')
@section('title', 'Edit Product ||')

@section('content')

<div class="page-content">

    <!-- Start Container Fluid -->
    <livewire:admin.seller.seller-details :sellerId="$seller->id" />
        <!-- End Container Fluid -->

  

</div>



@endsection