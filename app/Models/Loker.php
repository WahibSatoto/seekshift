<?php

namespace App\Models;

use CodeIgniter\Model;

class Loker extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lokers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

}
