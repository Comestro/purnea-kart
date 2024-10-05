<?php

namespace App\Livewire\Admin\Banner;
use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateBannerForm extends Component
{
    use WithFileUploads;
    public $title;
    public $image_path;
    public $alt;
    public $expiry_date;
    public $status=false;
    
     public function rules(){
        return[
            'title' => ['required', 'string', 'max:255'],
            'image_path' => ['nullable'],
            'expiry_date' => 'nullable|date|after_or_equal:today',
            'alt' => 'required|string|max:255',
            'status' => 'nullable|boolean',

        ];
        
     }
     public function store()
    {
        $validateData = $this->validate();

        $imageName = $this->image_path ? 'c' . time() . '.' . $this->image_path->getClientOriginalExtension() : null;
        $this->image_path->storeAs('public/image/banner', $imageName,"public");

        $banner = Banner::create([
            'title' => $this->title,
            'expiry_date' => $this->expiry_date,
            'alt' => $this->alt,
            'image_path' => $imageName,
            'status' => $this->status, 

        ]);
        if ($banner) {
            session()->flash('message', 'Banner added successfully.');
           return redirect()->back();
         
        } else {
            session()->flash('message', 'Unable to add banner.');
        }


    }
    
    public function render()
    {
        $data['banners']=Banner::all();

        return view('livewire.admin.banner.create-banner-form',$data);
    }
}
