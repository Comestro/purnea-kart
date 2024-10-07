<?php

namespace App\Livewire\Admin\Coupon;

use Livewire\Component;
use App\Models\Coupon;

class CouponCalling extends Component
{
    public function render()
    {
        $data['coupons']=Coupon::all();
        return view('livewire.admin.coupon.coupon-calling' ,$data);
    }

    public function delete($id)
    {
        Coupon::findOrFail($id)->delete();

        session()->flash('message', 'Coupon deleted successfully.');
    }
}
