<?php
namespace App\Controllers;

use App\Models\laporanUser;
use CodeIgniter\Controller;
use App\Models\PostModel;

class laporan extends Controller
{

    public function index()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/doclaporan', compact('data'));
    }
}