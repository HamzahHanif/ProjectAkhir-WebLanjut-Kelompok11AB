<?php

namespace App\Controllers;
use App\Models\InfaqModel;
use TCPDF;

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
    

    //cetak laporan infaq
    public function cetakLaporanInfaq()
    {
        // Ambil data infaq dari model
        $infaqData = $this->infaqModel->getInfaq();
    
        // Inisialisasi objek TCPDF
        $pdf = new TCPDF();
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetMargins(10, 10, 10); // Set overall page margins (left, top, right)
        $pdf->SetFont('helvetica', '', 8); // Use Helvetica font, change font size to 8
    
        // Tambahkan halaman pertama
        $pdf->AddPage();
    
        // Tambahkan judul laporan
        $pdf->SetFont('helvetica', 'B', 14); // Use Helvetica font, change title font size to 14
        $pdf->Cell(0, 10, 'Laporan Infaq', 0, 1, 'C');
    
        // Tambahkan tanggal pencetakan
        $pdf->SetFont('helvetica', 'I', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(0, 10, 'Tanggal Cetakan: ' . date('d F Y'), 0, 1, 'C');
        $pdf->Ln(); // Pindah ke baris berikutnya
    
        // Tambahkan header tabel
        $pdf->SetFont('helvetica', 'B', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(10, 8, 'No', 1); // Adjust width for 'No'
        $pdf->Cell(40, 8, 'Nama', 1);
        $pdf->Cell(40, 8, 'Email', 1); // Adjusted width for 'Email'
        $pdf->Cell(25, 8, 'WA', 1); // Adjusted width for 'WA'
        $pdf->Cell(35, 8, 'No Rek', 1); // Adjusted width for 'No Rek'
        $pdf->Cell(50, 8, 'Pesan', 1); // Adjusted width for 'Pesan'
        $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
        $pdf->Ln(); // Pindah ke baris berikutnya
    
        // Tambahkan data infaq ke dalam tabel
        $id = 1;
        foreach ($infaqData as $infaq) {
            $pdf->Cell(10, 8, $id++, 1); // Adjust width for 'No'
            $pdf->Cell(40, 8, $infaq['nama'], 1);
            $pdf->Cell(40, 8, $infaq['email'], 1, 0, 'L', false, '', true); // Wrap content for 'Email'
            $pdf->Cell(25, 8, $infaq['wa'], 1); // Adjusted width for 'WA'
            $pdf->Cell(35, 8, $infaq['norek'], 1, 0, 'L', false, '', true); // Wrap content for 'No Rek'
            $pdf->Cell(50, 8, $infaq['pesan'], 1); // Adjusted width for 'Pesan'
            $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
            $pdf->Ln(); // Pindah ke baris berikutnya
        }
    
        // Output PDF ke browser atau simpan ke file
        $pdf->Output('Laporan_Infaq.pdf', 'I');
    }


    
}
