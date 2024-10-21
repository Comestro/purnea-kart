@extends('admin.include.adminBase')
@section('title', 'Product List ||')

@section('content')
 <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-xxl">

                 <div class="row">
                      <div class="col-lg-3">
                         <livewire:admin.product.product-grid.left-sidebar/>

                      </div>
                      <div class="col-lg-9">
                         <livewire:admin.product.product-grid.rightsidebar/>

                      </div>
                 </div>

            </div>
            <!-- End Container Fluid -->

          
       </div>
       <!-- ==================================================== -->
       <!-- End Page Content -->


@endsection
