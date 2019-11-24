<?php 

class Wisata extends CI_Controller{

	public function index()
	{
		$data['wisata'] = $this->model_wisata->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('wisata', $data);
		$this->load->view('templates/footer');	
	}

	public function booking($id){
		$wisata = $this->model_wisata->find($id);

		$data = array(
			'id'      => $wisata->id_wisata,
			'qty'     => 1,
			'price'   => $wisata->harga,
			'name'    => $wisata->nama_wisata
		);

		$this->cart->insert($data);
		redirect('wisata');
	}

	public function detail_booking(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_booking');
		$this->load->view('templates/footer');
	}

	public function hapus_booking(){
		$this->cart->destroy();
		redirect('wisata/index');
	}

	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_booking(){
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_booking');
			$this->load->view('templates/footer');	
		} else{
			echo "Maaf, Pembookingan Anda Gagal Diproses";
		}
	}

	public function detail($id_wisata){
		$data['wisata'] = $this->model_wisata->detail_booking($id_wisata);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_wisata', $data);
		$this->load->view('templates/footer');
	}

}
