<?php namespace App\Models;

use CodeIgniter\Model;

class Program_Studi_Model extends Model {

    private $table = 'prodi';
    public function get($db) {
        $db = \Config\Database::connect();

        return $db->table($this->table)->get();
    }
}


?>