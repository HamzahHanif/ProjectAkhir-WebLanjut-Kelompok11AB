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

        // $uploadedFoto = $this->request->getFile('foto');

        // $name = $uploadedFoto->getRandomName();
        

        // if ($uploadedFoto->isValid() && !$uploadedFoto->hasMoved()) {
        //     $uploadedFoto->move($path, $name);
        //     $foto = $name;
        // }

        $path = 'assets/uploads/img/';

        $uploadedFoto = $this->request->getFile('foto');

        $name = $uploadedFoto->getRandomName();

        if($uploadedFoto->move($path, $name))
        {
            $foto = base_url($path. $name);
        }

        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $wa = $this->request->getPost('wa');
        $jumlah = $this->request->getPost('jumlah');
        $norek = $this->request->getPost('norek');
        $foto = $this->request->getPost('foto');
        $pesan = $this->request->getPost('pesan');

        $data=[
            'nama' => $nama,
            'email' => $email,
            'wa' => $wa,
            'jumlah' => $jumlah,
            'norek' => $norek,
            'foto'  => $foto,
            'pesan' => $pesan,
        ];

        $this->infaqModel->saveInfaq([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' =>$this->request->getVar('wa'),
            'jumlah' => $this->request->getVar('jumlah'),
            'norek' =>$this->request->getVar('norek'),
            'foto'  => $uploadedFoto,
            'pesan' =>$this->request->getVar('pesan'),
        ]);
        session()->setFlashdata('success', 'Berhasil Berinfaq');

        return redirect()->to('/user/infaq');

    }

    // edit delete infaq
    public function edit($id){
        $infaq =$this->infaqModel->getInfaq($id);
        $data = [
            'infaq'=>$infaq,
        ];


        return view('user/edit_infaq',$data);
    }

    public function update($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' =>$this->request->getVar('wa'),
            'jumlah' => $this->request->getVar('jumlah'),
            'norek' =>$this->request->getVar('norek'),
            'pesan' =>$this->request->getVar('pesan'),
        ];

        $result = $this->infaqModel->update($id,$data);


        if(!$result){
            return redirect()->back()->withInput()
            ->with('error','Gagal Menyimpan Data');
        }
        if ($result) {
            session()->setFlashdata('success', 'Data berhasil diperbarui.');
        } else {
            session()->setFlashdata('error', 'Gagal memperbarui data.');
        }


        return redirect()->to(base_url('/user/index'));
    }

    public function destroyInfaq($id)
    {
        $result = $this->infaqModel->deleteInfaq($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/user/index'))
            ->with('success', 'Berhasil Menghapus Data');

            if ($result) {
                session()->setFlashdata('success', 'Data berhasil dihapus.');
            } else {
                session()->setFlashdata('error', 'Gagal menghapus data.');
            }
        }
    

    
}
