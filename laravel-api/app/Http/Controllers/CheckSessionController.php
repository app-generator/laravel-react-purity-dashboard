<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckSessionController extends Controller
{
    /**
     * Initialize the session check action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if (! $request->user()) {
            return response()->json([
                'success' => false,
                'msg' => 'User is not logged in.',
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
