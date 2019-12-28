<?php 

class M_kategori extends CI_Model{

     function ambil_data(){
     	// SELECT * FROM kategori
     	return $this->db->get('kategori');
     }


}