<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewFurniture extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:furnitures',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|numeric',
            'color' => 'required',
            'wood' => 'required',
            'image' => 'required'
        ];
    }
}
