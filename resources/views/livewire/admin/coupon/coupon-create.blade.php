<div class="div">
    <form action="#" wire:submit.prevent="store" method="post">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupon Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model="status" type="radio"  value="0" id="inactiveStatus">
                                    <label class="form-check-label" for="inactiveStatus">Active</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model="status" type="radio" value="1" id="activeStatus">
                                    <label class="form-check-label" for="activeStatus">De Active</label>
                                </div>
                            </div>
                        </div>
                        @error('status')
                            <p class="text-red text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Date Schedule</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="expiration-date" class="form-label text-dark">Expiration Date</label>
                            <input type="date" wire:model="expiration_date" id="expiration-date" class="form-control"
                                placeholder="dd-mm-yyyy" >
                            @error('expiration_date')
                                <p class="text-red text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coupon Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="code" class="form-label">Coupon Code</label>
                            <input type="text" id="code" wire:model="code" class="form-control" placeholder="Enter Code">
                            @error('code')
                                <span class="text-red text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <h4 class="card-title mb-3 mt-2">Discount Types</h4>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model="discount_type" type="radio"  value="freeShipping" id="freeShipping">
                                    <label class="form-check-label" for="freeShipping">Free Shipping</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model="discount_type" type="radio" value="percentage" id="percentage">
                                    <label class="form-check-label" for="percentage">Percentage</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model="discount_type" type="radio"  value="fixed" id="fixedAmount">
                                    <label class="form-check-label" for="fixedAmount">Fixed Amount</label>
                                </div>
                            </div>
                            @error('discount_type')
                                <p class="text-red text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="discount_value" class="form-label">Discount Value</label>
                            <input type="text" id="discount_value" wire:model="discount_value" class="form-control" placeholder="Enter value">
                            @error('discount_value')
                                <p class="text-red text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer border-top">
                        <button type="submit" class="btn btn-primary">Create Coupon</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- <div x-data="{ showAlert: true }" x-show="showAlert">
        @if($errors->any())
            <div class="alert alert-danger relative p-4 border border-red-400
             bg-red-100 text-red-700 rounded">
                <button @click="showAlert = false" class="absolute top-0 right-0 mt-2 mr-2
                 text-red-700 font-bold">&times;</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> --}}
