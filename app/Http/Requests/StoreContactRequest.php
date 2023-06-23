<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullName'=> 'required|string|max:100',
            'email'=> 'required|string|max:50',
            'phone'=> 'required|string|max:50',
            'message'=> 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'fullName.required' => 'The full name field is required.',
            'fullName.string' => 'The full name must be a string.',
            'fullName.max' => 'The full name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.string' => 'The email must be a string.',
            'email.max' => 'The email may not be greater than :max characters.',
            'phone.required' => 'The phone field is required.',
            'phone.string' => 'The phone must be a numeric value.',
            'phone.max' => 'The phone may not be greater than :max characters.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(Response()->json([
            'success' => false,
            'message' => 'The given data is invalid.',
            'errors' => $validator->errors(),
        ], 422));
    }
}
