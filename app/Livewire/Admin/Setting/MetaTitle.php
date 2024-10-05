<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class MetaTitle extends Component
{
    public $meta_title;
    public $isEdit = false;

    public function mount(){
        $setting = Setting::first();
        $this->meta_title = ($setting->meta_title) ? $setting->meta_title : null;
    }
    public function toggle(){
        $this->isEdit = !$this->isEdit;
        $this->meta_title = $this->meta_title ? $this->meta_title : $this->meta_title;
    }

    public function update(){
        
        $data = $this->validate([
            'meta_title' => 'required|string|max:255',
        ]);

        Setting::first()->update($data);
        $this->toggle();
        return redirect()->back()->with('success', 'title updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.setting.meta-title');
    }
}
