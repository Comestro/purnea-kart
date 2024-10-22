<?php

namespace App\Livewire\Admin\Setting\SellerSetting;

use App\Models\Seller;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddSeller extends Component
{
    public function render()
    {
        $seller = Seller::find(4);
        if(!$seller){
            $seller = Seller::create(["name"=>"Generic"]);
        }
        $data['sellerinfo']=$seller;
        return view('livewire.admin.setting.seller-setting.add-seller',$data);
    }
}
