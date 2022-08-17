<?php

namespace App\Controllers;

use App\Models\StockModel;

class StockController extends BaseController
{
    protected $stock;

    function __construct()
    {
        $this->stock = new StockModel();
    }
    public function index()
    {
        $stock = new StockModel();

     
        $data['stocks'] = $stock->findAll();

        
        return view('stockBarang/index', $data);
    }


    public function create()
    {
        
        $stock = new StockModel();
       
        return view('stockBarang/create');
    }

    public function store()
    {

        $this->stock->insert([
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
            'stok_barang' => $this->request->getPost('jumlah_barang'),
        ]);

        return redirect('stockBarang')->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $stock = new StockModel();

      
        $data['stock'] = $stock->find($id);

        return view('stockBarang/edit', $data);
    }

    public function update($id)
    {
        $stockModel = new StockModel();
        $stock = $stockModel->where('id',$id)->first();
        $this->stock->update($id,[
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
            'stok_barang' => $this->request->getPost('jumlah_barang'),
        ]);

        return redirect('stockBarang')->with('success', 'Data Updated Successfully');	

    }


    public function delete($id)
    {
        $stockModel = new StockModel();
        $stockModel->delete($id);
        return redirect('stockBarang')->with('success', 'Data Deleted Successfully');	
    }

}
