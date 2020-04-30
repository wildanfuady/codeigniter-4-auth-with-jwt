<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model{

    protected $table = "users";

    public function register($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query ? true : false;
    }

    public function cek_login($email)
    {
        $query = $this->table($this->table)
                ->where('email', $email)
                ->countAll();

        if($query >  0){
            $hasil = $this->table($this->table)
                    ->where('email', $email)
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        } else {
            $hasil = array(); 
        }
        return $hasil;
    }
}