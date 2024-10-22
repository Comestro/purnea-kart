<?php

namespace App\Livewire\Admin\Setting\SellerSetting;

use Livewire\Component;

class SellerMobile extends Component
{
    public $seller;
    public $mobile;
    public $isEdit = false;

    public function mount($seller){
        $this->seller = $seller;

    }
    public function update()
    {

        $data = $this->validate([
            'mobile' => 'required|string|max:255',
        ]);

        $this->seller->update($data);
        $this->toggle();
        return redirect()->back()->with('success', 'title updated successfully!');
    }
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
        $this->mobile = $this->mobile ? $this->mobile : $this->mobile;
    }
    public function render()
    {
        return <<<'HTML'
        <div class="col-lg-12">
            <div class="card border">
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">seller Mobile</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                        {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                            <input wire:model="mobile" type="text" class="form-control rounded-0" placeholder="Enter category title">
                            <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                        @else
                            <div class="mx-auto text-center">
                                @if (!empty($mobile))
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>  
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">{{ $mobile }}</p>
                                @else
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">{{$seller->mobile}}</i></p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('mobile')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}