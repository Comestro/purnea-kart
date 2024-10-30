<?php

namespace App\Livewire\Admin\Seller;

use App\Models\Seller;
use Livewire\Component;

class SellerDetails extends Component
{
    public $seller; 
    public $isApproved; 

    public function mount(Seller $sellerId)
    {
       
        $this->seller = $sellerId; 
        $this->isApproved = $this->seller->status; 
    }

    
    public function activate()
    {
       
        $this->seller->update(['status' => 1]); 
        $this->isApproved = true;
        dd('fucn2');

       
    }

    public function deactivate()
    {
        
        
        $this->seller->update(['status' => 0]); 
        $this->isApproved = false;
        dd("ljdsfbnfjoa");
       
      
    }

    public function render()
    {
        return view('livewire.admin.seller.seller-details'  );
    }
}
