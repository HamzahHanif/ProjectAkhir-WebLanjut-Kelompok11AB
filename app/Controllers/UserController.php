<?php

namespace App\Controllers;

use App\Models\InfaqModel;

class User extends BaseController
{
    public $InfaqModel;

    public function __construct() {
        $this->InfaqModel = new InfaqModel();
    }

    public function index(): string
    {
        return view('auth/login', [
            'config' => config('Auth'),
        ]);
    }

    public function infaq()
    {
        return view('user/index');
    }

    public function store(){
    
        
        $path = 'assets/uploads/img/' ;

        $foto = $this->request->getFile('foto');
        
        $name = $foto->getRandomName();
        

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $InfaqModel = new InfaqModel();
        

        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $wa = $this->request->getPost('wa');
        $norek = $this->request->getPost('norek');
        $pesan = $this->request->getPost('pesan');

        $data=[
            'nama' => $nama,
            'email' => $email,
            'wa' => $wa,
            'norek' => $norek,
            'pesan' => $pesan,
        ];

        $this->InfaqModel->saveInfaq([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' =>$this->request->getVar('wa'),
            'norek' =>$this->request->getVar('norek'),
            'foto'  => $foto,
            'pesan' =>$this->request->getVar('pesan'),
        ]);

        return redirect()->to('/user/infaq');

    }

    public function create()
    {
        $InfaqModel = new InfaqModel();

        $infaq =$this->InfaqModel->getInfaq();

        $data = [
            'infaq'=>$infaq,

        ];
        return view('user/infaq',$data);
        
    }
}
