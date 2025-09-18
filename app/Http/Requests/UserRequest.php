<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $userId = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,' . $userId,
            'password' => $userId ? 'nullable|min:6|confirmed' : 'required|min:6|confirmed',
            'lang' => $userId ? 'nullable|string|max:255' : 'required|string|max:255',
            'type' => $userId ? 'nullable|string|max:255' : 'required|string|max:255',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ];
    }
}

