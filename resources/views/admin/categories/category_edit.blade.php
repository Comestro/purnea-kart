@extends('admin.include.adminBase')
@section('title', 'Category Edit ||')

@section('content')


          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-xl-3 col-lg-4">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="bg-light text-center rounded bg-light">
                                             <img src="{{asset('storage/public/image/category/'.$categoryItems->image)}}" alt="" class="avatar-xxl">
                                        </div>
                                      
                                        <div class="mt-3">
                                             <h4>{{$categoryItems->cat_title}}</h4>
                                             <div class="row">
                                                  <div class="col-lg-4 col-4">
                                                       <p class="mb-1 mt-2">Cat Slug :</p>
                                                       <h5 class="mb-0">{{$categoryItems->cat_slug}}</h5>
                                                  </div>
                                                  <div class="col-lg-4 col-4">
                                                       <p class="mb-1 mt-2">Main cat</p>
                                                       <h5 class="mb-0">{{$categoryItems->parent_category_id?$categoryItems->parent_category_id:'N/a'}}</h5>
                                                  </div>
                                                  <div class="col-lg-4 col-4">
                                                       <p class="mb-1 mt-2">ID :</p>
                                                       <h5 class="mb-0">{{$categoryItems->id}}</h5>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card-footer border-top">
                                        <div class="row g-2">
                                             <div class="col-lg-6">
                                                  <a href="{{route('create.category')}}" class="btn btn-outline-secondary w-100">Create Category</a>
                                             </div>
                                             <div class="col-lg-6">
                                                  <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-xl-9 col-lg-8 ">
                              <div class="card">
                                <livewire:admin.category.edit-category :cat="$cat_id"/>
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