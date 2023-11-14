<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokerModel;
use App\Models\KategoriModel;
use App\Models\LokasiModel;

class Loker extends BaseController
{
    protected $loker;
    public function __construct()
    {
        $this->loker = new LokerModel();
    }

    public function index()
    {

        $tcari = $this->request->getVar('tcari');
        if (isset($tcari)) {
            $cari = $this->request->getVar('cari');
            session()->set('cari_loker', $cari);
            redirect()->to('loker/index');
        } else {
            $cari = session()->get('cari_loker');
        }

        $dataLoker = $cari ? $this->loker->tampildata_cari($cari) : $this->loker->tampildata();
        $data = [
            'dataloker' => $dataLoker,
            'cari' => $cari
        ];

        return view('backend/loker/v_loker', $data);
    }

    public function tambah()
    {
        $data = [
            'datalokasi' => $this->loker->allLok(),
            'datakategori' => $this->loker->allKat()
        ];

        return view('backend/loker/t_loker', $data);
    }

    public function save()
    {
        $kategori = $this->request->getVar('katid');
        $lokasi = $this->request->getVar('lokid');
        $posisi = $this->request->getVar('posisi');
        $perusahaan = $this->request->getVar('perusahaannm');
        $pendidikan = $this->request->getVar('pendidikan');
        $deskripsi = $this->request->getVar('deskripsi');
        $usiamax = $this->request->getVar('usiamax');
        $usiamin = $this->request->getVar('usiamin');
        $domisili = $this->request->getVar('domisili');
        $gaji = $this->request->getVar('gaji');
        $jenispekerjaan = $this->request->getVar('jenispekerjaan');
        $lowonganjumlah = $this->request->getVar('lowonganjumlah');
        $authorid = session()->get('adminid');
        $authornm = session()->get('adminnama');
        $slug = url_title($this->request->getVar('posisi'), '-', true);

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'katid' => [
                'rules' => 'required',
                'label' => 'Kategori',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'lokid' => [
                'rules' => 'required',
                'label' => 'Lokasi',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'label' => 'Posisi Dibutuhkan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'perusahaannm' => [
                'rules' => 'required',
                'label' => 'Nama Perusahaan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'pendidikan' => [
                'rules' => 'required',
                'label' => 'Pendidikan Terakhir',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$valid) {
            $pesan = [
                'error' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/loker/tambah');
        } else {
            $this->loker->insert([
                'katid' => $kategori,
                'lokid' => $lokasi,
                'posisi' => $posisi,
                'perusahaannm' => $perusahaan,
                'pendidikan' => $pendidikan,
                'deskripsi' => $deskripsi,
                'authorid' => $authorid,
                'authornm' => $authornm,
                'usiamin' => $usiamin,
                'usiamax' => $usiamax,
                'domisili' => $domisili,
                'lowonganjumlah' => $lowonganjumlah,
                'gaji' => $gaji,
                'jenispekerjaan' => $jenispekerjaan,
                'lowonganjenis' => $lowonganjumlah,
                'slug' => $slug
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Loker berhasil disimpan
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('loker/index');
        }
    }
    public function update()
    {
        $idloker = $this->request->getVar('idloker');
        $kategori = $this->request->getVar('katid');
        $lokasi = $this->request->getVar('lokid');
        $posisi = $this->request->getVar('posisi');
        $perusahaan = $this->request->getVar('perusahaannm');
        $pendidikan = $this->request->getVar('pendidikan');
        $deskripsi = $this->request->getVar('deskripsi');
        $usiamax = $this->request->getVar('usiamax');
        $usiamin = $this->request->getVar('usiamin');
        $domisili = $this->request->getVar('domisili');
        $gaji = $this->request->getVar('gaji');
        $jenispekerjaan = $this->request->getVar('jenispekerjaan');
        $lowonganjumlah = $this->request->getVar('lowonganjumlah');
        $authorid = session()->get('adminid');
        $authornm = session()->get('adminnama');
        $slug = url_title($this->request->getVar('posisi'), '-', true);

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'katid' => [
                'rules' => 'required',
                'label' => 'Kategori',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'lokid' => [
                'rules' => 'required',
                'label' => 'Lokasi',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'label' => 'Posisi Dibutuhkan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'perusahaannm' => [
                'rules' => 'required',
                'label' => 'Nama Perusahaan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'pendidikan' => [
                'rules' => 'required',
                'label' => 'Pendidikan Terakhir',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$valid) {

            $pesan = [
                'error' => '<br><div class="alert alert-danger">' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/loker/tambah');
        } else {
            $this->loker->update($idloker,[
                'katid' => $kategori,
                'lokid' => $lokasi,
                'posisi' => $posisi,
                'perusahaannm' => $perusahaan,
                'pendidikan' => $pendidikan,
                'deskripsi' => $deskripsi,
                'authorid' => $authorid,
                'authornm' => $authornm,
                'usiamin' => $usiamin,
                'usiamax' => $usiamax,
                'domisili' => $domisili,
                'lowonganjumlah' => $lowonganjumlah,
                'gaji' => $gaji,
                'jenispekerjaan' => $jenispekerjaan,
                'lowonganjenis' => $lowonganjumlah,
                'slug' => $slug
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Loker berhasil disimpan
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('loker/index');
        }
    }

    public function edit($id)
    {
        $rowData = $this->loker->find($id);

        if ($rowData) {
            $data = [
                'id' => $id,
                'katid' => $rowData['katid'],
                'lokid' => $rowData['lokid'],
                'posisi' => $rowData['posisi'],
                'perusahaannm' => $rowData['perusahaannm'],
                'pendidikan' => $rowData['pendidikan'],
                'deskripsi' => $rowData['deskripsi'],
                'authorid' => $rowData['authorid'],
                'authornm' => $rowData['authornm'],
                'usiamin' => $rowData['asiamin'],
                'usiamax' => $rowData['usiamax'],
                'domisili' => $rowData['domisili'],
                'lowonganjumlah' => $rowData['lowonganjumlah'],
                'gaji' => $rowData['gaji'],
                'jenispekerjaan' => $rowData['jenispekerjaan'],
                'lowonganjenis' => $rowData['lowonganjenis'],
            ];
            return view('backend/lokasi/e_lokasi', $data);
        } else {
            exit('Data tidak ditemukan');
        }
    }

    public function hapus($id)
    {
        $rowData  = $this->loker->find($id);

        if ($rowData) {
            $this->loker->delete($id);

            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil dihapus
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/loker');
        } else {
           $null = [
            'null' => 'Data loker tidak ditemukan'
           ];

           session()->setFlashdata($null);
           return redirect()->to();                                                                         
        }
    }
}
