

@extends('admin.include.adminBase')
@section('title', 'Edit Product ||')

@section('content')



 
          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         
                         {{-- <div class="col-xl-3 col-lg-4">
                           

                         </div>
                          --}}

                         <div class="col-xl-12 col-lg-8 ">
                              <livewire:admin.product.edit-product :product="$product"/>
                              {{-- <livewire:admin.product.image-form/> --}}
                              
                         </div>
                    </div>
               </div>
               <!-- End Container Fluid -->

              
          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

@endsection          

