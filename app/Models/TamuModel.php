<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class TamuModel extends Model{
    protected $table = 'guest';
    protected $primaryKey = 'idGuest';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idGuest', 'idKategori', 'sapaanGuest', 'namaGuest', 'nicknameGuest', 'alamatGuest', 'telpGuest'];
    protected $db;
    

    function add($data){
        return $this->db
        ->table($this->table)
        ->insert($data);
    }

}