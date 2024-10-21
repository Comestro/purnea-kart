<?php

namespace App\Livewire\Vendor\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Addbrand extends Component
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
            'logo' => ['nullable']
        ];
    }

    public function updatedBrandName($value)
    {
        // Generate slug from brand name
        $this->brand_slug = Str::slug($value);
    }

    public function store()
    {
        // Validate the data
        $validatedData = $this->validate();

        // Handle logo upload
        $logoName = $this->logo ? 'c' . time() . '.' . $this->logo->getClientOriginalExtension() : null;

        if ($this->logo) {
            $this->logo->storeAs('public/logo/brand', $logoName, 's3');
        }

        // Create the brand
        $brand = Brand::create([
            'brand_name' => $this->brand_name,
            'brand_description' => $this->brand_description,
            'brand_slug' => $this->brand_slug,
            'logo' => $logoName,
        ]);

        // Flash message and redirect
        if ($brand) {
            session()->flash('message', 'Brand added successfully.');
            return redirect()->route('vendor.brand-list');
        } else {
            session()->flash('message', 'Unable to add brand.');
        }
    }

    public function render()
    {
        return view('livewire.vendor.brand.addbrand');
    }
}
