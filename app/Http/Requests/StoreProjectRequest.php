<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'        => 'required|max:50',
            'description' => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Il campo Nome deve essere obbligatorio',
            'name.max'             => 'Il campo Nome può avere al massimo 50 caratteri',
            'description.required' => 'Il campo Description deve essere obbligatorio',
            'start_date.required'  => 'Il campo Inizio Data deve essere obbligatorio',
            'end_date.required'    => 'Il campo Fine Data deve essere obbligatorio',
        ];
    }
}
