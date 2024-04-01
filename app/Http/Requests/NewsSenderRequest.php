<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsSenderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'notificationEmail' => ['required', 'email'],
        ];
    }
}
