
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
                                    <livewire:vendor.product.all-product :product="$product_id" />

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
                                                <livewire:vendor.product.product-variant :product="$product_id"  /> 

                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12">
                                            <livewire:admin.product.calling-variant :product="$pro_id"/>
                                        </div> --}}
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
                            @if ($step >= 1 && $step < 2)
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

 
