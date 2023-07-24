<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_obat', 'jumlah', 'harga'];

    public function getById($id)
{
    return $this->find($id);
}

}
