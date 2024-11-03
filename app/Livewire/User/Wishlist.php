<?php

namespace App\Livewire\User;

use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wishlist extends Component
{
    public $wishlist;

    public function mount(){
        $this->wishlist =ModelsWishlist::get();
        // where('user_id', Auth::id())
    }

    public function destroy($id){
        ModelsWishlist::find($id)->delete();
        session()->flash('message','required product removed from your wishlist'); 
        $this->wishlist = ModelsWishlist::get(); //to refresh the wishlist after deletion;
        // where('user_id',Auth::id())
    }


    public function categories()
    {
        $wishlistSet = ModelsWishlist::with('product.category')->get();
        // ->where('user_id', Auth::id())
    
        return $wishlistSet->groupBy(function($item) {
            return $item->product->category->cat_title ?? "NotCategory";
        });
    }
    


    public function render()
    {
        $wishlist = $this->wishlist;
        $grouplistwishlist = $this->categories();

        return view('livewire.user.wishlist', [
            'wishlist' => $this->wishlist,
            'grouplistwishlist' => $grouplistwishlist 
        ]);
    }
    
}
