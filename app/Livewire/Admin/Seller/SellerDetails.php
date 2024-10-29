<?php

namespace App\Livewire\Admin\Seller;

use App\Models\Seller;
use Livewire\Component;

class SellerDetails extends Component
{
    public $seller; 
    public $isApproved = 0; 

    public function mount($sellerId)
    {
        $this->seller = Seller::findOrFail($sellerId); 
        $this->isApproved = $this->seller->status; 
    }

    public function activate()
    {
        $this->seller->update(['status' => 1]); 
        $this->isApproved = 1;
    }

    public function deactivate()
    {
        $this->seller->update(['status' => 0]); 
        $this->isApproved = 0;
    }

    public function render()
    {
        return view('livewire.admin.seller.seller-details', [        
        ]);
    }
}
