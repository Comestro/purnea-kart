<?php

namespace App\Livewire\Public;

use Livewire\Component;

class ProductReview extends Component
{
    public $step = 1;

    public function nextStep(){
        $this->step++;
    }
    public function prevStep(){
        $this->step--;
    }

    public function render()
    {
        return view('livewire.public.product-review');
    }
}
