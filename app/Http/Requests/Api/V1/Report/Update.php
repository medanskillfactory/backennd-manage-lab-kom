<?php

namespace App\Http\Requests\Api\V1\Item;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Update extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_report_id' => 'integer',
            'created_by' => 'integer',
            'date' => 'date',
            'note' => Rule::unique('reports')->ignore($this->item, 'id')
        ];
    }
}
