<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Shankar\LaravelBasicSetting\Traits\ApiResponse;

class AuthController extends Controller
{
    use ApiResponse;
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validation->fails()) {
            return $this->validationErrorResponse(status: 422, errors: $validation->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        Auth::login($user);
        $token = $user->createToken('auth-token')->plainTextToken;

        return $this->successResponse(data: ['user' => $user, 'token' => $token], message: 'User registered successfully');
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validation->fails()) {
            return $this->validationErrorResponse(status: 422, errors: $validation->errors());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user'])) {
            // Generate token or session
            $user = Auth::user();
            $token = $user->createToken('auth-token')->plainTextToken;
            // Return user data with token
            return $this->successResponse(data: ['user' => $user, 'token' => $token], message: 'User logged in successfully');
        }

        return $this->errorResponse(message: 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->successResponse(message: 'User logged out successfully');
    }
}
