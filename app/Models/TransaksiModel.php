<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'pesanan';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_pelanggan', 'jenis_kendaraan', 'merk_kendaraan', 'jenis_pelayanan', 'created at', 'updated_at'];

    public function getOrder($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
