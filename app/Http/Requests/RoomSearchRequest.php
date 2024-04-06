<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateRule;
use Illuminate\Support\Facades\Date;

class RoomSearchRequest extends FormRequest
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
            'hotelName' => ['required', 'string'],
            'entryDate' => ['required', 'date', new DateRule],
            'leaveDate' => ['required', 'date', new DateRule],
            'visitorsNumber' => ['required', 'numeric', 'min_digits:'],
        ];
    }
}
