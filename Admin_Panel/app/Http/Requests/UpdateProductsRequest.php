<?php

namespace App\Http\Requests;

use App\Http\traits\Api_Response_Trait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Gate;

class UpdateProductsRequest extends FormRequest
{
    use Api_Response_Trait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Gate::authorize('update-product');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_en'=>['required', 'string' ,'max:255', 'min:2'],
            'name_ar'=>['required', 'string' ,'max:255', 'min:1'],
            'price' =>['required', 'numeric', 'max:999999', 'min:5'],
            'quantity'=>['required', 'integer', 'max:1000', 'min:1'],
            'desc_en'=>['nullable','string' ,'max:255', 'min:4'],
            'desc_ar'=>['nullable','string' ,'max:255', 'min:4'],
            'subcate_id'=>['required', 'integer', 'exists:subcategories,id' ],
            'brand_id'=>['nullable', 'integer','exists:brands,id'],
            'status'=>['required', 'integer','between:0,1' ],
            'image'=>['nullable', 'max:1000', 'mimes:png,jpg,jpeg'],
            // '_method'=>['required']
        ];
    }
    
    // protected function failedValidation(Validator $validator)
    // {
    //     // if ($this->expectsJson()){
    //     //     throw new HttpResponseException(response()->json($this->Api_Response(403, 'validation error', $validator->errors())));
    //     // } else {
    //     //     return redirect()->back()->withErrors($validator->errors());
    //     // }
    // }
}
