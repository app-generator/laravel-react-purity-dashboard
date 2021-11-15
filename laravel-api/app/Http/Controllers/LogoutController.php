<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Initialize the logout action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if (! $request->user()) {
            return response()->json([
                'success' => false,
                'msg' => 'User is not logged on.',
            ]);
        }

        Auth::logout(true);

        return response()->json([
            'success' => true,
            'msg' => 'Token revoked.',
        ]);
    }
}
