<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductVariant as ProductVariantModel;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Validation\Rule;

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
        $this->variant_image->storeAs('public/image/product', $imageName, 'public');


        
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






    // public $product;
    // public $variants = [];
    // public $showUpdateButton = false; 

    // protected $rules = [
    //     'variants.*.type' => 'required|string',
    //     'variants.*.value' => 'required|string',
    //     'variants.*.price' => 'required|numeric',
    //     'variants.*.stock' => 'required|integer',
    //     'variants.*.sku' => 'required|integer',
    //     'variants.*.variants_image' => 'nullable|string',
    // ];

    // public function mount(Product $product)
    // {
    //     $this->product = $product;


    //     $this->variants = Product_Variant::where('product_id', $this->product->id)
    //         ->get()
    //         ->map(function ($variant) {
    //             return [
    //                 'id' => $variant->id,
    //                 'type' => $variant->variant_type,
    //                 'value' => $variant->variant_name,
    //                 'price' => $variant->price,
    //                 'stock' => $variant->stock,
    //                 'sku' => $variant->sku,
    //                 'variant_image' => $variant->variant_image,
    //             ];
    //         })->toArray();
    // }


   

    // public function addVariant()
    // {
    //     $this->variants[] = ['type' => '', 'value' => '', 'price' => $this->product->discount_price, 'stock' => ''];

    //     $this->showUpdateButton = true;
    // }

    // public function removeVariant($index)
    // {
    //     if (isset($this->variants[$index]['id'])) {
    //         ProductVariantModel::find($this->variants[$index]['id'])->delete();
    //     }
    //     unset($this->variants[$index]);
    //     $this->variants = array_values($this->variants); // Re-index the array
    // }

    // public function update()
    // {
    //     $this->validate();

    //     // Update variants
    //     foreach ($this->variants as $variant) {
    //         if (isset($variant['id'])) {
    //             ProductVariantModel::find($variant['id'])->update([
    //                 'variant_type' => $variant['type'],
    //                 'variant_value' => $variant['value'],
    //                 'price' => $variant['price'],
    //                 'stock' => $variant['stock'],
    //             ]);
    //         } else {
    //             // Create new variant
    //             ProductVariantModel::create([
    //                 'product_id' => $this->product->id,
    //                 'variant_type' => $variant['type'],
    //                 'variant_value' => $variant['value'],
    //                 'price' => $variant['price'],
    //                 'stock' => $variant['stock'],
    //             ]);
    //         }
    //     }

    //     $this->showUpdateButton = false;

    //     session()->flash('message', 'Product and variants successfully updated.');
    // }


    
    public function render()
    {
        return view('livewire.admin.product.product-variant');
    }
}
