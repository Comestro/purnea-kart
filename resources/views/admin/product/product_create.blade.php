
@extends('admin.include.adminBase')
@section('title', 'Create Product ||')

@section('content')


          
          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                        

                        <div class="col-lg-12">
                         
                               
                        <livewire:admin.product.product-create-form/>

                        </div>
                         
                    </div>
               </div>
               <!-- End Container Fluid -->

             
          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

@endsection          

