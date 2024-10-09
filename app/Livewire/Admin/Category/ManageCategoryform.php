<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;


class ManageCategoryform extends Component
{
    use WithPagination;
    public $search="";

    public function delete(Category $catid){
        $catdel=$catid;
        if($catdel->parent()->exists())
        {
            return redirect()->route('category.index')->with('error','This category has subcategories.Please delete them first.');
        }

        $catdel->delete();
        return redirect()->route('category.index')->with('success','Category deleted successfully');
    }

    public function render()
    {
        $data['category']=Category::where('cat_title','LIKE',"%".$this->search."%")->paginate(3);

        return view('livewire.admin.category.manage-categoryform', $data);
    }
    
}
