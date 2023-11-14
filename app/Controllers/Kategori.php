<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use Config\App;

class Kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        $tcari = $this->request->getVar('tcari');
        if (isset($tcari)) {
            $cari = $this->request->getVar('cari');
            session()->set('cari_kategori', $cari);
            redirect()->to('kategori/index');
        } else {
            $cari = session()->get('cari_kategori');
        }

        $dataKategori = $cari ? $this->kategoriModel->cariData($cari)->paginate(5, 'kategori') : $this->kategoriModel->paginate(5, 'kategori');
        $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'datakat' => $dataKategori,
            'nomer' => $nohalaman,
            'pager' => $this->kategoriModel->pager,
            'cari' => $cari
        ];
        return view('backend/kategori/v_kategori', $data);
    }

    public function tambah()
    {
        return view('backend/kategori/t_kategori');
    }

    public function save()
    {
        $namakategori = $this->request->getVar('namakategori');
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'namakategori' => [
                'rules' => 'required',
                'label' => 'Nama Kategori',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'erorNamaKategori' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/tambah');
        } else {
            $this->kategoriModel->insert([
                'katnama' => $namakategori
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil disimpan
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        }
    }

    public function edit($id)
    {
        $rowData = $this->kategoriModel->find($id);

        if ($rowData) {
            $data = [
                'id' => $id,
                'nama' => $rowData['katnama']
            ];
            return view('backend/kategori/e_kategori', $data);
        } else {
            exit('Data tidak ditemukan');
        }
    }

    public function update()
    {
        $idkategori = $this->request->getVar('idkategori');
        $namakategori = $this->request->getVar('namakategori');
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'namakategori' => [
                'rules' => 'required',
                'label' => 'Nama Kategori',
                'errors' => '{field} tidak boleh kosong'
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'errorNamaKategori' => '<br><div class="alert alert-danger"> ' . $validation->getError() . ' </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/edit' . $idkategori);
        } else {
            $this->kategoriModel->update($idkategori, [
                'katnama' => $namakategori
            ]);
            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil diubah
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        }
    }

    public function hapus($id)
    {
        $rowData  = $this->kategoriModel->find($id);

        if ($rowData) {
            $this->kategoriModel->delete($id);

            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil dihapus
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        } else {
            exit('Data tidak ditemukan');
        }
    }
}
