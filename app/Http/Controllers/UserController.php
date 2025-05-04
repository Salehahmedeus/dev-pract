<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(Request $request)
    {


        $input = $request->validate([
            'username' => ['string', 'required'],
            'name' => ['string', 'required'],
            'password' => ['required', 'string'],
        ]);
        $user=User::create([
            'username' => $input['username'],
            'name' => $input['name'],
            'password' => Hash::make($input['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully.',
            'token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    }


    public function login(Request $request)
    {
        $credentials = request(['username', 'password']);
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'message' => ['The provided credentials are incorrect.'],
            ]);
        }
        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',

        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return response()->json([
            'data' => 'Successfully logged out'
        ]);
    }
}
