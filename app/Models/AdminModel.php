<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'admins';
    protected $primaryKey       = 'adminid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['adminid', 'adminnama', 'adminpassword', 'adminlevel'];


    public function tampilData()
    {

        return $this->db->table('admins')
            ->join('levels', 'levels.levelid = admins.adminlevel')
            ->get()->getResultArray();
    }

    public function tampildata_cari($cari)
    {
        return $this->db->table('admins')
            ->join('levels', 'levels.levelid = admins.adminlevel')
            ->orlike('adminid', $cari)
            ->orlike('adminnama', $cari)
            ->orlike('levelnama', $cari)
            ->get()->getResultArray();
    }

    public function allLevel()
    {
        return $this->db->table('levels')
            ->get()->getResultArray();
    }
}
