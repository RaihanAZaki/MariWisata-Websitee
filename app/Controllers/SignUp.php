<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignUp extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sign Up'
        ];
        return view('pages/signUp', $data);
    }
}