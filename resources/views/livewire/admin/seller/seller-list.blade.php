  <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

            <div class="container-xxl">

                 <div class="row">
                     @foreach ($seller as $name )
                     <div class="col-xl-3 col-md-6">
                           <div class="card">
                                <div class="card-body">
                                     <div class="position-relative bg-light p-2 rounded text-center">
                                          <img src="{{ asset('assets_admin/images/seller/zara.svg')}}" alt="" class="avatar-xxl">
                                          <div class="position-absolute top-0 end-0 m-1">
                                               <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                         <iconify-icon icon="iconamoon:menu-kebab-vertical-circle-duotone" class="fs-20 align-middle text-muted"></iconify-icon>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                         <!-- item-->
                                                         <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                         <!-- item-->
                                                         <a href="javascript:void(0);" class="dropdown-item">Export</a>
                                                         <!-- item-->
                                                         <a href="javascript:void(0);" class="dropdown-item">Import</a>
                                                    </div>
                                               </div>
                                          </div>
                                     </div>
                                     <div class="d-flex flex-wrap justify-content-between my-3">
                                          <div>
                                               <h4 class="mb-1">{{$name->name}}<span class="text-muted fs-13 ms-1">({{$name->gst}})</span></h4>
                                               <!-- <div>
                                                    <a href="#!" class="link-primary fs-16 fw-medium">www.zarafashion.co</a>
                                               </div> -->
                                          </div>
                                          <div>
                                               <p class="mb-0"><span class="badge bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.5</span>3.5k</p>
                                          </div>
                                     </div>
                                     <div class="">
                                          <p class="d-flex align-items-center gap-2 mb-1"><iconify-icon icon="solar:point-on-map-bold-duotone" class="fs-18 text-primary"></iconify-icon>4604 , Philli Lane Kiowa IN 47404</p>
                                          <p class="d-flex align-items-center gap-2 mb-1"><iconify-icon icon="solar:letter-bold-duotone" class="fs-18 text-primary"></iconify-icon>{{$name->email}}</p>
                                          <p class="d-flex align-items-center gap-2 mb-0"><iconify-icon icon="solar:outgoing-call-rounded-bold-duotone" class="fs-20 text-primary"></iconify-icon>{{$name->mobile}}</p>
                                     </div>
                                     <div class="d-flex align-items-center justify-content-between mt-3 mb-1">
                                          <p class="mb-0 fs-15 fw-medium text-dark">Fashion</p>
                                          <div>
                                               <p class="mb-0 fs-15 fw-medium text-dark">$200k <span class="ms-1"><iconify-icon icon="solar:course-up-outline" class="text-success"></iconify-icon></span></p>
                                          </div>
                                     </div>
                                     <div class="progress progress-soft progress-md">
                                          <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                     </div>
                                     <div class="p-2 pb-0 mx-n3 mt-2">
                                          <div class="row text-center g-2">
                                               <div class="col-lg-4 col-4 border-end">
                                                    <h5 class="mb-1">865</h5>
                                                    <p class="text-muted mb-0">Item Stock</p>
                                               </div>
                                               <div class="col-lg-4 col-4 border-end">
                                                    <h5 class="mb-1">+4.5k</h5>
                                                    <p class="text-muted mb-0">Sells</p>
                                               </div>
                                               <div class="col-lg-4 col-4">
                                                    <h5 class="mb-1">+2k</h5>
                                                    <p class="text-muted mb-0">Happy Client</p>
                                               </div>
                                          </div>
                                     </div>
                                </div>
                                <div class="card-footer border-top gap-1 hstack">
                                     <a href="{{route('seller_details',$name->id)}}" class="btn btn-primary w-100">View</a>
                                     <a href="#!" class="btn btn-light w-100">{{$name->status ? "Active" : "Inactive"}}</a>
                                     <a href="#!" class="btn btn-soft-danger d-inline-flex align-items-center justify-content-center rounded-circle avatar-sm"><i class="bx bx-heart fs-4 align-middle"></i></a>
                                </div>
                           </div>
                      </div>
                     
                     @endforeach
                      
                      </div>
                 </div>


          

         
       </div>
       <!-- ==================================================== -->
       <!-- End Page Content -->