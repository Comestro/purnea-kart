<?php

namespace App\Livewire\Admin\Seller;

use App\Models\Seller;
use Livewire\Attributes\On;
use Livewire\Component;

class SellerDetails extends Component
{
    public $seller; 
    public $sellerMain;
    

public function mount(Seller $sellerId)
    {

        $this->sellerMain = $sellerId; 
       
       
    }

    public function UpdateSellerStatus( $id){
        
      
        Seller::find($id)->update([
            'status' => $this->seller->status ? 0 : 1
           
        ]);
       
        $this->dispatch('refresh-seller');
       
    }


    #[On('refresh-seller')]
    public function render()
    {   
        $this->seller=Seller::find($this->sellerMain->id);
        return view('livewire.admin.seller.seller-details',$this->seller);
    }
}
