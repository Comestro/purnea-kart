<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class MetaDescription extends Component
{
    public $meta_description;
    public $isEdit = false;

    public function mount()
    {
        $setting = Setting::first();
        $this->meta_description = ($setting->meta_description) ? $setting->meta_description : null;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'meta_description' => 'required|string|max:255',
        ]);

        Setting::first()->update($data);
        $this->toggle();
        return redirect()->back()->with('success', 'description updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.setting.meta-description');
    }
}
