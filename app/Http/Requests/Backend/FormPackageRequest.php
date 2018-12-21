<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class FormPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|min:4',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Paket harus diisi',
            'nama.min' => 'Nama Paket minimal empat karakter',
            'price.required' => 'Harga Paket harus diisi',
            'price.numeric' => 'Harga Paket harus berupa angka'
        ];
    }
}
