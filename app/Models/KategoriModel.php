<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_kategori';
    protected $primaryKey       = 'katid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['katid', 'katnama'];

    public function cariData($cari)
    {
        return $this->table('tb_kategori')->like('katnama', $cari);
    }
}
