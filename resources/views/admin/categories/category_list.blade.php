@extends('admin.include.adminBase')
@section('title', 'Category List ||')

@section('content')


       

          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body text-center">
                                        <div class="rounded bg-secondary-subtle d-flex align-items-center justify-content-center mx-auto">
                                             <img src="{{asset('assets_admin/images/product/p-1.png')}}" alt="" class="avatar-xl">
                                        </div>
                                        <h4 class="mt-3 mb-0">Fashion Categories</h4>
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body text-center">
                                        <div class="rounded bg-primary-subtle d-flex align-items-center justify-content-center mx-auto">
                                             <img src="{{asset('assets_admin/images/product/p-6.png')}}" alt="" class="avatar-xl">
                                        </div>
                                        <h4 class="mt-3 mb-0">Electronics Headphone</h4>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body text-center">
                                        <div class="rounded bg-warning-subtle d-flex align-items-center justify-content-center mx-auto">
                                             <img src="{{asset('assets_admin/images/product/p-7.png')}}" alt="" class="avatar-xl">
                                        </div>
                                        <h4 class="mt-3 mb-0">Foot Wares</h4>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body text-center">
                                        <div class="rounded bg-info-subtle d-flex align-items-center justify-content-center mx-auto">
                                             <img src="{{asset('assets_admin/images/product/p-9.png')}}" alt="" class="avatar-xl">
                                        </div>
                                        <h4 class="mt-3 mb-0">Eye Ware & Sunglass</h4>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <livewire:admin.category.manage-categoryform/>
                    <livewire:admin.category.vendor-category/>
               </div>
               <!-- End Container Fluid -->

             
          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->


@endsection