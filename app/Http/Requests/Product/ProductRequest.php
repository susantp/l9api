<?php

namespace App\Http\Requests\Product;

use App\Enum\ProductType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ProductRequest extends FormRequest
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
            'inventory_id' => ['nullable'],
            'title' => ['required', 'string', 'max:200'],
            'type' => [new Enum(ProductType::class)],
            'length' => ['nullable'],
            'width' => ['nullable'],
            'height' => ['nullable'],
            'diameter' => ['nullable'],
            'product_weight' => ['required'],
            'shipping_weight' => ['required'],
            'combo' => ['nullable', 'json'],
        ];
    }
}
