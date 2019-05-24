<?php

/**
 * 
 */
class M_kurban extends CI_Model
{
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function tampil_data(){
		return $this->db->get('daftar_hewan_kurban');
	}
	
	function hapus_data($data,$no){
    $this->db->where('no', $no);
    $this->db->delete('daftar_hewan_kurban');
    $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
  	}

 	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	/*function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}*/

	function update_data($data,$no){
    $this->db->where('no', $no);
    $this->db->update('daftar_hewan_kurban',$data);
    return true;
  }

  	function cek_login($table,$where){
  		return $this->db->get_where($table,$where);
  	}
}