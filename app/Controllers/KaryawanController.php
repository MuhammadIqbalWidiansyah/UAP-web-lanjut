<?php

namespace App\Controllers;
use App\Models\KaryawanModel;
use App\Controllers\BaseController;

class KaryawanController extends BaseController
{
    public function index()
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->findAll();

        return view('karyawan/list_karyawan', $data);
    }

    public function create()
    {
        return view('karyawan/create');
    }

    public function store()
    {
        $model = new KaryawanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji'),
        ];
        $model->insert($data);

        return redirect()->to('/list_karyawan');
    }

    public function edit($id)
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->find($id);

        return view('karyawan/edit', $data);
    }

    public function update($id)
    {
        $model = new KaryawanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji'),
        ];
        $model->update($id, $data);

        return redirect()->to('/list_karyawan');
    }

    public function delete($id)
    {
        $model = new KaryawanModel();
        $model->delete($id);

        return redirect()->to('/list_karyawan');
    }
}
