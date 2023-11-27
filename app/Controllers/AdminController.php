<?php


namespace App\Controllers;
use App\Models\ZakatModel;
use TCPDF;



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

//cetak laporan
    public function cetakLaporan()
    {
        // Ambil data zakat dari model
        $zakatData = $this->ZakatModel->getZakat();

        // Inisialisasi objek TCPDF
        $pdf = new TCPDF();
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetMargins(10, 10, 10); // Set overall page margins (left, top, right)
        $pdf->SetFont('helvetica', '', 8); // Use Helvetica font, change font size to 8

        // Tambahkan halaman pertama
        $pdf->AddPage();

        // Tambahkan judul laporan
        $pdf->SetFont('helvetica', 'B', 14); // Use Helvetica font, change title font size to 14
        $pdf->Cell(0, 10, 'Laporan Zakat', 0, 1, 'C');

        // Tambahkan tanggal pencetakan
        $pdf->SetFont('helvetica', 'I', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(0, 10, 'Tanggal Cetakan: ' . date('d F Y'), 0, 1, 'C');
        $pdf->Ln(); // Pindah ke baris berikutnya

        // Tambahkan header tabel
        $pdf->SetFont('helvetica', 'B', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(10, 8, 'No', 1); // Adjust width for 'No'
        $pdf->Cell(40, 8, 'Nama Muzakki', 1);
        $pdf->Cell(30, 8, 'No HP', 1);
        $pdf->Cell(40, 8, 'Bentuk Zakat', 1);
        $pdf->Cell(30, 8, 'Jumlah Orang', 1);
        $pdf->Cell(30, 8, 'Jumlah Zakat', 1);
        $pdf->Cell(30, 8, 'Amil', 1);
        $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
        $pdf->Ln(); // Pindah ke baris berikutnya

        // Tambahkan data zakat ke dalam tabel
        $id = 1;
        foreach ($zakatData as $zakat) {
            $pdf->Cell(10, 8, $id++, 1); // Adjust width for 'No'
            $pdf->Cell(40, 8, $zakat['nama'], 1);
            $pdf->Cell(30, 8, $zakat['noHP'], 1);
            $pdf->Cell(40, 8, $zakat['selectBentukZakat'], 1);
            $pdf->Cell(30, 8, $zakat['jumlahOrang'], 1);
            $pdf->Cell(30, 8, $zakat['jumlahZakat'], 1);
            $pdf->Cell(30, 8, $zakat['amil'], 1);
            $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
            $pdf->Ln(); // Pindah ke baris berikutnya
        }

        // Output PDF ke browser atau simpan ke file
        $pdf->Output('Laporan_Zakat.pdf', 'I');
    }

    //cetak laporan infaq
    public function cetakLaporanInfaq()
    {
        // Ambil data zakat dari model
        $zakatData = $this->ZakatModel->getZakat();

        // Inisialisasi objek TCPDF
        $pdf = new TCPDF();
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetMargins(10, 10, 10); // Set overall page margins (left, top, right)
        $pdf->SetFont('helvetica', '', 8); // Use Helvetica font, change font size to 8

        // Tambahkan halaman pertama
        $pdf->AddPage();

        // Tambahkan judul laporan
        $pdf->SetFont('helvetica', 'B', 14); // Use Helvetica font, change title font size to 14
        $pdf->Cell(0, 10, 'Laporan Zakat', 0, 1, 'C');

        // Tambahkan tanggal pencetakan
        $pdf->SetFont('helvetica', 'I', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(0, 10, 'Tanggal Cetakan: ' . date('d F Y'), 0, 1, 'C');
        $pdf->Ln(); // Pindah ke baris berikutnya

        // Tambahkan header tabel
        $pdf->SetFont('helvetica', 'B', 10); // Use Helvetica font, change font size to 10
        $pdf->Cell(10, 8, 'No', 1); // Adjust width for 'No'
        $pdf->Cell(40, 8, 'Nama Muzakki', 1);
        $pdf->Cell(30, 8, 'No HP', 1);
        $pdf->Cell(40, 8, 'Bentuk Zakat', 1);
        $pdf->Cell(30, 8, 'Jumlah Orang', 1);
        $pdf->Cell(30, 8, 'Jumlah Zakat', 1);
        $pdf->Cell(30, 8, 'Amil', 1);
        $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
        $pdf->Ln(); // Pindah ke baris berikutnya

        // Tambahkan data zakat ke dalam tabel
        $id = 1;
        foreach ($zakatData as $zakat) {
            $pdf->Cell(10, 8, $id++, 1); // Adjust width for 'No'
            $pdf->Cell(40, 8, $zakat['nama'], 1);
            $pdf->Cell(30, 8, $zakat['noHP'], 1);
            $pdf->Cell(40, 8, $zakat['selectBentukZakat'], 1);
            $pdf->Cell(30, 8, $zakat['jumlahOrang'], 1);
            $pdf->Cell(30, 8, $zakat['jumlahZakat'], 1);
            $pdf->Cell(30, 8, $zakat['amil'], 1);
            $pdf->Cell(10, 8, '', 1); // Empty cell to add right margin
            $pdf->Ln(); // Pindah ke baris berikutnya
        }

        // Output PDF ke browser atau simpan ke file
        $pdf->Output('Laporan_Zakat.pdf', 'I');
    }



 
}
