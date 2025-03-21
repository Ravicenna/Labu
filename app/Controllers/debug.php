<?php

namespace App\Controllers;

class debug extends BaseController
{
    public function debugs(): string
    {
        return view('welcome_message');
    }
}
