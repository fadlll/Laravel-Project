<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAnggotaRequest extends FormRequest
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
            'nama' => 'required|min:3',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'tgl_lhr' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama anggota wajib diisi.',
            'nama.min' => 'Nama anggota minimal 3 karakter.',
            'alamat.required' => 'Alamat anggota wajib diisi.',
            'no_telp.required' => 'Nomor telepon anggota wajib diisi.',
            'no_telp.numeric' => 'Nomor telepon anggota harus berupa angka.',
            'tgl_lhr.required' => 'Tanggal lahir anggota wajib diisi.',
            'tgl_lhr.date' => 'Tanggal lahir anggota harus berupa tanggal yang valid.',
        ];
    }
}
