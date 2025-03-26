<?php

namespace App\Controllers;

use App\Models\laporanUser;

class laporan extends BaseController
{

    public function ndelok()
    {
        return view('users/doclaporan');
    }
    public function store()
    {
        $laporanUser = new laporanUser();
        $data = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'buku' => $this->request->getPost('buku'),
            'jenis' => $this->request->getPost('jenis'),
            'masalah' => $this->request->getPost('masalah'),
            'foto' => $this->request->getFile('bukti') ? $this->request->getFile('bukti')->store('uploads') : null
        ];
        $laporanUser->insert($data);
        return redirect()->to('/laporan');
    }
}
