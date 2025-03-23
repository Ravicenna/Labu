<?php

namespace App\Controllers;

use App\Models\laporanUser;

class laporan extends BaseController
{

    public function index()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/doclaporan', compact('data'));
    }
}