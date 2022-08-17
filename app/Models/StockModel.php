<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table      = 'stockbarang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['kode_barang', 'nama_barang', 'harga', 'stok_barang'];

    public function getBarang($barang = false)
    {
        if ($barang == false) {
            return $this->findAll();
        }

        return $this->where(['nama_barang' => $barang])->first();
    }

    public function getSemuaBarang($barang = false)
    {
        return $this->findAll();
    }
    
}
