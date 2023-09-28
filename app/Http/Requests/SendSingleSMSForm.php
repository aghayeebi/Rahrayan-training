<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendSingleSMSForm extends FormRequest
{


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if(\Auth::user())
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'receiver_number' => 'required|regex:/^09[0-9]{9}$/',
            'message' => 'required'
        ];
    }
}
