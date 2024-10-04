<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class InsertBrand extends Component
{
    use WithFileUploads;
    public $brand_name;
    public $brand_description;
    public $logo;
    public $brand_slug;

    public function rules()
    {
        return [
            'brand_name' => ['required', 'string', 'max:255'],
            'brand_description' => ['required', 'string', 'max:255'],
            'brand_slug' => ['required', 'string', 'max:255'],
            'logo' => ['nullable'],
        ];
    }

    public function updatedBrandname($value)
    {
        $this->brand_slug = Str::slug($value);
    }

    public function store()
    {
        $validateData = $this->validate();
        $logoName = $this->logo ? 'c' . time() . '.' . $this->logo->getClientOriginalExtension() : null;
        $this->logo->storeAs('public/logo/brand', $logoName,'public');

        $brand = Brand::create([
            'brand_name' => $this->brand_name,
            'brand_description' => $this->brand_description,
            'brand_slug' => $this->brand_slug,
            'logo' => $logoName,
        ]);

        $brand ? session()->flash('success', 'Brand added successfully.') : (session()->flash('error', 'Unable to add brand.') && redirect()->route('admin.brands.manage-brand'));

    }

    public function render()
    {
        return view('livewire.admin.brand.insert-brand');
    }
}
