<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'text' => 'required|min:10',
            'img' => 'mimes:jpg,png,jpeg,gif',
            'category_id' => 'required|array',
            'category_id.*' => 'integer',
            'client' => 'nullable|required',
            'url' => 'required|min:3',
            'created_date' => 'required|date',
        ];
    }
}
