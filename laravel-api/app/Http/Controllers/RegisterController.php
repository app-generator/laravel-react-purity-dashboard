<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Initialize the register action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'username' => ['nullable', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (User::whereUsername($request->username)->exists()) {
            return $this->failure('Username already taken.');
        }

        if (User::whereEmail($request->email)->exists()) {
            return $this->failure('E-Mail already taken.');
        }

        $user = User::create(array_merge($request->all(), [
            'password' => Hash::make($request->password),
        ]));

        return response()->json([
            'success' => true,
            'userID' => $user->id,
            'msg' => 'The user was successfully registered.',
        ]);
    }

    /**
     * Return a failure message.
     *
     * @param  string  $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function failure(string $message)
    {
        return response()->json([
            'success' => false,
            'msg' => $message,
        ]);
    }
}
