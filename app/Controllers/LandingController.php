<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingController extends BaseController
{
    // public function cihuy()
    // {
    //     $data = [
    //         'infaq' => [],
    //     ];

    //     return view("user/index", $data);
    // }

    public function index()
    {

        return view("dashboard/index");
    }
}
