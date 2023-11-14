<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Maintenance extends BaseController
{
    public function index()
    {
        return view('maintenance/errors');
    }
    public function undefined_data()
    {   
        return view('maintenance/null');
    }
}
