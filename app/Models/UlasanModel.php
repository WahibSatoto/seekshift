<?php

namespace App\Models;

use CodeIgniter\Model;

class UlasanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ulasans';
    protected $primaryKey       = 'ulasanid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ulasanid', 'ulasannama', 'ulasanemail', 'ulasantext', 'ulasansebagai'
    ];
}
