<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ManageBrand extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $logo;
    public $brandId;
    public $confirmingDelete = false;

    public function status($id)
    {
        $brand = Brand::find($id);
        
        if ($brand) {
            $brand->status = !$brand->status;
            $brand->save();

            session()->flash('success', 'Brand status updated successfully.');
        } else {
            session()->flash('error', 'Brand not found.');
        }
    }

    public function deleteBrand()
    {
        if ($this->confirmingDelete) {
            $brand = Brand::find($this->brandId);

            if ($brand) {
                if ($brand->image) {
                    Storage::delete('public/logo/brand/' . $brand->image);
                }
                
                $brand->delete();
                $this->confirmingDelete = false;
                session()->flash('message', 'Brand deleted successfully.');
            } else {
                session()->flash('error', 'Brand not found.');
            }
        }
    }

    public function confirmDelete($brandId)
    {
        $this->brandId = $brandId;
        $this->confirmingDelete = true;
    }

    public function render()
    {
        $brands = Brand::where('status', 1)
            ->where('brand_name', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.admin.brand.manage-brand', ['brands' => $brands]);
    }
}
