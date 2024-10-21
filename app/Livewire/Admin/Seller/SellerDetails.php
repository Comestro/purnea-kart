<?php

namespace App\Livewire\Admin\Seller;

use App\Models\Seller;
use Livewire\Component;

class SellerDetails extends Component
{
    public $sellerid;

    public $isAprroved = 0;
    public function mount(Seller $sellerid){
        $this->sellerid = $sellerid;
    }
    public function active(){
        Seller::where('id', $this->sellerid->id)->update(['status'=>1]);
    
        $this->isAprroved++;
    }
    public function inactive(){
        Seller::where('id', $this->sellerid->id)->update(['status'=>0]);
        $this->isAprroved--;
    }
    public function render()
    {

        return view('livewire.admin.seller.seller-details');
    }
}
