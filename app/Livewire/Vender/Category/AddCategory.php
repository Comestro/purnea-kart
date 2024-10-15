<?php

namespace App\Livewire\Vender\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AddCategory extends Component
{
    use WithFileUploads;
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

    public function updatedCatTitle($value)
    {
        // dd("testing");
        $this->cat_slug = Str::slug($value);
    }

    // Method to handle the form submission
    public function store()
    {
        // Validate inputs based on the rules set in the class
        $validatedData = $this->validate();

       
            $imageName = $this->image ? "C" . time() . '.' . $this->image->getClientOriginalExtension() : null;
            $this->image->storeAs('public/image/category', $imageName,'public');
      


        // // Insert the category into the database
        $category = Category::create([
            'parent_category_id' =>$this->parent_category_id,
            'cat_title' => $this->cat_title,
            'cat_description' => $this->cat_description,
            'cat_slug' => $this->cat_slug,
            'image' => $imageName,
        ]);

        

        // Redirect with success or error message
        if ($category) {
            session()->flash('message', 'Category added successfully.');
           return redirect()->route('vendor.category-list');
         
        } else {
            session()->flash('message', 'Unable to add category.');
        }
    }

    public function render()
    {
        $data['parent']=Category::where('parent_category_id',Null)->get();
        return view('livewire.vender.category.add-category',$data);
    }
}
