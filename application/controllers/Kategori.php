<?php 

class Kategori extends CI_Controller{
	public function wisata_alam(){
		$data['wisata_alam'] = $this->model_kategori->data_wisata_alam()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('wisata_alam', $data);
		$this->load->view('templates/footer');
	}
}