<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class KategoriModel extends Model{
    protected $table = 'kategori';
    protected $primaryKey = 'idKategori';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idKategori', 'namaKategori'];
    protected $db;
    

    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }

}