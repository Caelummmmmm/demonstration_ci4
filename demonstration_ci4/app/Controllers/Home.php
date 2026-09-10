<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $data['title'] = 'About Us';

        return view('about', $data);
    }
}