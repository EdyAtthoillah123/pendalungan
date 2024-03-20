<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKatalogRequest extends FormRequest
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
            'image' => 'required|url', // Image harus diisi dan harus berupa URL
            'name_product' => 'required|string|max:100', // Nama produk harus diisi, string, dan maksimal 100 karakter
            'description' => 'nullable|string', // Deskripsi bisa kosong atau string
            'price' => 'required|integer', // Harga harus diisi dan harus integer
            'video' => 'nullable|url', // Video bisa kosong atau berupa URL
            'id_category' => 'required|integer', // ID kategori harus diisi dan harus integer
        ];
    }
}
