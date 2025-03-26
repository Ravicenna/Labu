<?php

namespace App\Controllers;

use App\Models\laporanUser;

class home extends BaseController
{
    public function index(): string
    {
        /*iki tabel data*/
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/home1', compact('data'));
    }

    public function delete($id)
    {
        $laporanUser = new laporanUser();
        $laporanUser->delete($id);
        return redirect()->to('/admin');
    }
}
