<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];
        return view('pages/about', $data);
    }
}
