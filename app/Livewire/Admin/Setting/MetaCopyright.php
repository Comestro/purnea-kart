<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class MetaCopyright extends Component
{
    public $copyright;
    public $isEdit = false;

    public function mount()
    {
        $setting = Setting::first();
        $this->copyright = ($setting->copyright) ? $setting->copyright : null;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {

        $data = $this->validate([
            'copyright' => 'required|string|max:255',
        ]);

        Setting::first()->update($data);
        $this->toggle();
        return redirect()->back()->with('success', 'copyright updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.setting.meta-copyright');
    }
}
