<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSuperheroRequest extends FormRequest
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
            'id'           => 'unique',
           'name'          => 'string',
           'fullName'      => 'string',
           'strength'      => 'int|min:3',
           'speed'         => 'int|min:3',
           'durability'    => 'int|min:3',
           'power'         => 'int|min:3',
           'combat'        => 'int|min:3',
           'race'          => 'int',
           'height/0'      => 'string',
           'height/1'      => 'string',
           'weight/0'      => 'string',
           'weight/1'      => 'string',
           'eyeColor'      => 'string',
           'hairColor'     => 'string',
           'publisher'     => 'string',
        ];
    }
}
