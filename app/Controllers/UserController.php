<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        return view('auth/login', [
            'config' => config('Auth'),
        ]);
    }

    public function user()
    {
        return view('user/index');
    }
}
