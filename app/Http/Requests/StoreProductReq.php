<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_price' => ['nullable', 'numeric', 'lt:price'],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug'],
            'quantity' => ['required', 'integer', 'min:0'],
            'sku' => ['required', 'string', 'max:255'],
            'vendor_id' => 'nullable', 'exists:vendors,id',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable', 'exists:brands,id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Product name is required.',
            'price.required' => 'Product price is required.',
            'discount_price.required' => 'Product discount price is required.',
            'description.required' => 'Product description is required.',
            'quantity.required' => 'Product quantity is required.',
            'category_id.required' => 'Product category ID is required.',
            'vendor_id.required' => 'Product vendor ID is required.',
            'brand_id.required' => 'Product brand ID is required.',
            'sku.required' => 'Product SKU is required.',
            'category_id.exists' => 'The selected category ID is invalid.',
            'vendor_id.exists' => 'The selected vendor ID is invalid.',
            'brand_id.exists' => 'The selected brand ID is invalid.',
        ];
    }
}
