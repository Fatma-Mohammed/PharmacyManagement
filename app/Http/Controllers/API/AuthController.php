<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Http\Requests\RegisterationRequest;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
		$user = User::where('email', $request->email)->first();

		if (!$user || !Hash::check($request->password, $user->password)) {
			throw ValidationException::withMessages([
				'email' => ['Incorrect credentials'],
			]);
		}

		$token = $user->tokens()->where('name', $request->device_name)->first();

		if (!$token)
			return $user->createToken($request->device_name)->plainTextToken;

		$token->update([
			'token' => hash('sha256', $plainTextToken = Str::random(80))
		]);

		return $plainTextToken;
    }

    public function register(RegisterationRequest $request)
    {
		$avatar_path = $request->file('avatar_img')->store('images/avatars');

		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'gender' => $request->gender,
			'date_of_birth' => $request->date_of_birth,
			'mobile_number' => $request->mobile_number,
			'national_id' => $request->national_id,
			'avatar_img' => $avatar_path,

		]);

		event(new Registered($user));

		return $user->createToken($request->device_name)->plainTextToken;
    }
}


