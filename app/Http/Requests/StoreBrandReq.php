<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandReq extends FormRequest
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
            'brand_name' => 'required|string|max:255',
            'brand_description' => 'required|string|max:500',
            'brand_slug' => 'required|string|max:255|unique:brands,brand_slug',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8048',
        ];
    }
}
