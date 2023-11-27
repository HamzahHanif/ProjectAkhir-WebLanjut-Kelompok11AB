<?php


namespace App\Models;


use CodeIgniter\Model;


class ZakatModel extends Model
{
    protected $table            = 'zakat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nama','noHP','selectBentukZakat','jumlahOrang','jumlahZakat','amil'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function saveZakat($data){
        $this->insert($data);
    }

    public function getTotalZakatByBentuk()
    {
        $result = $this->select('selectBentukZakat, SUM(jumlahZakat) as total')
                       ->groupBy('selectBentukZakat')
                       ->get()
                       ->getResult();

        $totalZakat = ['Uang Tunai' => 0, 'Beras' => 0];

        foreach ($result as $row) {
            $bentukZakat = $row->selectBentukZakat;
            $totalZakat[$bentukZakat] = $row->total;
        }

        return $totalZakat;
    }


    //update delete
    public function getZakat($id = null)
    {
        if ($id != null) {
            return $this->select(
                ['id','nama','noHP','selectBentukZakat','jumlahOrang','jumlahZakat','amil'])->find($id);
        }
        return $this->select(
            ['id','nama','noHP','selectBentukZakat','jumlahOrang','jumlahZakat','amil'])->findAll();
    }


    public function updateZakat($data, $id){
        return $this->update($id, $data);
    }


    public function deleteZakat($id){
        return $this->delete($id);
    }
}
