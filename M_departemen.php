<?php 

class M_departemen extends CI_Model{

     function ambil_data(){
     	// SELECT * FROM departemen
     	return $this->db->get('departemen');
     }


}