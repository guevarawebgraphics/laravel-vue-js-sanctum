<?php

namespace App\Services\Stores\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class updateStoreRequest
 * @package App\Services\Stores\Requests
 * @author Richard Guevara
 */
class updateStoreRequest extends FormRequest
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
            'email' => ['required'],
            'name' => ['required'],
            'phone' => ['required'],
            'fax' => ['nullable'],
            'address' => ['required'],
            'image' => ['nullable','mimes:jpeg,png,jpg,gif'],
            'description' => ['nullable'],
        ];
    }

    
}
