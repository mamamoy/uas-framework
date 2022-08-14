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
        return view('dashboard');
    }
    public function admin()
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder()
        ];
        // dd($data);
        return view('Admin/dashboard', $data);
    }
    public function detail($nama_pelanggan)
    {
        $data = [
            'nama' => $this->orderModel->getOrder($nama_pelanggan)
        ];
        dd($data);
        return view('terimapesanan', $data);
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function servis()
    {
        return view('servis');
    }
    public function invoice($id)
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder($id)
        ];
        dd($data);
        return view('invoice', $data);
    }
    public function terima($id)
    {
        $data = [
            'data' => $this->transaksi->getOrder($id),
            'montir' => $this->montir->getMontir(),
            'barang' => $this->barang->getBarang(),
        ];
        // dd($data);
        return view('terimapesanan', $data);
    }
    public function terimaPesanan()
    {
        if ($this->request->getMethod() == 'post') {
            // SET UP RULES
            // validasi input
            if (!$this->validate([
                'nama_montir' => 'required',
            ])) {

                return redirect()->to('terima/$1')->withInput();
            }

            $this->transaksi->save([
                'nama_montir' => $this->request->getVar('nama_montir'),
                'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
                'merk_kendaraan' => $this->request->getVar('merk_kendaraan'),
                'jenis_pelayanan' => $this->request->getVar('jenis_pelayanan'),
                'nama_barang' => $this->request->getVar('nama_barang'),
                'jumlah' => $this->request->getVar('jumlah'),
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
