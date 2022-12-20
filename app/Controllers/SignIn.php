<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignIn extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sign In'
        ];
        return view('pages/signIn', $data);
    }
}