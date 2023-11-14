<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdministratorModel;

class Administrator extends BaseController
{

    protected $adminModel;
    public function __construct()
    {
    }

    public function index()
    {
        if (session()->get('adminnama') == null) {
            return redirect()->to('loginadmin');
        }
        $this->adminModel = new AdministratorModel();
        $data = [
            'total_admin' => $this->adminModel->tot_admin(),
            'total_kategori' => $this->adminModel->tot_kat(),
            'total_lokasi' => $this->adminModel->tot_lokasi()
        ];
        return view('backend/dashboard/v_dashboard', $data);
    }
}
