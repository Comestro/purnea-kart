<?php

namespace App\Livewire\Admin\Product;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\Component;

class ProductCreateForm extends Component
{
    public $name;
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


    public function mount()
    {
        if ($this->brand_id) {
            $this->brand_name = Brand::where('id', $this->brand_id)->value('brand_name');
        } 
        if ($this->category_id) {
            $this->cat_title = Category::where('id', $this->category_id)->value('cat_title');
        }
    }

    public function updatedBrandId($value)
    {
        $this->brand_name = Brand::where('id', $value)->value('brand_name');
    }
      public function updatedCategoryId($value)
    {
        $this->cat_title = Category::where('id', $value)->value('cat_title');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_price' => ['nullable', 'numeric', 'lt:price'],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug'],
            'quantity' => ['required', 'integer', 'min:0'],
            'sku' => ['required', 'string', 'max:255'],
            'vendor_id' => ['nullable', 'exists:vendors,id'],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['nullable', 'exists:brands,id'],
        ];
    }

    // Auto-generate slug when name is updated
    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    // Store the product in the database
    public function store()
    {
        $validateData = $this->validate();
    
        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
            'slug' => $this->slug,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'vendor_id' => $this->vendor_id,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
        ]);

        if ($product) {
            session()->flash('message', 'Product added successfully.');
            return redirect()->route('product.edit', $product->slug); // Ensure this route exists
        } else {
            session()->flash('message', 'Unable to add product.');
        }
    }

    // Render the form with categories and brands
    public function render()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();

        return view('livewire.admin.product.product-create-form', $data);
    }
}