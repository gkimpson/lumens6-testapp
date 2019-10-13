<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;

class UserController extends BaseController
{
    
    public function login(Request $request) {
        return [
            'message' => 'Successfully logged in',
            'input' => $request->input('email')
        ];
    }

    public function register(Request $request) {
        return User::create($request->all());
    }
}
