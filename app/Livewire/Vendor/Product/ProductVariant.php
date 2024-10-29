<?php

namespace App\Livewire\Vendor\Product;
use App\Models\Product;
use App\Models\ProductVariant as ProductVariantModel;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Validation\Rule;

use Livewire\Component;

class ProductVariant extends Component
{

    use WithFileUploads;

    public $variant_type;
    public $variant_name;
    public $sku;
    public $price;
    public $stock;
    public $variant_image;
    public $p_id;

    public function mount(Product $product){
        $this->p_id = $product->id;
    }

    // Validation rules
    protected $rules = [
        'variant_type' => 'required|string',
        'variant_name' => 'required|string|max:255',
        'sku' => 'required', 
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'variant_image' => 'nullable|image|max:1024', // Optional, max 1MB
    ];
    
    public function store()
    {
        $this->validate();
        
        $imageName = $this->variant_image ? "C" . time() . '.' . $this->variant_image->getClientOriginalExtension() : null;
        $this->variant_image->storeAs('public/image/product', $imageName, 's3');


        
        ProductVariantModel::create([
            'variant_type' => $this->variant_type,
            'product_id' => $this->p_id,
            'variant_name' => $this->variant_name,
            'sku' => $this->sku,
            'price' => $this->price,
            'stock' => $this->stock,
            'variant_image' => $imageName, 
        ]);

        
        $this->reset(['variant_type', 'variant_name', 'sku', 'price', 'stock', 'variant_image']);

        
        session()->flash('message', 'Variant added successfully!');
    }
    public function render()
    
    {
        return view('livewire.vendor.product.product-variant');
    }
}
