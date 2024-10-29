<?php

namespace App\Livewire\Vendor\Product;

use Livewire\Component;

class EditProductQuantity extends Component
{
    public $product;
    public $quantity;
    public $isEdit = false;

    public function mount($product){
        $this->product;
        $this->quantity = $product->quantity; 

    }
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
        $this->quantity= $this->quantity? $this->quantity: $this->quantity;
    }
    public function update()
    {

        $data = $this->validate([
            'quantity' => 'required|numeric|min:0',
        ]);

        $this->product->update($data);

        $this->toggle();
        return redirect()->back()->with('success', 'quantity updated successfully!');
    }
    public function render()
    {
        return <<<'HTML'
        <div>
        <div class="card border">
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Product Quantity</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                        {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                            <input wire:model="quantity" type="text" class="form-control rounded-0" placeholder="Enter product Quantity">
                            <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                        @else
                            <div class="mx-auto text-center">
                                @if (!empty($quantity))
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">{{$product->quantity}}</p>
                                @else
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">{{$product->quantity}}</i>
                                </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('quantity')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}
