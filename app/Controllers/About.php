<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About',
        ];

        return view('pages/about', $data);
    }
}