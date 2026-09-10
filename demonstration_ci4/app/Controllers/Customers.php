<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Gil Roxas',
                'email'     => 'gil@example.com',
                'phone'     => '09676767676',
            ],
            [
                'full_name' => 'Leanne Wam',
                'email'     => 'leanne@example.com',
                'phone'     => '09676767677',
            ],
            [
                'full_name' => 'Vhea Dela Cruz',
                'email'     => 'vhea@example.com',
                'phone'     => '09676767666',
            ],
            [
                'full_name' => 'Fiona Reyes',
                'email'     => 'fiona@example.com',
                'phone'     => '09676767667',
            ],
            [
                'full_name' => 'Arby Mendoza',
                'email'     => 'arby@example.com',
                'phone'     => '09677767667',
            ],
        ];

        return view('customers/index', $data);
    }
}