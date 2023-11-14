<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginadminModel;

class Loginadmin extends BaseController
{
    public function index()
    {
        return view('backend/login/v_login');
    }

    public function cekUser()
    {
        $idadmin = $this->request->getVar('adminid');
        $pass = $this->request->getPost('adminpassword');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'adminid' => [
                'rules' => 'required',
                'label' => 'ID Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'adminpassword' => [
                'rules' => 'required',
                'label' => 'Password Admin',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$valid) {
            $pesanErr = [
                'errorIdAdmin' => '<div class="alert alert-danger">' . $validation->getError('idadmin') . '</div>',
                'errPassword' => '<div class="alert alert-danger">' . $validation->getError('adminpassword') . '</div>'

            ];

            session()->setFlashdata($pesanErr);
            return redirect()->to(site_url('loginadmin/index'));
        } else {
            $modelLoginAdmin = new LoginadminModel();

            $cekAdminLogin = $modelLoginAdmin->find($idadmin);

            if ($cekAdminLogin == null) {
                $pesanErr = [
                    'errorIdAdmin' => '<div class="alert alert-danger">ID Admin tidak terdaftar</div>',
                ];

                session()->setFlashdata($pesanErr);
                return redirect()->to(site_url('loginadmin/index'));
            } else {
                $passwordAdmin = $cekAdminLogin['adminpassword'];

                if (password_verify($pass, $passwordAdmin)) {
                    $idlevel = $cekAdminLogin['adminlevel'];

                    $simpan_session = [
                        'adminid' => $idadmin,
                        'adminnama' => $cekAdminLogin['adminnama'],
                        'adminlevel' => $idlevel
                    ];
                    session()->set($simpan_session);

                    return redirect()->to('/administrator/index');
                } else {
                    $sessError = [
                        'errPassword' => 'Password anda salah',
                    ];

                    session()->setFlashdata($sessError);
                    return redirect()->to(site_url('loginadmin/index'));
                }
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/loginadmin');
    }
}
