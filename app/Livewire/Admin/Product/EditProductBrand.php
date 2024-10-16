<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class EditProductBrand extends Component
{
    public $product;
    public $brands;
    public $brand_id;
    public $isEdit = false;

    public function mount($product, $brands)
    {
        $this->product = $product;
        $this->brands = $brands;
        $this->brand_id = $product->brand_id; 
    }

    // Toggle the edit state
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        // Validate the brand_id field
        $data = $this->validate([
            'brand_id' => 'required|integer',
        ]);

        $this->product->update([
            'brand_id' => $data['brand_id'],
        ]);

        $this->product->brand_name = $this->brands->firstWhere('id', $data['brand_id'])->brand_name;

        $this->toggle();
        return redirect()->back()->with('success', 'Brand updated successfully!');
    }

    // Render the component view
    public function render()
    {
        return <<<'HTML'
        <div class="col-lg-4">
            <div class="card border">
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Product Brand Name</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                        {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                        <select id="brand_id" name="brand_id" wire:model="brand_id" class="form-control">
                            <option value="">Select Brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
                        <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                        @else
                            <div class="mx-auto text-center">
                                @if (!empty($product->brand_name))
                                    <p class="lead text-capitalize font-medium text-dark mb-0">{{ $product->brand_name }}</p>
                                @else
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">No brand selected</i>
                                </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('brand_id')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}
