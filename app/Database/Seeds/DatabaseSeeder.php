<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;

class DatabaseSeeder extends Seeder
{
    protected $jabatanModel;
    protected $pegawaiModel;

    public function __construct()
    {
        $this->jabatanModel = model(JabatanModel::class);
        $this->pegawaiModel = model(PegawaiModel::class);
    }

    public function run()
    {
        $data = [
            [
                'nama_jabatan' => 'Manager',
                'deskripsi_jabatan' => 'Bertanggung jawab atas pengelolaan tim dan proyek.'
            ],
            [
                'nama_jabatan' => 'Staff',
                'deskripsi_jabatan' => 'Melaksanakan tugas administratif dan operasional.'
            ],
            [
                'nama_jabatan' => 'HRD',
                'deskripsi_jabatan' => 'Mengelola sumber daya manusia perusahaan.'
            ]
        ];
        $this->jabatanModel->insertBatch($data);

        $pegawaiData = [
            [
                'nama_pegawai' => 'John Doe',
                'id_jabatan' => 1,
                'alamat' => 'Jl. Contoh No. 1, Jakarta',
                'telepon' => '081234567890'
            ],
            [
                'nama_pegawai' => 'Jane Smith',
                'id_jabatan' => 2,
                'alamat' => 'Jl. Contoh No. 2, Bandung',
                'telepon' => '081234567891'
            ],
            [
                'nama_pegawai' => 'Alice Johnson',
                'id_jabatan' => 3,
                'alamat' => 'Jl. Contoh No. 3, Surabaya',
                'telepon' => '081234567892'
            ]
        ];
        $this->pegawaiModel->insertBatch($pegawaiData);
    }
}
