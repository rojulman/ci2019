<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		// load model M_kategori
		$this->load->model('m_kategori');
	}

    public function index(){
    	
    	$data['judul']='Daftar Kategori';
    	
    	$data['kategoris']=$this->m_kategori->ambil_data()->result();

    	$this->load->view('kategori/index',$data);

    }

}