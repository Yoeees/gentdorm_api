<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoardersRequest extends FormRequest
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
            //
            'school_id' => 'required|string|max:9',
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'sex' => 'required|in:Male,Female,Other',
            'address' => 'required|string',
            'contact_info' => 'nullable|string|max:255',
            'program' => 'required|string',

        ];
    }
}
