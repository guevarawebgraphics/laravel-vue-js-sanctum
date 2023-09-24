<?php

namespace App\Http\Controllers\Api;

use App\Services\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\Users\Repositories\UserRepositoryInterface;
use App\Services\Users\Requests\registerRequest;

class RegisterController extends Controller
{

    function __construct(UserRepositoryInterface $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }
    
    public function registerUser(registerRequest $request)
    {
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}