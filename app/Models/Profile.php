<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['first_name', 'last_name', 'email', 'no_hp', 'alamat']; // Field yang bisa diisi

    // Fungsi untuk mengambil data pengguna berdasarkan ID
    public function getUserById($id)
    {
        return $this->where('id', $id)->first();
    }
}
