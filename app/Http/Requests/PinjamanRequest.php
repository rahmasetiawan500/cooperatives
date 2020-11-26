<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'member_id' => "required|integer",
            'nama_anggota' => "required|max:255",
            'nama_admin' => "required|max:255",
            'tanggal_pinjaman' => "date",
            'nilai_pinjaman' => "required|max:255",
            'lama_pinjaman' => "required|max:255",
            'alasan_pinjaman' => "required|max:255"
           
        ];
    }
}
