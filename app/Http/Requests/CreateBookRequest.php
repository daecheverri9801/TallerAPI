<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'id_book' => ['integer', 'required'],
            'book_name' => ['string', 'required', 'max:200'],
            'book_author_name' => ['string', 'required', 'max:256'],
            'book_price' => ['numeric', 'required', 'decimal:2'],
            'book_stock' => ['integer', 'required'],
            'book_status' => ['boolean', 'required']
        ];
    }
}
