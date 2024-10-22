<div>
    <div class="card-header">
        <h5 class="card-title anchor" id="basic-wizard">Horizontal Wizard<a class="anchor-link"
                href="#horizontal-wizard">#</a></h5>
    </div><!-- end card-header -->
    <div class="card-body">
        <div class="mb-5">
            <form>
                <div id="horizontalwizard">
                    <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                <iconify-icon icon="iconamoon:profile-circle-duotone" class="fs-26"></iconify-icon>
                                Product Information
                            </a><!-- end nav-link -->
                        </li><!-- end nav-item -->
                        <li class="nav-item" role="presentation">
                            <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                aria-selected="false" role="tab" tabindex="-1">
                                <iconify-icon icon="iconamoon:profile-duotone" class="fs-26"></iconify-icon>
                                Product Variant
                            </a><!-- end nav-link -->
                        </li><!-- end nav-item -->
                        <li class="nav-item" role="presentation">
                            <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                aria-selected="false" tabindex="-1" role="tab">
                                <iconify-icon icon="iconamoon:link-fill" class="fs-26"></iconify-icon>
                                Product Photo
                            </a><!-- end nav-link -->
                        </li><!-- end nav-item -->
                        <li class="nav-item" role="presentation">
                            <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2"
                                aria-selected="false" tabindex="-1" role="tab">
                                <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-26"></iconify-icon>
                                Finish
                            </a><!-- end nav-link -->
                        </li><!-- end nav-item -->
                    </ul>

                    <div class="tab-content mb-0">
                            <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                <h4 class="fs-16 fw-semibold mb-1">Profile Information</h4>
                                <p class="text-muted">Setup your profile information</p>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <livewire:admin.product.product-view :product="$pro_id" />

                                    </div>
                                </div> <!-- end row -->
                            </div><!-- end tab-pane -->

                       <div class="tab-pane" id="basictab2" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Product Variant</h4>
                        <p class="text-muted">Setup your product Variant</p>

                        <div class="row">
                            <div class="col-12">


                                <div class="row">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <livewire:admin.product.product-variant :product="$pro_id" />

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <livewire:admin.product.calling-variant />

                                    </div>

                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div><!-- end tab-pane -->                           

                        <div class="tab-pane" id="basictab3" role="tabpanel">
                            <h4 class="fs-16 fw-semibold mb-1">Social Media Links</h4>
                            <p class="text-muted">Fill your social media links</p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <livewire:admin.product.multiple-image :product="$pro_id" />

                                </div> <!-- end col -->



                            </div><!-- end row -->
                        </div><!-- end tab-pane -->

                        <div class="tab-pane" id="basictab4" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="avatar-md mx-auto mb-3">
                                            <div
                                                class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle">
                                                <iconify-icon icon="iconamoon:like-duotone"
                                                    class="fs-36"></iconify-icon></div>
                                        </div>
                                        <h3 class="mt-0">Finished !</h3>

                                        <p class="w-75 mb-2 mx-auto">Filled Data Successfully.</p>

                                        <div class="mb-3">
                                            <div class="form-check d-inline-block">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">I agree with the
                                                    Terms and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- end tab-pane -->

                        <div class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">
                            <div class="first">
                                <a href="javascript:void(0);" class="btn btn-soft-primary">
                                    First
                                </a>
                            </div>
                            <div class="d-flex gap-2">
                                <div class="previous">
                                    <a href="javascript:void(0);" class="btn btn-primary disabled">
                                        <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                    </a>
                                </div>
                                <div class="next">
                                    <a href="#basictab2"  data-bs-toggle="tab" data-toggle="tab" 
                                    aria-selected="false" role="tab" tabindex="-1" class="btn btn-primary">
                                        Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="last">
                                <a href="javascript:void(0);" class="btn btn-soft-primary nav-link">
                                    Finish
                                </a>
                            </div>
                        </div>
                    </div> <!-- tab-content -->
                </div> <!-- end #horizontal wizard-->
            </form>
        </div>


    </div> <!-- end card body -->
</div>
