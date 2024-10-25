@extends('admin.include.adminBase')
@section('title', 'Brand Edit ||')

@section('content')

    <div class="page-content">
        <!-- Start Container Fluid -->
        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-3 col-lg-4">    
                    <livewire:admin.brand.previous-item />
                </div>

                <div class="col-xl-9 col-lg-8 ">
                    <livewire:admin.brand.edit-brand :brand='$brand_id' />
                </div>
            </div>
        </div>
    </div>

@endsection
