<?php

namespace App\Controllers;
use App\Models\InfaqModel;

class UserController extends BaseController
{
    public $infaqModel;

    public function __construct() {
        $this->infaqModel = new InfaqModel();
    }

    public function index(): string
    {
        $data = [
            'infaq' => $this->infaqModel->getInfaq(),
            'config' => config('Auth'),
        ];
        
        return view('user/index', $data);
        
        // $data=[
            
        //     'infaq'=> $this->InfaqModel->getInfaq(),
        
        // ];

        // return view('user/index', $data, [
        //     'config' => config('Auth'),
        // ]);
    }

    public function create()
    {
    $infaq = $this->infaqModel->getInfaq();

    $data = [
        'infaq' => $infaq,
    ];

    return view('user/infaq', $data);
    }

    public function store(){
    
        
        // $path = 'assets/uploads/img/' ;

        // $foto = $this->request->getFile('foto');
        
        // $name = $foto->getRandomName();
        

        // if($foto->move($path, $name)){
        //     $foto = base_url($path . $name);
        // }

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

        $this->infaqModel->saveInfaq([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' =>$this->request->getVar('wa'),
            'norek' =>$this->request->getVar('norek'),
            //'foto'  => $foto,
            'pesan' =>$this->request->getVar('pesan'),
        ]);

        return redirect()->to('/user/infaq');

    }

    
}
