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
    public $bannerId;
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

        $current_date = now(); 
        if ($banner->expiry_date < $current_date) {
            $banner->update(['status' => 'inactive']);
        }
        if ($banner) {
            session()->flash('message', 'Banner added successfully.');
           return redirect()->back();
         
        } else {
            session()->flash('message', 'Unable to add banner.');
        }


    }
    

    public function deleteBanner($id)
    {
        Banner::findOrFail($id)->delete();

        session()->flash('message', 'banner deleted successfully.');
    }
    
    public function render()
    {
        $data['banners']=Banner::all();

        return view('livewire.admin.banner.create-banner-form',$data);
    }
    public function toggleStatus($bannerId)
    {
        $banner = Banner::find($bannerId);
        $banner->status = !$banner->status;
        $banner->save();

        session()->flash('success', 'Banner status updated successfully.');
    }
}
