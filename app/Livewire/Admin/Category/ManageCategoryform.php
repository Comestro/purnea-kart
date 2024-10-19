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
        $category = Category::find($id);
    
        if ($category) {
            $category->status = !$category->status;
            $category->save();
    
            session()->flash('success', 'Category status updated successfully.');
        } else {
            session()->flash('error', 'Category not found.');
        }
    
        return redirect()->route('manage_category');
    }
    public function render()
    {
        // $data['category']=Category::where('status',1)->where('cat_title','LIKE',"%".$this->search."%")->paginate(3);
        $data['category']=Category::where('cat_title','LIKE',"%".$this->search."%")->paginate(10);

        return view('livewire.admin.category.manage-categoryform', $data);
    }
    
    
}
