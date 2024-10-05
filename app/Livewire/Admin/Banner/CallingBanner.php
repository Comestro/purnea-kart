<?php

namespace App\Livewire\Admin\Banner;
use App\Models\Banner;
use Livewire\Component;

class CallingBanner extends Component
{
    public function render()
    {
        $data['banners']=Banner::all();
        return view('livewire.admin.banner.calling-banner',$data);
    }
}
