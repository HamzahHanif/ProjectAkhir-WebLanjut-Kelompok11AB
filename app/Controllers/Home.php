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

    // public function register()
    // {
    //     return view('auth/register');
    // }

    // public function user()
    // {
    //     return view('user/index');
    // }

    // public function tabel()
    // {
    //     return view('user/tabel');
    // }

    // public function infaq()
    // {
    //     return view('user/infaq');
    // }

    // public function adminp()
    // {
    //     return view('admin-pengurus/index');
    // }

    // public function super()
    // {
    //     return view('super-admin/index');
    // }

    // public function landing()
    // {
    //     return view('landing-page/landing_page');
    // }
}
