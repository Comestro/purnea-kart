@extends('admin.include.adminBase')
@section('title', 'Product List ||')

@section('content')


    <!-- Activity Timeline -->
    <div>
         <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas" style="max-width: 450px; width: 100%;">
              <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                   <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                   <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body p-0">
                   <div data-simplebar class="h-100 p-4">
                        <div class="position-relative ms-2">
                             <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                       <div class="ms-2">
                                            <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                            <p class="d-flex align-items-center">Add 3 files to <span class=" d-flex align-items-center text-primary ms-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                            <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                                 <div class="row">
                                                      <div class="col-lg-6 border-end border-light">
                                                           <div class="d-flex align-items-center gap-2">
                                                                <i class="bx bxl-figma fs-20 text-red"></i>
                                                                <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                           </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                           <div class="d-flex align-items-center gap-2">
                                                                <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                                <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                                           </div>
                                                      </div>
                                                 </div>
                                            </div>
                                            <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                       </div>
                                  </div>
                             </div>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                       <div class="ms-2">
                                            <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                            </h5>
                                            <p class="d-flex align-items-center mb-0">Marked<span class=" d-flex align-items-center text-primary mx-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Design </span> as <span class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span></p>
                                            <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                                 <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                                 <div class="ms-auto">
                                                 4                        <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                                 </div>
                                            </div>
                                            <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                       </div>
                                  </div>
                             </div>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                       <div class="ms-2">
                                            <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                            </h5>
                                            <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                                            <div class="mt-2">
                                                 <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                            </div>
                                            <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                       </div>
                                  </div>
                             </div>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="{{asset('assets_admin/images/users/avatar-7.jpg')}}" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                       <div class="ms-2">
                                            <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                            </h5>
                                            <div class="row g-2 mt-2">
                                                 <div class="col-lg-4">
                                                      <a href="#!">
                                                           <img src="{{asset('assets_admin/images/small/img-6.jpg')}}" alt="" class="img-fluid rounded">
                                                      </a>
                                                 </div>
                                                 <div class="col-lg-4">
                                                      <a href="#!">
                                                           <img src="{{asset('assets_admin/images/small/img-3.jpg')}}" alt="" class="img-fluid rounded">
                                                      </a>
                                                 </div>
                                                 <div class="col-lg-4">
                                                      <a href="#!">
                                                           <img src="{{asset('assets_admin/images/small/img-4.jpg')}}" alt="" class="img-fluid rounded">
                                                      </a>
                                                 </div>
                                            </div>
                                            <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                       </div>
                                  </div>
                             </div>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="{{asset('assets_admin/images/users/avatar-6.jpg')}}" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                       <div class="ms-2">
                                            <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                            </h5>
                                            <p class="d-flex align-items-center gap-1"><iconify-icon icon="iconamoon:check-circle-1-duotone" class="text-success"></iconify-icon> Added a new member to Front Dashboard</p>
                                            <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                       </div>
                                  </div>
                             </div>
                             <div class="position-relative ps-4">
                                  <div class="mb-4">
                                       <span class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                       <div class="ms-2">
                                            <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                            </h5>
                                            <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon icon="iconamoon:certificate-badge-duotone" class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
                                            <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                       </div>
                                  </div>
                             </div>
                        </div>
                        <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                   </div>
              </div>
         </div>
    </div>

    <!-- Right Sidebar (Theme Settings) -->
   
    <!-- ========== Topbar End ========== -->

    <!-- ========== App Menu Start ========== -->
   @include('admin.include.sidebar')
    <!-- ========== App Menu End ========== -->

    <!-- ==================================================== -->
    <!-- Start right Content here -->
    <!-- ==================================================== -->
    <div class="page-content">

         <!-- Start Container Fluid -->
         <div class="container-fluid">

              <div class="row">
                   <div class="col-xl-12">
                        <div class="card">
                             <div class="card-header d-flex justify-content-between align-items-center gap-1">
                                  <h4 class="card-title flex-grow-1">All Product List</h4>

                                  <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">
                                       Add Product
                                  </a>

                                  <div class="dropdown">
                                       <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Month
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="#!" class="dropdown-item">Download</a>
                                            <!-- item-->
                                            <a href="#!" class="dropdown-item">Export</a>
                                            <!-- item-->
                                            <a href="#!" class="dropdown-item">Import</a>
                                       </div>
                                  </div>
                             </div>
                             <div>
                              <livewire:admin.product.calling-product/>

                                  <!-- end table-responsive -->
                             </div>
                             <div class="card-footer border-top">
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-end mb-0">
                                      <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                          <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1">Previous</a>
                                      </li>
                                      
                                      @for ($i = 1; $i <= $products->lastPage(); $i++)
                                          <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                              <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                          </li>
                                      @endfor
                      
                                      <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                          <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                        </div>
                   </div>

              </div>

         </div>
         <!-- End Container Fluid -->

         <!-- ========== Footer Start ========== -->
         @include('admin.include.footer')

         <!-- ========== Footer End ========== -->

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->



@endsection