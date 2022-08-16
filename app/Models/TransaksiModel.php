<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'pesanan';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['status', 'keterangan', 'nama_pelanggan', 'email', 'jenis_kendaraan', 'merk_kendaraan', 'jenis_pelayanan', 'created at', 'updated_at'];

    public function getOrder($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getOrderEmail($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email]);
    }
}
