<?php

namespace App\Services\Users\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Class LoginRequest
 * @package App\Services\Users\Requests
 * @author Richard Guevara
 */
class LoginRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'auth_attempt:email'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if (!Auth::attempt($this->only(['email', 'password']))) {
            throw new HttpResponseException(
                response()->json(
                    $this->formatErrors($validator),
                    401
                )
            );
        }
        parent::failedValidation($validator);
    }


    
    public function withValidator($validator)
    {
        $validator->addExtension('auth_attempt', function ($attribute, $value, $parameters, $validator) {
            if (Auth::attempt(['email' => $this->input('email'), 'password' => $value])) {
                return true;
            }
            return false;
        });

        $validator->addReplacer('auth_attempt', function ($message, $attribute, $rule, $parameters) {
            return 'Authentication failed. Invalid email or password.';
        });
    }

    protected function formatErrors(Validator $validator)
    {
        return [
            'status' => false,
            'data' => [
                'message' => 'Authentication failed. Invalid email or password.',
                'errors' => [
                    'password' => [
                        'Authentication failed. Invalid email or password.'
                    ]
                ]
            ]
        ];
    }
    
}
