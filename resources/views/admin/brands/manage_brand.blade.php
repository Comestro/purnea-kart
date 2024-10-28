
@extends('admin.include.adminBase')
@section('title', 'List Brand ||')
@section('content')

        
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">

                         <div class="col-xl-12 col-lg-12 ">
                              <div class="card">
                                 
                                   <div>
                                        <livewire:admin.brand.manage-brand/>

                                        {{-- <livewire:admin.brand.vendor-brand/> --}}
                                        <!-- end table-responsive -->
                                   </div>
                                   
                         </div>
                    </div>
                    
                    

               </div>
               <!-- End Container Fluid -->

              

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

          @endsection