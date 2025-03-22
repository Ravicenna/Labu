<?php

namespace App\Controllers;

use App\Models\adminDatang;
use App\Models\laporanUser;

class adminC extends BaseController
{
    public function index(): string
    {
        /*tabel data*/
        $key = new laporanUser();
        $data = $key->getdata();
        /*tabel kunci*/
        $jawa = new adminDatang();
        $admin = $jawa->getAdmin();
        return view('admin/homeAdmin', compact('data', 'admin'));
    }
}
