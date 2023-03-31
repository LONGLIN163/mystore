<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SofaFormRequest extends FormRequest
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
            'sofa-name'=> 'required',
            'brand'=> 'required',
            'year'=> ['required', 'integer']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            //'sofa-name'=> strip_tags($this->sofa-name),
            'sofa-name'=> strip_tags($this['sofa-name']),
            'brand'=> strip_tags($this->brand),
            'year'=> strip_tags($this->year)
        ]);
    }
}
