<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\ProductReviews;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductReview extends Component
{
    public $product;
    public $rating;

    public $alreadyRated;
    public $review;
    protected $rules = [
        'rating' => 'required|integer|between:1,5',

    ];

    public function mount(Product $product){

        $this->product = $product;
        
        if(ProductReviews::where('user_id', Auth::id())->where('product_id', $this->product->id)->exists()){
            $this->alreadyRated = true;
        }
        else{
            $this->alreadyRated = false;
        }
    }
    public function submitReview()
    {

        $this->validate();
        
        
        ProductReview::create([
            'product_id' => $this->product->id,
            'user_id' => Auth::id(),
            'rating' => $this->rating,
            'review' => $this->review,
        ]);

    
        $this->alreadyRated = true;


        session()->flash('message', 'Review submitted successfully.');
        $this->reset('rating', 'review');
    
       

                
    }

    public function render()
    {
        return view('livewire.product.product-review');
    }
}
