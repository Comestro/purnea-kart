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
    public $status = false;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:200|dimensions:ratio=5/1',
            'expiry_date' => 'nullable|date|after_or_equal:today',
            'alt' => 'required|string|max:255',
            'status' => 'nullable|boolean',

        ];
    }

    public function messages()
    {
        return [
            'image_path.dimensions' => 'The banner image must be exactly of 1500x300 pixels.',
        ];
    }


    public function store()
    {
        $validateData = $this->validate();

        $imageName = $this->image_path ? 'c' . time() . '.' . $this->image_path->getClientOriginalExtension() : null;
        $this->image_path->storeAs('public/image/banner', $imageName, "public");

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


    public function deleteBanner($id)
    {
        Banner::findOrFail($id)->delete();

        session()->flash('message', 'banner deleted successfully.');
    }

    public function render()
    {
        $data['banners'] = Banner::paginate(3);

        return view('livewire.admin.banner.create-banner-form', $data);
    }

    public function toggleStatus($bannerId)
    {
        $banner = Banner::find($bannerId);
        $banner->status = !$banner->status;
        $banner->save();

        session()->flash('success', 'Banner status updated successfully.');
    }
}
