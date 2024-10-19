<div>
        <div class="card bg-light-subtle">
             <div class="card-header border-0">
                  <div class="search-bar me-3 mb-1">
                       <span><i class="bx bx-search-alt"></i></span>
                       <input type="search" class="form-control" id="search" placeholder="Search ...">
                  </div>
             </div>
        </div>
        <div class="card">
             <div class="card-body border-light">
                  <a href="#" class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0" data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="false" aria-controls="other">Categories
                       <i class='bx bx-chevron-down ms-auto fs-20'></i>
                  </a>
                  <div id="categories" class="collapse show">
                       <div class="categories-list d-flex flex-column gap-2 mt-2">
                            <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="all-categories" checked>
                                 <label class="form-check-label" for="all-categories">All Categories</label>
                            </div>
                            @foreach ($categories as $cat)
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="fashion-categories">
                              <label class="form-check-label" for="fashion-categories">{{$cat->cat_title}}</label>
                         </div>
                            @endforeach
                         

                            
                       </div>
                  </div>

                  <div class="mt-4">
                       <a href="#" class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="other">Product Price
                            <i class='bx bx-chevron-down ms-auto fs-20'></i>
                       </a>
                       <div id="price" class="collapse show">
                            <div class="categories-list d-flex flex-column gap-2 mt-2">
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="all-price">
                                      <label class="form-check-label" for="all-price">All Price</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="price-1">
                                      <label class="form-check-label" for="price-1">Below $200 (145)</label>
                                 </div>

                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="price-2">
                                      <label class="form-check-label" for="price-2">$200 - $500 (1,885)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="price-3">
                                      <label class="form-check-label" for="price-3">$500 - $800 (2,276)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="price-4">
                                      <label class="form-check-label" for="price-4">$800 - $1000 (12,676)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="price-5">
                                      <label class="form-check-label" for="price-5">$1000 - $1100 (13,123)</label>
                                 </div>
                                 <h5 class="text-dark fw-medium mt-3">Custom Price Range :</h5>
                                 <div id="product-price-range" [data-slider-size="md" ] class=""></div>
                                 <div class="formCost d-flex gap-2 align-items-center mt-2">
                                      <input class="form-control form-control-sm text-center" type="text" id="minCost" value="0">
                                      <span class="fw-semibold text-muted">to</span>
                                      <input class="form-control form-control-sm text-center" type="text" id="maxCost" value="1000">
                                 </div>
                            </div>
                       </div>
                  </div>
                  <div class="mt-4">
                       <a href="#" class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0" data-bs-toggle="collapse" data-bs-target="#gender" aria-expanded="false" aria-controls="other">Gender
                            <i class='bx bx-chevron-down ms-auto fs-20'></i>
                       </a>
                       <div id="gender" class="collapse show">
                            <div class="categories-list d-flex flex-column gap-2 mt-2">
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="men">
                                      <label class="form-check-label" for="men">Men (1,834)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="women">
                                      <label class="form-check-label" for="women">Women (2,890)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="kids">
                                      <label class="form-check-label" for="kids">Kid's (1,231)</label>
                                 </div>
                            </div>
                       </div>
                  </div>
                  <div class="mt-4">
                       <a href="#" class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0" data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="false" aria-controls="other">Size & Fit
                            <i class='bx bx-chevron-down ms-auto fs-20'></i>
                       </a>
                       <div id="size" class="collapse show">
                            <p class="text-muted mt-1">"For better results, select gender and category"</p>
                            <div class="categories-list d-flex flex-column gap-2 mt-2">
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="size-s">
                                      <label class="form-check-label" for="size-s">S (1,437)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="size-m">
                                      <label class="form-check-label" for="size-m">M (2,675)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="size-l">
                                      <label class="form-check-label" for="size-l">L (4,870)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="size-xl">
                                      <label class="form-check-label" for="size-xl">XL (7,543)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="size-xxl">
                                      <label class="form-check-label" for="size-xxl">XXL (1,099)</label>
                                 </div>
                                 <a href="#!" class="text-dark fw-medium">More</a>
                            </div>
                       </div>
                  </div>
                  <div class="mt-3">
                       <a href="#" class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0" data-bs-toggle="collapse" data-bs-target="#rating" aria-expanded="false" aria-controls="other">Rating
                            <i class='bx bx-chevron-down ms-auto fs-20'></i>
                       </a>
                       <div id="rating" class="collapse show">
                            <div class="categories-list d-flex flex-column gap-2 mt-2">
                                 <div class="form-check">
                                      <input type="radio" class="form-check-input" name="rating-number" id="rate-1">
                                      <label class="form-check-label" for="rate-1">1 <i class="bx bxs-star text-warning"></i> & Above (437)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="radio" class="form-check-input" name="rating-number" id="rate-2">
                                      <label class="form-check-label" for="rate-2">2 <i class="bx bxs-star text-warning"></i> & Above (657)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="radio" class="form-check-input" name="rating-number" id="rate-3">
                                      <label class="form-check-label" for="rate-3">3 <i class="bx bxs-star text-warning"></i> & Above (1,897)</label>
                                 </div>
                                 <div class="form-check">
                                      <input type="radio" class="form-check-input" name="rating-number" id="rate-4">
                                      <label class="form-check-label" for="rate-4">4 <i class="bx bxs-star text-warning"></i> & Above (3,571)</label>
                                 </div>
                            </div>
                       </div>
                  </div>
             </div>
             <div class="card-footer">
                  <a href="#!" class="btn btn-primary w-100">Apply</a>
             </div>
        </div>
   </div>
