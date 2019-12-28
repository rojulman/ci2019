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

    public function form(){

        $data['judul']='Form Departemen';
        $this->load->view('departemen/form',$data);

    }

    public function add(){
        // tangkap data kiriman form
        $_nama = $this->input->post('nama');
        $_abbr = $this->input->post('abbr');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
       
        // simpan dalam array
        $data = [
            'nama'=>$_nama,
            'abbr'=>$_abbr,
            'alamat'=>$_alamat,
            'telpon'=>$_telpon
        ];

        // input ke table departemen
$this->m_departemen->input_data('departemen',$data);        // redirect page ke departemen/index
        redirect('../departemen');
    }

    public function edit($idx){

    $obj = $this->m_departemen->get_id('departemen',$idx);
    $data['judul']='Edit Departemen';
    $data['dep']=$obj;
    $this->load->view('departemen/edit',$data);

    }

    public function update($idx){
        $_nama = $this->input->post('nama');
        $_abbr = $this->input->post('abbr');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
       
        // simpan dalam array
        $data = [
            'nama'=>$_nama,
            'abbr'=>$_abbr,
            'alamat'=>$_alamat,
            'telpon'=>$_telpon
        ];
        $this->m_departemen->update('departemen',$data,$idx);
        redirect('../departemen');

    }


}