<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        return view('front/layout');
    }
    public function back()
    {
        return view('back/layout');
    }
    public function backend()
    {
        return view('backend/layout');
    }
    public function frontend()
    {
        return view('frontend/layout');
    }
    public function frontendSec()
    {
        return view('frontend/layoutsec');
    }
}
