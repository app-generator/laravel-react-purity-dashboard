<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class EditUserController extends Controller
{
    /**
     * Initialize the login action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if (! $user = $request->user()) {
            return response()->json([
                'success' => false,
                'msg' => 'Need to be authenticated.',
            ]);
        }

        $request->validate([
            'username' => ['required', 'string', Rule::unique(User::class, 'username')->ignore($user->id)],
            'email' => ['required', 'email', Rule::unique(User::class, 'email')->ignore($user->id)],
        ]);

        $user->update($request->all());

        return response()->json([
            'success' => true,
        ]);
    }
}
