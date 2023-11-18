<?php


namespace App\Controllers;
use App\Models\ZakatModel;


class AdminController extends BaseController
{

  
    public function index(): string
    {
       

        $data=[
           
            'zakat'=> $this->ZakatModel->getZakat(),
       
        ];


        return view('admin-pengurus/index', $data,[
            'config' => config('Auth'),
        ]);
       
       
        //


    }
    public $ZakatModel;


    public function __construct() {
        $this->ZakatModel = new ZakatModel();
    }


    public function create()
    {
        $ZakatModel = new ZakatModel();


        $zakat =$this->ZakatModel->getZakat();


        $data = [
            'zakat'=>$zakat,


        ];
        return view('admin-pengurus/create_muzakki',$data);
       
    }


    public function store(){
        $ZakatModel = new ZakatModel();


        $ZakatModel->saveZakat([
            'nama'      => $this->request->getVar('nama'),
            'noHP'  => $this->request->getVar('noHP'),
            'selectBentukZakat'       => $this->request->getVar('selectBentukZakat'),
            'jumlahOrang'  => $this->request->getVar('jumlahOrang'),
            'jumlahZakat'  => $this->request->getVar('jumlahZakat'),
            'amil'  => $this->request->getVar('amil'),
           
        ]);


        $data = [
            'nama'      => $this->request->getVar('nama'),
            'noHP'  => $this->request->getVar('noHP'),
            'selectBentukZakat'       => $this->request->getVar('selectBentukZakat'),
            'jumlahOrang'  => $this->request->getVar('jumlahOrang'),
            'jumlahZakat'  => $this->request->getVar('jumlahZakat'),
            'amil'  => $this->request->getVar('amil'),
        ];


        return redirect()->to('admin-pengurus/index');


    }




    //EDIT DELETE
    public function edit($id){
        $zakat =$this->ZakatModel->getZakat($id);
        $data = [
            'zakat'=>$zakat,
        ];


        return view('admin-pengurus/edit_data_muzakki',$data);
    }


    public function update($id){
        $data = [
            'nama'      => $this->request->getVar('nama'),
            'noHP'  => $this->request->getVar('noHP'),
            'selectBentukZakat'       => $this->request->getVar('selectBentukZakat'),
            'jumlahOrang'  => $this->request->getVar('jumlahOrang'),
            'jumlahZakat'  => $this->request->getVar('jumlahZakat'),
            'amil'  => $this->request->getVar('amil'),
        ];


        $result = $this->ZakatModel->update($id,$data);


        if(!$result){
            return redirect()->back()->withInput()
            ->with('error','Gagal Menyimpan Data');
        }


        return redirect()->to(base_url('/admin-pengurus/index'));


    }
   
    public function destroyZakat($id)
    {
        $result = $this->ZakatModel->deleteZakat($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/admin-pengurus/index'))
            ->with('success', 'Berhasil Menghapus Data');
    }


 
}
