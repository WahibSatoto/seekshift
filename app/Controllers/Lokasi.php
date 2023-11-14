<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokasiModel;

class Lokasi extends BaseController
{
    protected $lokasimodel;

    public function __construct()
    {
        $this->lokasimodel = new LokasiModel();
    }

    public function index()
    {
        $tcari = $this->request->getVar('tcari');

        if (isset($tcari)) {
            $cari =  $this->request->getVar('cari');
            session()->set('cari_lokasi', $cari);
            redirect()->to('lokasi/index');
        } else {
            $cari = session()->get('cari_lokasi');
        }

        $dataLokasi = $cari ? $this->lokasimodel->cariData($cari)->paginate(5, 'lokasi') : $this->lokasimodel->paginate(5, 'lokasi');
        $nohalaman = $this->request->getVar('page_lokasi') ? $this->request->getVar('page_lokasi') : 1;
        $data = [
            'datalok' => $dataLokasi,
            'nomer' => $nohalaman,
            'pager' => $this->lokasimodel->pager,
            'cari' => $cari
        ];

        return view('backend/lokasi/v_lokasi', $data);
    }

    public function tambah()
    {
        return view('backend/lokasi/t_lokasi');
    }

    public function save()
    {
        $namalokasi = $this->request->getVar('namalokasi');
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'namalokasi' => [
                'rules' => 'required',
                'label' => 'Nama Lokasi',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'erorNamaLokasi' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/lokasi/tambah');
        } else {
            $this->lokasimodel->insert([
                'loknama' => $namalokasi
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil disimpan
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/lokasi');
        }
    }

    public function edit($id)
    {
        $rowData = $this->lokasimodel->find($id);

        if ($rowData) {
            $data = [
                'id' => $id,
                'nama' => $rowData['loknama']
            ];
            return view('backend/lokasi/e_lokasi', $data);
        } else {
            exit('Data tidak ditemukan');
        }
    }

    public function update()
    {
        $idlokasi = $this->request->getVar('idlokasi');
        $namalokasi = $this->request->getVar('namalokasi');
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'namalokasi' => [
                'rules' => 'required',
                'label' => 'Nama Lokasi',
                'errors' => '{field} tidak boleh kosong'
            ]
        ]);

        if (!$valid) {
            $pesan = [
                'errorNamaLokasi' => '<br><div class="alert alert-danger"> ' . $validation->getError() . ' </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/lokasi/edit' . $idlokasi);
        } else {
            $this->lokasimodel->update($idlokasi, [
                'loknama' => $namalokasi
            ]);
            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil diubah
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/lokasi');
        }
    }

    public function hapus($id)
    {
        $rowData  = $this->lokasimodel->find($id);

        if ($rowData) {
            $this->lokasimodel->delete($id);

            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil dihapus
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/lokasi');
        } else {
            exit('Data tidak ditemukan');
        }
    }
}
