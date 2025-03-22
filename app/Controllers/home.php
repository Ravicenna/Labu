<?php

namespace App\Controllers;

class home extends BaseController
{
    public function index()
    {
        return view('users/home1');
    }
    public function laporan()
    {
        return view('users/doclaporan');
    }
    public function login()
    {
        return view('users/loginUser');
    }
}


