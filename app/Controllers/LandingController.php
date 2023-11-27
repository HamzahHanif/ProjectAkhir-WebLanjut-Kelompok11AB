<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InfaqModel;
use \Myth\Auth\Models\UserModel;
use App\Models\ZakatModel;

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
    {   $userModel = new UserModel();
        $infaqModel = new InfaqModel();
        $zakatModel = new ZakatModel();

        $totalZakatByBentuk = $zakatModel->getTotalZakatByBentuk();
        $totalInfaq = $infaqModel->getTotalInfaq();
        $totalUsers = $userModel->getTotalUsers();

        // Kemudian Anda dapat memasukkan $totalUsers ke dalam data yang akan dikirimkan ke view
        $data['totalUsers'] = $totalUsers;
        $data['totalZakatByBentuk'] = $totalZakatByBentuk;
        $data['totalInfaq'] = $totalInfaq;

        return view("dashboard/index", $data);
    }
}
