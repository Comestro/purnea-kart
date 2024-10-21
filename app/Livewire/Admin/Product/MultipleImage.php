<?php

namespace App\Livewire\Admin\Product;

use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class MultipleImage extends Component
{
    use WithFileUploads;

    // public $product;
    public $path; 
    public $isEditing = true; 
    public $p_id;

    public function mount(Product $product){
        $this->p_id = $product->id;
    }

    // public function mount(Product $product)
    // {
    //     $this->product = $product;
    // }

    public function deleteImage($imageId)
    {
        $image = ProductImage::find($imageId);

        if ($image) {
            Storage::delete('public/image/product/' . $image->path);
            $image->delete();
            session()->flash('message', 'Image deleted successfully.');
        }
    }
    

    public function update()
    {
        $this->validate([
            'path' => 'nullable|image|max:1024', 
        ]);

        if ($this->path) {
            $imageName = "p" . time() . '.' . $this->path->getClientOriginalExtension();
            $this->path->storeAs('public/image/product', $imageName,"s3");
            ProductImage::create([
                'product_id' => $this->p_id,
                'path' => $imageName, 
                'status' => true, 
            ]);

            session()->flash('message', 'Product image uploaded successfully!');
            $this->path = null; // Clear the input after saving
        }
    }

    public function render()
    {
        $data['productImages'] = Product::find($this->p_id)?->images ?? [];
        return view('livewire.admin.product.multiple-image',$data
        );
    }
}
