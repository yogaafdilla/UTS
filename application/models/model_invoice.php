<?php 

class Model_invoice extends CI_Model{
	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$jumlah_orang = $this->input->post('jumlah_orang');
		
		$invoice = array(
			'nama' => $nama	,
			'jumlah_orang' => $jumlah_orang,
			'tgl_booking' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') +1, date('Y'))),

		);
		$this->db->insert('db_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice' => $id_invoice,
				'nama_wisata' => $item['name'],
				'jumlah_orang' => $item['qty'],
				'harga' => $item['price'],
			);
			$this->db->insert('db_booking', $data);
		}

		return TRUE;
	}

	public function tampil_data(){
		$result = $this->db->get('db_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('db_invoice');
		if($result->num_rows() >0){
			return $result->row();
		} else {
			return false;
		}
	}

	public function ambil_id_booking($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->get('db_booking');
		if($result->num_rows() >0){
			return $result->result();
		} else {
			return false;
		}
	}
}