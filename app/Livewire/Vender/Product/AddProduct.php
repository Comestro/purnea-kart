<?php

namespace App\Livewire\Vender\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class AddProduct extends Component
{
    public $name;
    public $description;
    public $price;
    public $discount_price;
    public $quantity;
    public $category_id;
    public $brand_id;
    public $slug;

    
    public $sku;   

    public function rules(){
        return [
            'name' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
            'price' => ['required','numeric'],
            'discount_price' => ['nullable','numeric'],
            'quantity' => ['required','integer'],
            'category_id' => ['required','integer'],
            'brand_id' => ['required','integer'],
           'slug' => ['required','string','max:255'],
           'sku' => ['required','string','max:100'],
        ];
    }

    public function updatedName($value){

        $this->slug = str::slug($value);
    }

    public function store(){

        $this->validate();

         $ProductCreated =Product::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'discount_price'=>$this->discount_price,
            'quantity'=>$this->quantity,
            'category_id'=>$this->category_id,
            'brand_id'=>$this->brand_id,
            'sku'=>$this->sku,
           'slug'=>$this->slug,
         ]);
         if($ProductCreated)
         {
            return redirect()->route('vendor.product-list')->with('success','product created successfully');
         }
    }

    public function render()
    {

        $data['category']=Category::all();
        $data['brand']=Brand::all();

        return view('livewire.vender.product.add-product',$data);
    }
}
