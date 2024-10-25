<?php 

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;

class CallingProduct extends Component 
{
    use WithPagination;

    public $month = "";
    public $search = "";

    public function status($id)
    {
        $product = Product::find($id);
    
        if ($product) {
            $product->status = !$product->status;
            $product->save();
    
            session()->flash('success', 'Category status updated successfully.');
        } else {
            session()->flash('error', 'Category not found.');
        }
    
        return redirect()->route('product.index');
    }

    public function render() 
    {
        $data['products'] = Product::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'LIKE', "%" . $this->search . "%")
                    ->orWhereHas('category', function ($query) {
                        $query->where('cat_title', 'LIKE', "%" . $this->search . "%");
                    })
                    ->orWhereHas('brand', function ($query) {
                        $query->where('brand_name', 'LIKE', "%" . $this->search . "%");
                    });
            })
            ->when($this->month, function ($query) {
               
                    $query->whereMonth('created_at', 'LIKE', "%" . $this->month . "%");
               
            })
            ->paginate(5);

        return view('livewire.admin.product.calling-product', $data);
    }

    public function delete($id) 
    {
        Product::findOrFail($id)->delete();
        session()->flash('message', 'Product deleted successfully.');
    }
}
