<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            //
            
            'nama' => "required|max:255",
            'email' => "email:rfc,dns",
            'jeniskelamin' => "required|in:laki-laki,perempuan",
            'tempat' => "required|max:255",
            'lahir' => "date",
            'pekerjaan' => "required|max:255",
            'notelp' => "required|integer",
            'alamat' => "required|max:255"
        ];
    }
}
