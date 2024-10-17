<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;


class ManageCategoryform extends Component
{
    public $catId;
    
    public $isActive = false;

    use WithPagination;
    public $search="";

    public function status($id)
    {
        $this->catId=$id;

        
     
        if($this->isActive)
        {
            Category::where('id',$this->catId)->update(['status' => 1]);
            $this->isActive = !$this->isActive;
        }
        else{
            Category::where('id',$this->catId)->update(['status' => 0]);
            $this->isActive = !$this->isActive;
        }

       
        return redirect()->route('manage_category');
    }
    public function render()
    {
        $data['category']=Category::where('status',1)->where('cat_title','LIKE',"%".$this->search."%")->paginate(3);

        return view('livewire.admin.category.manage-categoryform', $data);
    }
    
    
}
