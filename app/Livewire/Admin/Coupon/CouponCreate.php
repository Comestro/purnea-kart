<?php

namespace App\Livewire\Admin\Coupon;

use Illuminate\Support\Str;
use App\Models\Coupon;
use Livewire\Component;

class CouponCreate extends Component
{
    public $code;
    public $discount_type;
    public $discount_value;
    public $expiration_date;
    public $status;
    

    public function rules()
    {
        return [
            'code' => 'required|string|max:255|unique:coupons,code',
            'discount_type' => 'required|in:percentage,fixed,freeShipping',
            'discount_value' => 'required|numeric|min:0',
            'expiration_date' => 'nullable|date|after_or_equal:today',
            'status' => 'nullable|boolean',
        ];
    }
    
    public function store()
    {
        $validateData = $this->validate();
        
        $coupon = Coupon::create([
            'code' => $this->code,
            'discount_type' => $this->discount_type,
            'discount_value' => $this->discount_value,
            'expiration_date' => $this->expiration_date,
            'status' =>$this->status,
        ]);

        if ($coupon) {
            $this->reset(["code","discount_type","discount_value","expiration_date","status"]);
            session()->flash('message','coupon added successfully');
            return redirect()->route('coupon_add');
        }
        else {
            session()->flash('message', 'Unable to add product.');
        }
        

    }
    

    public function render()
    {
        return view('livewire.admin.coupon.coupon-create');
    }
}
