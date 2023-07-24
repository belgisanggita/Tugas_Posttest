<?php

namespace App\Controllers;

use App\Models\ObatModel;
use CodeIgniter\Controller;

class Obat extends Controller
{
    public function index()
    {
        $obatModel = new ObatModel();
        $data['obat'] = $obatModel->findAll();

        return view('obat/index', $data);
    }

    public function tambah()
    {
        return view('obat/tambah');
    }

    public function simpan()
    {
        $obatModel = new ObatModel();
        $data = [
            'nama_obat' => $this->request->getPost('nama_obat'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga')
        ];
        $obatModel->insert($data);

        return redirect()->to(base_url('obat'));
    }

    public function edit($id)
    {
        $obatModel = new ObatModel();
        $data['obat'] = $obatModel->getById($id);
    
        return view('obat/edit', $data);
    }
    
    public function update()
    {
        $obatModel = new ObatModel();
        $id = $this->request->getPost('id');
        $data = [
            'nama_obat' => $this->request->getPost('nama_obat'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga')
        ];
        $obatModel->update($id, $data);
    
        return redirect()->to(base_url('obat'));
    }
    

    public function delete($id)
    {
        $obatModel = new ObatModel();
        $obatModel->delete($id);

        return redirect()->to(base_url('obat'));
    }

    
}
