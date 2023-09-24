<?php

namespace App\Services\Stores\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class addStoreRequest
 * @package App\Services\Stores\Requests
 * @author Richard Guevara
 */
class addStoreRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'unique:store,email'],
            'name' => ['required'],
            'phone' => ['required'],
            'fax' => ['nullable'],
            'address' => ['required'],
            'image' => ['nullable','mimes:jpeg,png,jpg,gif'],
            'description' => ['nullable'],
        ];
    }

    
}
