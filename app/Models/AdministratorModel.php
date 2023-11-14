<?php

namespace App\Models;

use CodeIgniter\Model;

class AdministratorModel extends Model
{
    public function tot_admin()
    {
        return $this->db->table('admins')->countAll();
    }
    public function tot_kat()
    {
        return $this->db->table('tb_kategori')->countAll();
    }
    public function tot_lokasi()
    {
        return $this->db->table('tb_lokasi')->countAll();
    }
}
