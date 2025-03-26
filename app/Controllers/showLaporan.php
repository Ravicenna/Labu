<?php

namespace App\Controllers;

use App\Models\laporanUser;

class showLaporan extends BaseController
{

    public function index()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/drafLaporan', compact('data'));
    }
}