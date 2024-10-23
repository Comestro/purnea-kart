   
@extends('admin.include.adminBase')
@section('title', 'Product Details ||')

@section('content')


      
       
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <livewire:admin.product.product-edit :pro_id="$pro_id" />

                </div> <!-- end card -->

                
            </div><!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- End Container Fluid -->

    
</div>
@endsection      
    

