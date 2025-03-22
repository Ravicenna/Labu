<?php

namespace App\Controllers;

use App\Models\laporanUser;

class home extends BaseController
{
    public function index()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/home1', compact('data'));
    }

    public function laporan()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/doclaporan', compact('data'));
    }

    public function login()
    {
        return view('users/loginUser');
    }
}


