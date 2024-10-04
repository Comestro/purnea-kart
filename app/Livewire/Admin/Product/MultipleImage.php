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

    public $product;
    public $path; // Single image upload
    public $isEditing = true; // Always in editing mode

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    // Function to delete an image from the database and storage
    public function deleteImage($imageId)
    {
        $image = ProductImage::find($imageId);

        if ($image) {
            // Remove the image from storage
            Storage::delete('public/image/product/' . $image->path);
            // Delete the image record from the database
            $image->delete();
            session()->flash('message', 'Image deleted successfully.');
        }
    }
    

    // Update product images one by one
    public function update()
    {
        // Validate the uploaded image
        $this->validate([
            'path' => 'nullable|image|max:1024', // Validate the image
        ]);

        // Ensure photo is not empty
        if ($this->path) {
            $imageName = "p" . time() . '.' . $this->path->getClientOriginalExtension();
            $this->path->storeAs('public/image/product', $imageName,"public");

            // Save the image to the product_images table
            ProductImage::create([
                'product_id' => $this->product->id,
                'path' => $imageName, // Saving the image path
                'status' => true, // Set the status to true (or you can adjust based on conditions)
            ]);

            // Flash success message and reset the photo input
            session()->flash('message', 'Product image uploaded successfully!');
            $this->path = null; // Clear the input after saving
        }
    }

    public function render()
    {
        return view('livewire.admin.product.multiple-image', [
            'productImages' => $this->product->images, // Pass existing images to the view
        ]);
    }
}
