<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokerModel;

class Jobsearch extends BaseController
{
    protected $lokerModel;

    public function __construct()
    {
        $this->lokerModel = new LokerModel();
    }

    public function index()
    {
        $tcari = $this->request->getVar('tcari');
        if (isset($tcari)) {
            $cari = $this->request->getVar('cari');
            session()->set('cari_loker', $cari);
            redirect()->to('jobsearch/index');
        } else {
            $cari = session()->get('cari_loker');
        }

        $dataLoker = $cari ? $this->lokerModel->tampildata_cari($cari) : $this->lokerModel->tampildata();
        $data = [
            'dataloker' => $dataLoker,
            'cari' => $cari
        ];
        return view('frontend/jobsearch/v_jobsearch', $data);
    }

    public function detail($id)
    {
        $data = [
            'job' => $this->lokerModel->getJob($id)
        ];

        return view('frontend/jobsearch/detail', $data);
    }
}
