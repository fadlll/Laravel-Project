<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kode_buku' => 'required|min:3',
            'judul' => 'required|min:3',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'kode_buku.required' => 'Kode buku wajib diisi.',
            'kode_buku.min' => 'Kode buku minimal 3 karakter.',
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.min' => 'Judul buku minimal 3 karakter.',
            'penulis.required' => 'Penulis buku wajib diisi.',
            'penerbit.required' => 'Penerbit buku wajib diisi.',
            'tahun_terbit.required' => 'Tahun terbit buku wajib diisi.',
            'tahun_terbit.numeric' => 'Tahun terbit buku harus berupa angka.',
            'stok.required' => 'Stok buku wajib diisi.',
            'stok.integer' => 'Stok buku harus berupa angka.',
            'stok.min' => 'Stok buku tidak boleh kurang dari 0.',
        ];
    }
}
