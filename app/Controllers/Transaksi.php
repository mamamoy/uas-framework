<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
    }
    public function BuatTransaksi()
    {
        if ($this->request->getMethod() == 'post') {
            // SET UP RULES
            // validasi input
            if (!$this->validate([
                'nama_pelanggan' => 'required',
                'merk_kendaraan' => 'required',
            ])) {

                return redirect()->to('servis')->withInput();
            }

            $this->transaksi->save([
                'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
                'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
                'merk_kendaraan' => $this->request->getVar('merk_kendaraan'),
                'jenis_pelayanan' => $this->request->getVar('jenis_pelayanan'),
            ]);

            session()->setFlashdata('message', 'Data added successfully.');
            if ($this->request->getVar('jenis_pelayanan') == 1) {
                return redirect()->to('/invoice');
            }
            return redirect()->to('/');
        }
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('servis', $data);
    }
}
