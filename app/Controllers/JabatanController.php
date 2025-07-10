<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use CodeIgniter\HTTP\ResponseInterface;

class JabatanController extends BaseController
{
    protected $jabatanModel;

    public function __construct()
    {
        $this->jabatanModel = new JabatanModel();
    }

    public function index()
    {
        $data['jabatan'] = $this->jabatanModel->findAll();
        return view('jabatan/index', $data);
    }

    public function create()
    {
        return view('jabatan/create');
    }

    public function store()
    {
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            'deskripsi_jabatan' => $this->request->getPost('deskripsi_jabatan')
        ];
        $this->jabatanModel->insert($data);
        return redirect()->to(route_to('jabatan.index'))->with('success', 'Jabatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['jabatan'] = $this->jabatanModel->find($id);
        return view('jabatan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            'deskripsi_jabatan' => $this->request->getPost('deskripsi_jabatan')
        ];
        $this->jabatanModel->update($id, $data);
        return redirect()->to(route_to('jabatan.index'))->with('success', 'Jabatan berhasil diubah.');
    }

    public function delete($id)
    {
        $this->jabatanModel->delete($id);
        return redirect()->to(route_to('jabatan.index'))->with('success', 'Jabatan berhasil dihapus.');
    }
}
