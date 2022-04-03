<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function me(Request $request)
    
{
        return $request->user();
    }
    public function user(Request $request)
    {
        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }
}
