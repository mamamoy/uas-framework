<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\MontirModel;
use App\Models\StockModel;
use App\Models\TransaksiModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->authModel = new AuthModel();
        $this->montir = new MontirModel();
        $this->barang = new StockModel();
        $this->Session = session();
    }
    public function index()
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder()
        ];
        return view('Admin/dashboard', $data);
    }

    //DETAIL PESANAN
    public function detail($id)
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder($id)
        ];
        // dd($data);
        return view('Admin/detail', $data);
    }
    //-----------------

    //DETAIL PESANAN
    public function invoice($id)
    {
        $data = [
            'pesanan' => $this->transaksi->getOrder($id)
        ];
        return view('Admin/invoice', $data);
    }
    //-----------------

    //TABEL USER LIST
    public function userRoleMenu()
    {
        $data = [
            'users' => $this->authModel->getUser(),
        ];

        echo view('admin/userRoleMenu', $data);
    }
    //-----------------------------

    //TABEL USER DETAIL
    public function getUser($id)
    {
        $data = [
            'users' => $this->authModel->getUser($id)
        ];
        echo view('admin/users/detail', $data);
    }
    //------------------------------------

    //TABEL DASHBOARD ADMIN
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
    //---------------------------

    //METHOD DIBAWAH INI BELUM TERPAKAI JEK MUMET
    public function TerimaPesanan()
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

            return redirect()->to('/');
        }
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('servis', $data);
    }

    //METHOD TERIMA PESANAN JIKA SERVIS TOK
    public function detailUpdate($id)
    {
        if ($this->Session->get('role') == 1) {

            $this->transaksi->save([
                'id' => $id,
                'email' => $this->request->getVar('email'),
                'status' => $this->request->getVar('status'),
                'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
                'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
                'merk_kendaraan' => $this->request->getVar('merk_kendaraan'),
                'jenis_pelayanan' => $this->request->getVar('jenis_pelayanan'),
                'keterangan' => $this->request->getVar('keterangan'),
            ]);

            // dd($data);

            session()->setFlashdata('message', 'Data changed successfully.');

            return redirect()->to('/admin');
        } else {
            echo ('You Cannot Access This Site!');
        }
    }
    //-------------------------------------
}
