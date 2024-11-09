<?php

namespace App\Livewire\Vendor\Product;


use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListProduct extends Component
{
    // public $productList = [];

    // public function mount()
    // {
    //     // Check role and load data accordingly
    //     if (Auth::user()->role === 'admin') {
    //         $this->productList = Product::all();
    //     } elseif (Auth::user()->role === 'vendor') {
    //         $this->productList = Product::where('vendor_id', Auth::user()->id)->get();
    //     }
    // }

    public function render()
    {

        // $vendorId = $request->get('vendor_id');

        // $productList = Product::when($vendorId, function ($query) use ($vendorId) {
        // return $query->where('vendor_id', $vendorId);
        // })->get();
        $data['productList']=Product::all();
        return view('livewire.vendor.product.list-product',$data);
        // ['productList' => $this->productList,]
    }
}

