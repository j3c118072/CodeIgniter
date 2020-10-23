<?php namespace App\Controllers;

class Mahasiswa extends BaseController
{
	public function index()
	{
		echo "pbw";
    }
    
    public function ucapan(){
        //echo "Selamat Malam";
        //return view ("hello");
        $data["n"]=$this->request->getGet("nama");
        echo view("hello",$data) ;
    }

}