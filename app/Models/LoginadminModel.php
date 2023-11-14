<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginadminModel extends Model
{
    protected $table            = 'admins';
    protected $primaryKey       = 'adminid';
    protected $allowedFields    = [
        'adminid', 'adminnama', 'adminpassword', 'adminlevel'
    ];
}
