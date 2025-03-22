<?php
namespace App\Models;

use CodeIgniter\Model;

class adminDatang extends Model
{

    protected $table = 'admin';

    public function getAdmin()
    {
        return $this->findAll();
    }

}