<?php

namespace App\Controllers;

use App\Models\LoginKunci;

class loginAdmin extends BaseController
{
    public function index()
    {
        // Menampilkan halaman login
        return view('users/loginUser');
    }

    public function authenticate()
    {
        $session = session();
        $model = new LoginKunci();

        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if (empty($username) || empty($password)) {
            $session->setFlashdata('error', 'Semua bidang wajib diisi!');
            return redirect()->back()->withInput();
        }

        // Cek pengguna berdasarkan username
        $user = $model->getUserByUsername($username);

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set sesi pengguna
                $session->set([
                    'logged_in' => true,
                    'username' => $user['username']
                ]);

                // Redirect ke halaman dashboard/admin
                return redirect()->to('admin/homeAdmin');
            } else {
                $session->setFlashdata('error', 'Password salah!');
                return redirect()->back()->withInput();
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Menghapus sesi
        return redirect()->to('/login'); // Redirect ke halaman login
    }
}