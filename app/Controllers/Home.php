<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login', [
            'config' => config('Auth'),
        ]);
    }

    public function register()
    {
        return view('auth/register');
    }

    public function user()
    {
        return view('user/index');
    }

    public function tabel()
    {
        return view('user/tabel');
    }
}
