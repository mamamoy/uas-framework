<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Pelanggan extends BaseController
{
    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
    }
    public function index($email)
    {
        $email = session()->get('email');
        $data = [
            'pesanan' => $this->transaksi->getOrderEmail($email)->findAll()
        ];
        // dd($data);
        return view('dashboard', $data);
    }

    public function servis()
    {
        // $data = [
        //     'user' => $this->user->getUser(),
        // ];
        // dd($data);
        return view('servis');
    }

    public function BuatTransaksi()
    {
        if ($this->request->getMethod() == 'post') {
            // SET UP RULES
            // validasi input
            if (!$this->validate([
                'nama_pelanggan' => 'required',
                'merk_kendaraan' => 'required',
                'jenis_kendaraan' => 'required',
                'jenis_pelayanan' => 'required',
            ])) {

                return redirect()->to('servis')->withInput();
            }

            $this->transaksi->save([
                'email' => $this->request->getVar('email'),
                'status' => $this->request->getVar('status'),
                'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
                'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
                'merk_kendaraan' => $this->request->getVar('merk_kendaraan'),
                'jenis_pelayanan' => $this->request->getVar('jenis_pelayanan'),
            ]);

            session()->setFlashdata('message', 'Data added successfully.');

            return redirect()->to('/dashboard');
        }
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('servis', $data);
    }


    public function detail($id)
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder($id)
        ];
        // dd($data);
        return view('detail', $data);
    }
}
