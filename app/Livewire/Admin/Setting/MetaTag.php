<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class MetaTag extends Component
{
    public $meta_tag;
    public $isEdit = false;

    public function mount(){
        $setting = Setting::first();
        $this->meta_tag = ($setting->meta_tag) ? $setting->meta_tag : null;
    }

    public function toggle(){
        $this->isEdit = !$this->isEdit;
    }

    public function update(){
        $data = $this->validate([
            'meta_tag' => 'required|string|max:255',
        ]);

        Setting::first()->update($data);
        $this->toggle();
        return redirect()->back()->with('success','tag updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.setting.meta-tag');
    }
}
