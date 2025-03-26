<?php

namespace App\Controllers;

use App\Models\laporanUser;

class Laporan extends BaseController
{
    public function ndelok()
    {
        return view('users/doclaporan');
    }

    public function store()
    {
        $laporanUser = new laporanUser();

        // Ambil data dari form
        $image = $this->request->getFile('image'); // Ambil file gambar dari input
        $fileName = null;


        if ($image && $image->isValid() && !$image->hasMoved()) {
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/uploads', $fileName);
        }


        $data = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'buku' => $this->request->getPost('buku'),
            'jenis' => $this->request->getPost('jenis'),
            'masalah' => $this->request->getPost('masalah'),
            'foto' => $fileName ? 'uploads/' . $fileName : null,
            'created' => date('Y-m-d H:i:s'),
        ];


        if ($laporanUser->insert($data)) {
            return redirect()->to('/laporan')->with('success', 'Data laporan berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }
}