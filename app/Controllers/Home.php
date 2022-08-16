<?php

namespace App\Controllers;

use App\Models\MontirModel;
use App\Models\StockModel;
use App\Models\TransaksiModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->montir = new MontirModel();
        $this->barang = new StockModel();
    }

    public function index()
    {
        return view('home');
    }

    // METHOD BELUM BENAR
    public function invoice($id)
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder($id)
        ];
        dd($data);
        return view('invoice', $data);
    }
    //-----------------------
}
