<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpananRequest extends FormRequest
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
            'nama_admin' => "required|max:255",
            'nama_anggota' => "required|max:255",
            'jumlah_simpanan' => "required|max:255",
            'tanggal_simpanan' => "date"
        ];
    }
}
