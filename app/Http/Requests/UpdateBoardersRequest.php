<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBoardersRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'birthday' => 'sometimes|required|date',
            'age' => 'sometimes|required|integer',
            'sex' => 'sometimes|required|in:Male,Female,Other',
            'address' => 'sometimes|required|string',
            'contact_info' => 'sometimes|nullable|string|max:255',
            'program' => 'required|string',

        ];
    }
}
