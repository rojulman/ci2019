<?php 

class M_departemen extends CI_Model{

     function ambil_data(){
     	// SELECT * FROM departemen
     	return $this->db->get('departemen');
     }

     function input_data($table,$data){
     	// INSERT INTO departemen values bla bla ..
     	$this->db->insert($table,$data);
     }

     function get_id($table,$idx){
     	// SELECT * FROM departemen WHERE id=$idx
     	$this->db->where('id',$idx);
     	return $this->db->get($table)->row();
     }

     function update($table,$data,$idx){
     	$this->db->where('id',$idx);
     	$this->db->update($table,$data);
     }

     function delete($table,$idx){
     	$this->db->where('id',$idx);
     	$this->db->delete($table);
     }


}