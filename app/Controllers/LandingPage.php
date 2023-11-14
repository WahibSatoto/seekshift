<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UlasanModel;

class LandingPage extends BaseController
{
    public function index()
    {
        $ulasandata = new UlasanModel;
        $data = [
            'dataulasan' => $ulasandata->findAll()
        ];
        return view('frontend/landing', $data);
    }


    public function comunity()
    {
        return view('frontend/comunity');
    }

    public function ulasanSave()
    {
        $ulasanModel = new UlasanModel();

        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $ulasan = $this->request->getVar('ulasan');
        $sebagai = $this->request->getVar('sebagai');

        $ulasanModel->insert([
            'ulasannama' => $nama,
            'ulasanemail' => $email,
            'ulasantext' => $ulasan,
            'ulasansebagai' => $sebagai
        ]);

        return redirect()->to('/landingpage');
    }
}
