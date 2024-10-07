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

    public function deleteBrand()
    {
        if ($this->confirmingDelete) {
            $brand = Brand::find($this->brandId);
            
            if ($brand) {
                if ($brand->logo) {
                    Storage::delete('public/logo/brand/' . $brand->logo);
                }
                $brand->delete();
                session()->flash('message', 'Brand deleted successfully.');
            } else {
                session()->flash('error', 'Brand not found.');
            }
            
            $this->resetConfirmation();
        }
    }

    public function confirmDelete($brandId)
    {
        $this->brandId = $brandId;
        $this->confirmingDelete = true;
    }

    public function resetConfirmation()
    {
        $this->confirmingDelete = false;
        $this->brandId = null;
    }

    public function render()
    {
        $brands = Brand::where('brand_name', 'like', '%'.$this->search.'%')
            ->paginate(5);

        return view('livewire.admin.brand.manage-brand', ['brands' => $brands]);
    }
}
