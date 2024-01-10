<?php

namespace App\Http\Requests;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreOwnerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255'/*, 'unique:' . User::class*/],
            'status' => ['required', 'string'],
            'id_number' => ['required', 'numeric', 'digits_between:10,11', 'starts_with:1,2', 'unique:' . Owner::class]
        ];
    }


    public function messages(): array
    {
        return [
            'id_number.unique' => 'Employee already took a gift',
        ];
    }
}
