<?php 

class Kategori extends CI_Model{
	public function data_wisata_alam(){
		return $this->db->get_where('db_wisata', array('kategori' => 'wisata_alam'));
	}
}