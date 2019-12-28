<?php

class NilaiSiswa extends CI_Model{

	public $nama ="";
	public $nilai = 0;
	public $matkul ="";	
	public static $SEKOLAH = 'SDIT NurulFikri';

	public function __construct(){
		parent::__construct();
	} 


}


?>