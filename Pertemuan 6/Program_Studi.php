<?php namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\Program_Studi_Model;

class Program_Studi extends BaseController {

    public function __construct() {
        // parent::__construct();

        // $this->prodi = new Program_Studi_Model();
    }
    
    public function index() {
       $db = \Config\Database::connect();

        $data['dataProdi'] = $db->table('prodi')->get()->getResult();

        // var_dump($data);
        echo view('header_v');
        echo view('program_studi_v', $data);
        echo view('footer_v');
    }
}
?>