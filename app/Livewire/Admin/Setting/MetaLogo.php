<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class MetaLogo extends Component
{
    public $meta_logo;
    public $isEdit = false;

    public function mount()
    {
        $setting = Setting::first();
        $this->meta_logo = ($setting->meta_logo) ? $setting->meta_logo : null;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'meta_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // image work
        $image = $this->file('meta_logo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['meta_logo'] = $imageName;

        Setting::first()->update($data);
        $this->toggle();
        return redirect()->back()->with('success', 'logo updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.setting.meta-logo');
    }
}
    