<?php

namespace App\Http\Controllers\Api;

use App\Services\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\Users\Repositories\UserRepositoryInterface;
use App\Services\Users\Requests\loginRequest;
use Session;



class LoginController extends Controller
{

    function __construct(UserRepositoryInterface $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }
    
    public function loginUser(loginRequest $request)
    {
        try {

            $data = $request->only('email','password');
            $user = $this->userRepository->fetchUser($data);
            $token = $user->createToken("API TOKEN")->plainTextToken;
            

            $input = [];
            $input['api_token'] = $token;
            $update = $this->userRepository->updateData($user->id, $input);
            Session::put('api_token', $token);


            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $token
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}