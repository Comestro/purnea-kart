<div>
   
    <div class="col-xl-12">
        <div class="card">
             <div class="d-flex card-header justify-content-between align-items-center">
                  <div>
                       <h4 class="card-title">All Product List</h4>
                  </div>
                  <div class="dropdown">
                       <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
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
                  <div class="table-responsive">
                       <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                 <tr>
                                      <th style="width: 20px;">
                                           <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1"></label>
                                           </div>
                                      </th>
                                      <th>Product Code</th>
                                      <th>Discount Type</th>
                                      <th>Discount Value</th>
                                      <th>Expiration Date</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                 </tr>
                            </thead>
                            <tbody>
                                 @foreach ($coupons as $coupon)
                                 <tr>
                                   <td>
                                        <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="customCheck2">
                                             <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                   </td>
                                   <!--<td>
                                        <div class="d-flex align-items-center gap-2">
                                             <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                  <img src="assets/images/product/p-1.png" alt="" class="avatar-md">
                                             </div>
                                             <div>
                                                  <a href="#!" class="text-dark fw-medium fs-15">Black T-shirt</a>
                                                  <p class="text-muted mb-0 mt-1 fs-13"><span>Fashion</p>
                                             </div>
                                        </div>

                                   </td>-->
                                   <td>{{$coupon->code}}</td>
                                   <td>{{$coupon->discount_type}}</td>
                                   <td>{{$coupon->discount_value}}</td>
                                   <td>{{$coupon->expiration_date}}</td>
                                   {{-- <td>{{$coupon->status}}</td> --}}
                                   <td>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                   </td>
                                   <td>
                                        <div class="d-flex gap-2">
                                             <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                             <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                             <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        </div>
                                   </td>
                              </tr>
                                 @endforeach
                            </tbody>
                       </table>
                  </div>
                  <!-- end table-responsive -->
             </div>
             <div class="card-footer border-top">
                  <nav aria-label="Page navigation example">
                       <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                       </ul>
                  </nav>
             </div>
        </div>
   </div>
</div>
