<?php

namespace App\Models;

use CodeIgniter\Model;

class MontirModel extends Model
{
    protected $table      = 'montir';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_montir'];

    public function getMontir($nama_montir = false)
    {
        if ($nama_montir == false) {
            return $this->findAll();
        }

        return $this->where(['nama_montir' => $nama_montir])->first();
    }
}
