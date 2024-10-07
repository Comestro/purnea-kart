<?php

namespace App\Livewire\Admin\Coupon;

use Livewire\Component;
use App\Models\Coupon;

class CouponCalling extends Component
{
    public $search='';
    public function render()
    {
        $data['coupons']=Coupon::where('code','like','%'.$this->search.'%')->get();
        return view('livewire.admin.coupon.coupon-calling' ,$data);
    }
}
