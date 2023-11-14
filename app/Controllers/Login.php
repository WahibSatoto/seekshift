<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('frontend/auth/v_login');
    }

    public function cekUser()
    {
        $username = $this->request->getVar('username');
        $pass = $this->request->getVar('userpassword');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'username' => [
                'rules' => 'required',
                'label' => 'Username',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'userpassword' => [
                'rules' => 'required',
                'label' => 'Password',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$valid) {
            $pesanErr = [
                'errUsername' => '<div class="alert alert-danger">' . $validation->getError('username') . '</div>',
                'errPassword' => '<div class="alert alert-danger">' . $validation->getError('userpassword') . '</div>'

            ];

            session()->setFlashdata($pesanErr);
            return redirect()->to(site_url('login/index'));
        } else {
            $modelUser = new UserModel();

            $cekUserLogin = $modelUser->find($username);
            
            if ($cekUserLogin == null) {
                $pesanErr = [
                    'errUsername' => '<div class="alert alert-danger">Username tidak terdaftar</div>',
                ];

                session()->setFlashdata($pesanErr);
                return redirect()->to(site_url('login/index'));
            } else {
                $passwordUser = $cekUserLogin['userpassword'];

                if (password_verify($pass, $username)) {
                    $levelUser = $cekUserLogin['userlevel'];

                    $simpan_session = [
                        'username' => $username,
                        'userfullname' => $cekAdminLogin['userfullname'],
                        'userlevel' => $levelUser
                    ];
                    session()->set($simpan_session);

                    return redirect()->to('/jobpost/index');
                } else {
                    $sessError = [
                        'errPassword' => 'Password anda salah',
                    ];

                    session()->setFlashdata($sessError);
                    return redirect()->to(site_url('login/index'));
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
