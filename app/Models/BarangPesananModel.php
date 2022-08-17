<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangPesananModel extends Model
{
    protected $table      = 'barang_pesanan';
    protected $primaryKey = 'id_barang_pesanan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['pesanan_id', 'barang_id'];

    public function getOrder($id )
    {
        $query =  $this->db->table('barang_pesanan')
        ->join('pesanan', 'pesanan.id = barang_pesanan.pesanan_id')
        ->join('stockbarang', 'stockbarang.id = barang_pesanan.barang_id')
        ->where('pesanan_id', $id)
        ->get();
        return $query;

    }
  
}
