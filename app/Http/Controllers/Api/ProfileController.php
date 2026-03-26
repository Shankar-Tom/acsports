<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Shankar\LaravelBasicSetting\Traits\ApiResponse;

class ProfileController extends Controller
{
    use ApiResponse;
    public function getProfile()
    {
        return  $this->successResponse(data: auth()->user());
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return $this->validationErrorResponse(status: 422, errors: $validator->errors());
        }

        $user = auth()->user();
        $user->update($request->all());
        return $this->successResponse(data: $user);
    }
}
