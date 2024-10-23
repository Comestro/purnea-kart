<div>
    <div class="card-header">
    </div><!-- end card-header -->
    <div class="card-body">
        <div class="mb-5">
            <div>
               
                <div class="mb-0">
                    @if ($step == 1)
                        <div class="active" id="basictab1" role="tabpanel">
                            <h4 class="fs-16 fw-semibold mb-1">Profile Information</h4>
                            <p class="text-muted">Setup your profile information</p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <livewire:admin.product.product-view :product="$pro_id" />

                                </div>
                            </div> <!-- end row -->
                        </div><!-- end tab-pane -->
                    @endif

                    @if ($step == 2)
                        <div class="">
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
                    @endif



                    @if ($step == 3)
                        <div>
                            <h4 class="fs-16 fw-semibold mb-1">Product photos</h4>
                            {{-- <p class="text-muted">Fill your social media links</p> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <livewire:admin.product.multiple-image :product="$pro_id" />

                                </div> <!-- end col -->



                            </div><!-- end row -->
                        </div><!-- end tab-pane -->
                    @endif

                    @if ($step == 4)
                        <div>
                            <h4 class="fs-16 fw-semibold mb-1">Product Preview</h4>
                            {{-- <p class="text-muted">Fill your social media links</p> --}}

                            <div class="d-flex justify-content-center">
                               
                                    <livewire:admin.product.singleproduct-preview :product="$pro_id" />

                                

                            </div><!-- end row -->
                        </div>
                    @endif


                    @if ($step == 5)
                        <div class="tab-pane" id="basictab5" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="avatar-md mx-auto mb-3">
                                            <div
                                                class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle">
                                                <iconify-icon icon="iconamoon:like-duotone"
                                                    class="fs-36"></iconify-icon>
                                            </div>
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
                    @endif

                    <div class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">

                        <div class="d-flex gap-2">
                            @if ($step != 1)
                                <button wire:click="prevStep" wire:loading.attr="disabled" class="btn btn-primary">
                                    <span wire:loading wire:target="prevStep" class="spinner-border spinner-border-sm" aria-hidden="true"></span>

                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                </button>
                            @endif  
                            @if ($step >= 1 && $step < 5)
                                <button wire:click="nextStep"  wire:loading.attr="disabled" class="btn btn-primary">
                                    <span wire:loading wire:target="nextStep" class="spinner-border spinner-border-sm" aria-hidden="true"></span>

                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                </button>
                            @endif
                        </div>

                    </div>
                </div> <!-- tab-content -->
            </div> <!-- end #horizontal wizard-->
        </div>


    </div> <!-- end card body -->
</div>
