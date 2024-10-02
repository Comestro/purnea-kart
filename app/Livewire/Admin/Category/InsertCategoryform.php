<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;


class InsertCategoryform extends Component
{
    public $parent_category_id;
    public $cat_title;
    public $image;
    public $cat_description;
    public $cat_slug;

    public function rules()
    {
        return [
            'parent_category_id' => 'nullable|exists:categories,id',
            'cat_title' => ['required', 'string', 'max:255'],
            'cat_slug' => ['required', 'string', 'max:255'],
            'cat_description' => ['required', 'string', 'max:255'],
            'image' => ['nullable'],
        ];
    }

    public function updatedTitle($value)
    {
        $this->cat_slug = Str::slug($value);
    }

    // Method to handle the form submission
    public function store()
    {
        // Validate inputs based on the rules set in the class
        $validatedData = $this->validate();

        if ($this->photo) {
            $imageName = "C" . time() . '.' . $this->photo->getClientOriginalExtension();
            $this->photo->storeAs('public/image/category', $imageName);
        } else {
            $imageName = null;
        }


        // Insert the category into the database
        $category = Category::create([
            'parent_category_id' =>$this->parent_category_id,
            'name' => $this->cat_title,
            'cat_description' => $this->cat_description,
            'cat_slug' => $this->slug,
            'image' => $imageName,
        ]);

        // Redirect with success or error message
        if ($category) {
            session()->flash('success', 'Category added successfully.');
            return redirect()->route('category.index');
        } else {
            session()->flash('error', 'Unable to add category.');
        }
    }

    public function render()
    {
        return view('livewire.admin.category.insert-categoryform');
    }
}
