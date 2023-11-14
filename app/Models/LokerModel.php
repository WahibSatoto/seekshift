<?php

namespace App\Models;

use CodeIgniter\Model;

class LokerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_loker';
    protected $primaryKey       = 'lokerid';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'lokerid', 'katid', 'lokid', 'posisi', 'perusahaannm', 'pendidikan', 'deskripsi', 'authorid', 'authornm', 'slug', 'usiamin', 'usiamax',
        'domisili', 'gaji', 'jenispekerjaan', 'lowonganjumlah'
    ];

    public function tampilData()
    {
        return $this->db->table('tb_loker')
            ->join('tb_kategori', 'tb_kategori.katid = tb_loker.katid')
            ->join('tb_lokasi', 'tb_lokasi.lokid = tb_loker.lokid')
            ->get()->getResultArray();
    }

    public function allKat()
    {
        return $this->db->table('tb_kategori')
            ->get()->getResultArray();
    }
    public function allLok()
    {
        return $this->db->table('tb_lokasi')
            ->get()->getResultArray();
            
    }

    public function getJob($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['lokerid' => $id])->first();
    }

    public function tampildata_cari($cari)
    {
        return $this->db->table('tb_loker')
            ->join('tb_kategori', 'tb_kategori.katid = tb_loker.katid')
            ->join('tb_lokasi', 'tb_lokasi.lokid = tb_loker.lokid')
            ->orlike('katnama', $cari)
            ->orlike('loknama', $cari)
            ->orlike('posisi', $cari)
            ->get()->getResultArray();
    }
}
