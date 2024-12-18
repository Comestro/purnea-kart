   
@extends('admin.include.adminBase')
@section('title', 'Product Details ||')

@section('content')



      
        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-xxl">

                <div class="row">
                     <div class="col-lg-4">
                         
                          <div class="card">
                               <div class="card-body">
                                    <!-- Crossfade -->
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                         <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                   <img src="{{asset('assets_admin/images/product/p-1.png')}}" alt="" class="img-fluid bg-light rounded">
                                              </div>
                                              <div class="carousel-item">
                                                   <img src="{{asset('assets_admin/images/product/p-10.png')}}" alt="" class="img-fluid bg-light rounded">
                                              </div>
                                              <div class="carousel-item">
                                                   <img src="{{asset('assets_admin/images/product/p-13.png')}}" alt="" class="img-fluid bg-light rounded">
                                              </div>
                                              <div class="carousel-item">
                                                   <img src="{{asset('assets_admin/images/product/p-14.png')}}" alt="" class="img-fluid bg-light rounded">
                                              </div>
                                              <!-- <a class="carousel-control-prev rounded" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                   <span class="visually-hidden">Previous</span>
                                              </a>
                                              <a class="carousel-control-next rounded" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                   <span class="visually-hidden">Next</span>
                                              </a> -->
                                         </div>
                                         <div class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100">
                                              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="w-auto h-auto rounded bg-light active">
                                                   <img src="{{asset('assets_admin/images/product/p-1.png')}}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                              </button>
                                              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2" class="w-auto h-auto rounded bg-light">
                                                   <img src="{{asset('assets_admin/images/product/p-10.png')}}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                              </button>
                                              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3" class="w-auto h-auto rounded bg-light">
                                                   <img src="{{asset('assets_admin/images/product/p-13.png')}}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                              </button>
                                              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 3" class="w-auto h-auto rounded bg-light">
                                                   <img src="{{asset('assets_admin/images/product/p-14.png')}}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                              </button>
                                         </div>
                                    </div>
                               </div>
                               <div class="card-footer border-top">
                                    <div class="row g-2">
                                         <div class="col-lg-5">
                                              <a href="#!" class="btn btn-primary d-flex align-items-center justify-content-center gap-2 w-100"><i class="bx bx-cart fs-18"></i> Add To Cart</a>
                                         </div>
                                         <div class="col-lg-5">
                                              <a href="#!" class="btn btn-light d-flex align-items-center justify-content-center gap-2 w-100"><i class="bx bx-shopping-bag fs-18"></i> Buy Now</a>
                                         </div>
                                         <div class="col-lg-2">
                                              <button type="button" class="btn btn-soft-danger d-inline-flex align-items-center justify-content-center fs-20 rounded w-100"><iconify-icon icon="solar:heart-broken"></iconify-icon></button>
                                         </div>
                                    </div>
                               </div>
                          </div>
                     </div>
                     <div class="col-lg-8">
                       
                     <livewire:admin.product.product-view :product="$pro_id"/>

                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product Varient</h4>
                            </div>
                            <div class="card-body">
                              <div class="row">
                                   <livewire:admin.product.calling-variant/>
                               </div>
                                
                            </div>
                            <div class="card-footer">
                              <div class="row">
                                   <livewire:admin.product.product-variant :product="$pro_id"/>
                               </div>
                            </div>
                            <div class="card-footer">
                              <div class="row">
                                   <livewire:admin.product.multiple-image :product="$pro_id"/>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-lg-12">
                          <div class="card bg-light-subtle">
                               <div class="card-body">
                                    <div class="row">
                                         <div class="col-lg-3">
                                              <div class="d-flex align-items-center gap-3">
                                                   <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:kick-scooter-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                   </div>
                                                   
                                                   <div>
                                                        <p class="text-dark fw-medium fs-16 mb-1">Free shipping for all orders over $200</p>
                                                        <p class="mb-0">Only in this week</p>
                                                   </div>
                                              </div>
                                         </div>
                                         <div class="col-lg-3">
                                              <div class="d-flex align-items-center gap-3">
                                                   <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:ticket-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                   </div>
                                                   
                                                   <div>
                                                        <p class="text-dark fw-medium fs-16 mb-1">Special discounts for customers</p>
                                                        <p class="mb-0">Coupons up to $ 100</p>
                                                   </div>
                                              </div>
                                         </div>
                                         <div class="col-lg-3">
                                              <div class="d-flex align-items-center gap-3">
                                                   <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:gift-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                   </div>
                                                   
                                                   <div>
                                                        <p class="text-dark fw-medium fs-16 mb-1">Free gift wrapping</p>
                                                        <p class="mb-0">With 100 letters custom note</p>
                                                   </div>
                                              </div>
                                         </div>
                                         <div class="col-lg-3">
                                              <div class="d-flex align-items-center gap-3">
                                                   <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:headphones-round-sound-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                   </div>
                                                   
                                                   <div>
                                                        <p class="text-dark fw-medium fs-16 mb-1">Expert Customer Service</p>
                                                        <p class="mb-0">8:00 - 20:00, 7 days/wee</p>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>
                               </div>
                          </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-lg-6">
                          <div class="card">
                               <div class="card-header">
                                    <h4 class="card-title">Items Detail</h4>
                               </div>
                               <div class="card-body">
                                    <div class="">
                                         <ul class="d-flex flex-column gap-2 list-unstyled fs-14 text-muted mb-0">
                                              <li><span class="fw-medium text-dark">Product Dimensions</span><span class="mx-2">:</span>53.3 x 40.6 x 6.4 cm; 500 Grams</li>
                                              <li><span class="fw-medium text-dark">Date First Available</span><span class="mx-2">:</span>22 September 2023</li>
                                              <li><span class="fw-medium text-dark">Department</span><span class="mx-2">:</span>Men</li>
                                              <li><span class="fw-medium text-dark">Manufacturer </span><span class="mx-2">:</span>Greensboro, NC 27401 Prospa-Pal</li>
                                              <li><span class="fw-medium text-dark">ASIN</span><span class="mx-2">:</span>B0CJMML118</li>
                                              <li><span class="fw-medium text-dark">Item model number</span><span class="mx-2">:</span> 1137AZ</li>
                                              <li><span class="fw-medium text-dark">Country of Origin</span><span class="mx-2">:</span>U.S.A</li>
                                              <li><span class="fw-medium text-dark">Manufacturer </span><span class="mx-2">:</span>Suite 941 89157 Baumbach Views, Gilbertmouth, TX 31542-2135</li>
                                              <li><span class="fw-medium text-dark">Packer </span><span class="mx-2">:</span>Apt. 726 80915 Hung Stream, Rowetown, WV 44364</li>
                                              <li><span class="fw-medium text-dark">Importer</span><span class="mx-2">:</span>Apt. 726 80915 Hung Stream, Rowetown, WV 44364</li>
                                              <li><span class="fw-medium text-dark">Item Weight</span><span class="mx-2">:</span>500 g</li>
                                              <li><span class="fw-medium text-dark">Item Dimensions LxWxH</span><span class="mx-2">:</span>53.3 x 40.6 x 6.4 Centimeters</li>
                                              <li><span class="fw-medium text-dark">Generic Name</span><span class="mx-2">:</span>T-Shirt</li>
                                              <li><span class="fw-medium text-dark">Best Sellers Rank</span><span class="mx-2">:</span>#13 in Clothing & Accessories</li>
                                         </ul>
                                    </div>
                                    <div class="mt-3">
                                         <a href="#!" class="link-primary text-decoration-underline link-offset-2">View More Details <i class="bx bx-arrow-to-right align-middle fs-16"></i></a>
                                    </div>
                               </div>
                          </div>
                     </div>
                     <div class="col-lg-6">
                          <div class="card">
                               <div class="card-header">
                                    <h4 class="card-title">Top Review From World</h4>
                               </div>
                               <div class="card-body">
                                    <div class="d-flex align-items-center gap-2">
                                         <img src="{{asset('assets_admin/images/users/avatar-6.jpg')}}" alt="" class="avatar-md rounded-circle">
                                         <div>
                                              <h5 class="mb-0">Henny K. Mark</h5>
                                         </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mt-3 mb-1">
                                         <ul class="d-flex text-warning m-0 fs-20 list-unstyled">
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star-half"></i>
                                              </li>
                                         </ul>
                                         <p class="fw-medium mb-0 text-dark fs-15">Excellent Quality</p>
                                    </div>

                                    <p class="mb-0 text-dark fw-medium fs-15">Reviewed in Canada on 16 November 2023</p>
                                    <p class="text-muted">Medium thickness. Did not shrink after wash. Good elasticity . XL size Perfectly fit for 5.10 height and heavy body. Did not fade after wash. Only for maroon colour t-shirt colour lightly gone in first wash but not faded. I bought 5 tshirt of different colours. Highly recommended in so low price.</p>
                                    <div class="mt-2">
                                         <a href="#!" class="fs-14 me-3 text-muted"><i class='bx bx-like'></i> Helpful</a>
                                         <a href="#!" class="fs-14 text-muted">Report</a>
                                    </div>

                                    <hr class="my-3">

                                    <div class="d-flex align-items-center gap-2">
                                         <img src="{{asset('assets_admin/images/users/avatar-4.jpg')}}" alt="" class="avatar-md rounded-circle">
                                         <div>
                                              <h5 class="mb-0">Jorge Herry</h5>
                                         </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mt-3 mb-1">
                                         <ul class="d-flex text-warning m-0 fs-20 list-unstyled">
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star"></i>
                                              </li>
                                              <li>
                                                   <i class="bx bxs-star-half"></i>
                                              </li>
                                         </ul>
                                         <p class="fw-medium mb-0 text-dark fs-15">Good Quality</p>
                                    </div>

                                    <p class="mb-0 text-dark fw-medium fs-15">Reviewed in U.S.A on 21 December 2023

                                    </p>
                                    <p class="text-muted mb-0">I liked the tshirt, it's pure cotton &amp; skin friendly, but the size is smaller to compare standard size.</p>
                                    <p class="text-muted mb-0">best rated</p>

                                    <div class="mt-2">
                                         <a href="#!" class="fs-14 me-3 text-muted"><i class='bx bx-like'></i> Helpful</a>
                                         <a href="#!" class="fs-14 text-muted">Report</a>
                                    </div>
                               </div>
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
