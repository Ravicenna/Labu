<?php
namespace App\Models;

use CodeIgniter\Model;

class laporanUser extends Model
{
    protected $allowedFields = ['email', 'buku', 'masalah', 'nama', 'foto', 'jenis'];

    protected $table = 'daftarlaporan';

    public function getdata()
    {
        return $this->findAll();
    }

}
