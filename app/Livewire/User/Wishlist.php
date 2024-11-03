<?php

namespace App\Livewire\User;

use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wishlist extends Component
{
    public $wishlist;

    public function mount(){
        $this->wishlist =ModelsWishlist::where('user_id', Auth::id())->get();
    }

    public function destroy($id){
        ModelsWishlist::find($id)->delete();
        session()->flash('message','required product removed from your wishlist'); 
        $this->wishlist = ModelsWishlist::where('user_id',Auth::id())->get(); //to refresh the wishlist after deletion;
    }


    public function render()
    {
        $wishlist = $this->wishlist;
        return view('livewire.user.wishlist', ['wishlist' => $wishlist]);
    }
}
