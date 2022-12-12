<?php

namespace App\Controllers;

class Wisata extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Wisata',
        ];
        return view('pages/wisata', $data);
    }
}