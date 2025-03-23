<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginKunci extends Model
{
    protected $table = 'admin'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['username', 'password']; // Kolom yang dapat dimanipulasi

    // Tambahkan fungsi kustom untuk mendapatkan data pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first(); // Mengambil pengguna dengan username tertentu
    }
}