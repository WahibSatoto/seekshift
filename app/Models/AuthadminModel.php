<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthadminModel extends Model
{
    protected $table            = 'tb_admin';
    protected $primaryKey       = 'adminname';
    protected $allowedFields    = [
        'adminname', 'adminnohp', 'admin_level', 'passwordadmin'
    ];
}
