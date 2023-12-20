<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InfaqModel;
use \Myth\Auth\Models\UserModel;
use App\Models\ZakatModel;

class LandingController extends BaseController
{
    public function index()
    {   $userModel = new UserModel();
        $infaqModel = new InfaqModel();
        $zakatModel = new ZakatModel();

        $totalZakatByBentuk = $zakatModel->getTotalZakatByBentuk();
        $totalInfaq = $infaqModel->getTotalInfaq();
        $totalUsers = $userModel->getTotalUsers();

        $data['totalUsers'] = $totalUsers;
        $data['totalZakatByBentuk'] = $totalZakatByBentuk;
        $data['totalInfaq'] = $totalInfaq;

        return view("dashboard/index", $data);
    }
}
