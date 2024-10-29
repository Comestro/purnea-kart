<?php

namespace App\Livewire\Vendor\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class AllProduct extends Component
{
    public $name;
    public $product;
    public $description;
    public $price;
    public $discount_price;
    public $slug;
    public $quantity;
    public $sku;
    public $vendor_id;
    public $category_id;
    public $brand_id;
    public $brand_name;
    public $cat_title;

    public function mount(Product $product )

    {
        $this->product= $product; 
        $this->name=$product->name;
        $this->description=$product->description;
        $this->price=$product->price;
        $this->discount_price=$product->discount_price;
        $this->slug=$product->slug;
        $this->quantity=$product->quantity;
        $this->sku=$product->sku;
        $this->vendor_id=$product->vendor_id;
        $this->category_id=$product->vendor_id;
        $this->brand_id=$product->brand_id;
        $this->brand_name=$product->brand_name;
        $this->cat_title=$product->cat_title;
        
    }

    public function update(){
        $data = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_price' => ['nullable', 'numeric', 'lt:price'],
            'quantity' => ['required', 'integer', 'min:0'],
            'sku' => ['required', 'string', 'max:255'],
            'vendor_id' => ['nullable', 'exists:vendors,id'],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['nullable', 'exists:brands,id'],
        ]);
    
        // Retrieve and update the product using the validated data
        $this->product->update($data);
    
        session()->flash('success', 'Product updated successfully.');
        return redirect()->route('vendor.product-list');
    }
    
    public function render()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        return view('livewire.vendor.product.all-product',$data);
    }
}
