
<div class="card">
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
                            </div>
                        </div>    
                    @endif

                    @if ($step == 2)
                        <div class="">
                            <h4 class="fs-16 fw-semibold mb-1">Product Variant</h4>
                            <p class="text-muted">Setup your product Variant</p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <livewire:vendor.product.product-variant :product="$product_id"  /> 
                                </div>
                                <div class="row">     
                                    <div class="col-lg-12">
                                       <livewire:vendor.product.calling-variant :product="$product_id"/>
                                   </div>
                               </div>
                            </div> <!-- end row -->
                        </div><!-- end tab-pane -->
                    @endif

                    @if ($step == 3)
                    <div>
                        <h4 class="fs-16 fw-semibold mb-1">Product photos</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <livewire:vendor.product.multiple-imgaes :product="$product_id"/>
                            </div> <!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end tab-pane -->
                    @endif

                    @if ($step == 4)
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

                                        <p class="w-75 mb-2 mx-auto">Filled product data Successfully.</p>
                                        <button class="btn btn-success">
                                            <a href="{{ route('vendor.addproduct') }}" class="text-white" style="text-decoration: none;">Finished!</a>
                                        </button>
                                        
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
                            @if ($step >= 1 && $step < 4)
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

 
