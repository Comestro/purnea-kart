<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class EditProductPrice extends Component
{
    public $product;
    public $price;
    public $isEdit = false;

    public function mount($product){
        $this->product;
        $this->price = $product->price; 

    }
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
        $this->price= $this->price? $this->price: $this->price;
    }
    public function update()
    {

        $data = $this->validate([
            'price' => 'required|numeric|min:0',
        ]);

        $this->product->update($data);

        $this->toggle();
        return redirect()->back()->with('success', 'price updated successfully!');
    }
    public function render()
    {
        return <<<'HTML'
        <div class="col-lg-6">
            <div class="card border">
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Product Price</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                     {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                            <input wire:model="price" type="text" class="form-control rounded-0" placeholder="Enter product price">
                            <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                        @else
                            <div class="mx-auto text-center">
                                @if (!empty($name))
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">₹: {{$product->price}}</p>
                                @else
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">₹: {{$product->price}}</i>
                                </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('price')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}
