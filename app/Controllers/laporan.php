<?php

namespace App\Controllers;

use App\Models\laporanUser;

class laporan extends BaseController
{
    public function input()
    {
        $key = new laporanUser();
        $data = $key->getdata();
        return view('users/doclaporan', compact('data'));
    }

    public function store()
    {
        $laporanUser = new laporanUser();
        log_message('debug', 'Request data: ' . json_encode($this->request->getPost()));
        log_message('debug', 'File data: ' . json_encode($this->request->getFile('bukti')));
        $data = [
            'email' => $this->request->getPost('email'),
            'buku' => $this->request->getPost('buku'),
            'masalah' => $this->request->getPost('masalah'),
            'foto' => $this->request->getFile('bukti') ? $this->request->getFile('bukti')->store('uploads') : null
        ];
        $laporanUser->insert($data);
        return redirect()->to('/laporan');
    }
}
