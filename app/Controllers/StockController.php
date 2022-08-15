<?php

namespace App\Controllers;

use App\Models\StockModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class StockController extends BaseController
{
    protected $stock;

    function __construct()
    {
        $this->stock = new StockModel();
    }
    public function index()
    {
        // buat object model $news
        $stock = new StockModel();

        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        $data['stocks'] = $stock->findAll();

        // kirim data ke view
        return view('stockBarang/index',$data);
    }


    public function create()
    {
        // buat object model $news
        $stock = new StockModel();
        // lakukan validasi
     
        // kirim data ke view
        return view('stockBarang/create');
    }

    public function store(){

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
        // buat object model $news
        $stock = new StockModel();

        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        $data['stock'] = $stock->find($id);

        // kirim data ke view
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


        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        return redirect('stockBarang')->with('success', 'Data Updated Successfully');	

        // kirim data ke view
    }

    //------------------------------------------------------------

    public function viewNews($slug)
    {
        $news = new NewsModel();
        $data['news'] = $news->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan 404 error jika data tidak ditemukan
        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('news_detail', $data);
    }
}
