<?php 

class Model_wisata extends CI_Model{
	public function tampil_data(){
		return $this->db->get('db_wisata');
	}

	public function tambah_wisata($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_wisata($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_wisata', $id)
							->limit(1)
							->get('db_wisata');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_booking($id_wisata){
		$result = $this->db->where('id_wisata',$id_wisata)->get('db_wisata');
		if($result->num_rows() >0){
			return $result->result();
		} else {
			return false;
		}
	}

}