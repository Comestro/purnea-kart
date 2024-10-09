<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class EditBrand extends Component
{

    use WithFileUploads;
    
    public $brandId;
    public $brand_name;
    public $brand_description;
    public $logo;
    public $brand_slug;
    public $old_logo;

    public function mount(Brand $brand )
    {
        $this->brandId=$brand->id;
        $this->brand_name=$brand->brand_name;
        $this->brand_description=$brand->brand_description;
        $this->brand_slug=$brand->brand_slug;
        $this->old_logo=$brand->logo;

    }

    public function updatedBrandName($value)
    {      
        $this->brand_slug = Str::slug($value);
    }
    public function update(){
        $data = $this->validate([
            'brand_name' => 'required|string|max:255',
            'brand_slug' => 'required|string|max:255',
            'brand_description' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($this->logo){
            $logoName = 'c' . time() . '.' . $this->logo->getClientOriginalExtension();
            $this->logo->storeAs('/public/logo/brand' , $logoName, 'public');
        }else{
            $logoName = $this->old_logo;
        }

        Brand::findOrFail($this->brandId)->update([
            'brand_name' => $data['brand_name'],
            'brand_description' => $data['brand_description'],
            'brand_slug' => $data['brand_slug'],
            'logo' => $logoName,
        ]);

        session()->flash('success','Brand updated successfully.');
        return redirect()->route('manage_brand');
    }

    public function render()
    {
        return view('livewire.admin.brand.edit-brand');
    }
}
