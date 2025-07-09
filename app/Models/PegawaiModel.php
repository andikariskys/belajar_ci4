<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pegawai', 'id_jabatan', 'alamat', 'telepon'];

    public function getPegawaiWithJabatan()
    {
        return $this->select('pegawai.*, jabatan.nama_jabatan, jabatan.deskripsi_jabatan')
                    ->join('jabatan', 'pegawai.id_jabatan = jabatan.id')
                    ->findAll();
    }
}
