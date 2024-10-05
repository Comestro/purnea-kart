<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

use Livewire\Features\SupportFileUploads\WithFileUploads;

class ManageBrand extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $searchTerm;
    public $brand_name;
    public $brand_description;
    public $brand_slug;
    public $brand_logo;
    protected $rules = [
        "brand_name" => "required|string|max:255",
        "brand_description" => "required|string|max:255",
        "brand_slug" => "required|string|max:255",
        "logo" => "required|string|max:255",
    ];
    public function render()
    {
        $brands = Brand::where('brand_name', 'like', '%' . $this->searchTerm . '%')->orWhere('brand_name', 'like', '%' . $this->searchTerm . '%')->paginate(5);
        return view('livewire.admin.brand.manage-brand', ['brands' => $brands]);
    }
}
