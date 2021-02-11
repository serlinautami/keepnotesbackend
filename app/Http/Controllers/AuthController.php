<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function login(Request $request) {

      $email = $request->input('email');
      $password = $request->input('password');




      return response()->json([
        'status' => 1,
        'message' => 'success'
      ], 200);
    }

    //
}
