<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ManageBrand extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    public $logo;
    public $brandId;
    public $confirmingDelete = false;

    public function render()
    {
        $brands = Brand::where('status',1)->where('brand_name', 'like', '%'.$this->search.'%')
            ->paginate(5);

        return view('livewire.admin.brand.manage-brand', ['brands' => $brands]);
    }


    public function deleteBrand()
    {
        if ($this->confirmingDelete) {
            $brand = Brand::find($this->brandId);            
            if ($brand->image) {
                Storage::delete('public/logo/brand/' . $brand->image);
            }
            $brand->delete();
            $this->confirmingDelete = false;
            session()->flash('message', 'Brand deleted successfully.');
        }
    }

    public function confirmDelete($brandId)
    {
        $this->brandId = $brandId;
        $this->confirmingDelete = true;
    }
}
