<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamRequest extends FormRequest
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
            'nama_admin' => "required|max:255",
            'nama_peminjam' => "required|max:255",
            'jumlah_pinjaman' => "required|integer",
            'tanggal_pinjam' => "date",
            'alasan_pinjam' => "required|max:255"
        ];
    }
}
