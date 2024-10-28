<?php

namespace App\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CallingBanner extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $bannerId;
    public $title;
    public $image_path;
    public $expiry_date;
    public $alt;
    public $status;
    public $existingImage;
    public $isModalOpen = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'expiry_date' => 'nullable|date|after_or_equal:today',
        'alt' => 'required|string|max:255',
        'status' => 'nullable|boolean',
    ];

    public function render()
    {
        $data['banners'] = Banner::paginate(2);

        return view('livewire.admin.banner.calling-banner', $data);
    }

    public function openModal($bannerId = null)
    {
        // $this->resetInputFields();
        $this->bannerId = $bannerId;

        
            $banner = Banner::find($this->bannerId);
            $this->title = $banner->title;
            $this->expiry_date = $banner->expiry_date;
            $this->alt = $banner->alt;
            $this->existingImage = $banner->image_path;
        

        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->reset(['image_path', 'existingImage']);
    }

    
   


    public function updateBanner()
    {
        $this->validate();

        $banner = Banner::findOrFail($this->bannerId);
        $banner->title = $this->title;
        $banner->expiry_date = $this->expiry_date;
        $banner->alt = $this->alt;

        if ($this->image_path) {
            if ($this->existingImage) {
                Storage::delete('public/image/banner/' . $this->existingImage);
            }

            $imagePath = $this->image_path->store('image/banner', 'public');
            $banner->image_path = basename($imagePath);
        }

        $banner->save();
        $this->closeModal();

        session()->flash('success', 'Banner updated successfully.');
    }

    public function toggleStatus($bannerId)
    {
        $banner = Banner::findOrFail($bannerId);
        $banner->status = !$banner->status;
        $banner->save();

        session()->flash('success', 'Banner status updated successfully.');
    }
    public function deleteBanner($id)
    {
        Banner::findOrFail($id)->delete();

        session()->flash('message', 'banner deleted successfully.');
    }
}
