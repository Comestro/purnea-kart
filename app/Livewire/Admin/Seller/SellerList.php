<?php

namespace App\Livewire\Admin\Seller;

use App\Models\Seller;
use Livewire\Component;

class SellerList extends Component
{
    public function render()
    {
        $data['seller']=Seller::all();
        return view('livewire.admin.seller.seller-list',$data);
    }
}
