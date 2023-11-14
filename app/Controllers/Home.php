<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "user") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        return view('front/v_home');
    }
    public function cari_lowongan()
    {
        return view('front/v_cari');
    }
}
