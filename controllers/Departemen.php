<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	function __construct(){
		parent::__construct();
		// load model M_departemen
		$this->load->model('m_departemen');
	}

    public function index(){
    	
    $data['judul']='Daftar Departemen';
    	
$data['deps']=$this->m_departemen->ambil_data()->result();

    	$this->load->view('departemen/index',$data);

    }

}