<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\App;

class Admin extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        $tcari = $this->request->getVar('tcari');
        if (isset($tcari)) {
            $cari = $this->request->getVar('cari');
            session()->set('cari_admin', $cari);
            redirect()->to('admin/index');
        } else {
            $cari = session()->get('cari_admin');
        }

        $dataAdmin = $cari ? $this->adminModel->tampildata_cari($cari) : $this->adminModel->tampildata();
        $data = [
            'dataadmin' => $dataAdmin,
            'cari' => $cari
        ];

        return view('backend/admin/v_admin', $data);
    }

    public function tambah()
    {
        $data = [
            'datalevel' => $this->adminModel->allLevel()
        ];
        return view('backend/admin/t_admin', $data);
    }

    public function save()
    {
        $adminId = $this->request->getVar('adminid');
        $adminNama = $this->request->getVar('adminnama');
        $password = password_hash($this->request->getVar('adminpassword'), PASSWORD_BCRYPT);
        $adminLevel = $this->request->getVar('adminlevel');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'adminid' => [
                'rules' => 'required|is_unique[admins.adminid]|min_length[6]|max_length[20]',
                'label' => 'ID Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 6 karakter',
                    'is_unique' => '{field} sudah digunakan'
                ]
            ],
            'adminnama' => [
                'rules' => 'required|min_length[6]|max_length[20]',
                'label' => 'Nama Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 6 karakter',

                ]
            ],
            'adminpassword' => [
                'rules' => 'required|min_length[8]|max_length[20]',
                'label' => 'Password',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 8 karakter'
                ]
            ],
            'adminlevel' => [
                'rules' => 'required',
                'label' => 'Admin Level',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ]);

        if (!$valid) {
            $sessError = [
                'errNamaAdmin' => $validation->getError('adminnama'),
                'errPassword' => $validation->getError('adminpassword'),
                'errAdminId' => $validation->getError('adminid'),
                'errAdminLevel' => $validation->getError('adminlevel'),
            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/admin/tambah');
        } else {
            $this->adminModel->insert([
                'adminnama' => $adminNama,
                'adminid' => $adminId,
                'adminpassword' => $password,
                'adminlevel' => $adminLevel
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Admin Berhasil Disimpan
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/admin/index');
        }
    }

    public function edit($id)
    {
        $rowData = $this->adminModel->find($id);

        if ($rowData) {
            $data = [
                'id' => $id,
                'adminname' => $rowData['adminnama'],
                'password' => $rowData['password'],
            ];
            return view('backend/admin/e_admin', $data);
        } else {
            exit('Data tidak ditemukan');
        }
    }

    public function update()
    {
        $adminId = $this->request->getVar('adminid');
        $adminNama = $this->request->getVar('adminnama');
        $password = password_hash($this->request->getVar('adminpassword'), PASSWORD_BCRYPT);
        $adminLevel = $this->request->getVar('adminlevel');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'adminid' => [
                'rules' => 'required|is_unique[admins.adminid]|min_length[6]|max_length[20]',
                'label' => 'ID Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 6 karakter',
                    'is_unique' => '{field} sudah digunakan'
                ]
            ],
            'adminnama' => [
                'rules' => 'required|min_length[6]|max_length[20]',
                'label' => 'Nama Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 6 karakter',

                ]
            ],
            'adminpassword' => [
                'rules' => 'required|min_length[8]|max_length[20]',
                'label' => 'Password',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter',
                    'min_length' => '{field} minimal 8 karakter'
                ]
            ],
            'adminlevel' => [
                'rules' => 'required',
                'label' => 'Admin Level',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ]);

        if (!$valid) {
            $sessError = [
                'errNamaAdmin' => $validation->getError('adminnama'),
                'errPassword' => $validation->getError('adminpassword'),
                'errAdminId' => $validation->getError('adminid'),
                'errAdminLevel' => $validation->getError('adminlevel'),
            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/admin/edit');
        } else {
            $this->adminModel->update($adminId, [
                'adminnama' => $adminNama,
                'adminpassword' => $password,
                'adminlevel' => $adminLevel
            ]);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Admin Berhasil Diubah
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/admin/edit');
        }
    }
    public function hapus($id)
    {
        $rowData  = $this->adminModel->find($id);

        if ($rowData) {
            $this->adminModel->delete($id);

            $pesan = [
                'sukses' => '<br><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data berhasil dihapus
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/admin/index');
        } else {
            exit('Data tidak ditemukan');
        }
    }
}
