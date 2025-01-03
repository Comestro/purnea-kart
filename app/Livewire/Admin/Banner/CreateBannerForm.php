<?php

namespace App\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class CreateBannerForm extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $title;
    public $image_path;
    public $bannerId;
    public $alt;
    public $expiry_date;
    public $editId;
    public $status = false;
    public $isModalOpen = false;


    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif',
            'expiry_date' => 'nullable|date|after_or_equal:today',
            'alt' => 'required|string|max:255',
            'status' => 'nullable|boolean',

        ];
    }
    

    public function messages()
    {
        return [
            'image_path.dimensions' => 'The image must be exactly of 1500x300 pixels.',
        ];
    }
    


    public function store()
    {
        $validateData = $this->validate();

        $imageName = $this->image_path ? 'c' . time() . '.' . $this->image_path->getClientOriginalExtension() : null;
        $this->image_path->storeAs('public/image/banner', $imageName, "s3");

        $banner = Banner::create([
            'title' => $this->title,
            'expiry_date' => $this->expiry_date,
            'alt' => $this->alt,
            'image_path' => $imageName,
            'status' => $this->status,

        ]);


        if ($banner) {
            $this->reset(["title", "expiry_date", "alt", "image_path", "status"]);
            session()->flash('message', 'Banner added successfully.');
            return redirect()->back();
        } else {
            session()->flash('message', 'Unable to add banner.');
        }
    }


    

    public function render()
    {

        return view('livewire.admin.banner.create-banner-form', );
    }

  
}
