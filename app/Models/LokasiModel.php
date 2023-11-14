<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_lokasi';
    protected $primaryKey       = 'lokid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['lokid', 'loknama'];

    public function cariData($cari)
    {
        return $this->table('tb_lokasi')->like('loknama', $cari);
    }
}
