<?php 

class Data_wisata extends CI_Controller{
	public function index()
	{
		$data['wisata'] = $this->model_wisata->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_wisata', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_wisata = $this->input->post('nama_wisata');
		$tempat_wisata = $this->input->post('tempat_wisata');
		$kategori = $this->input->post('kategori');
		$buka_tutup = $this->input->post('buka_tutup');
		$harga = $this->input->post('harga');
		$gambar_wisata = $_FILES['gambar_wisata']['name'];
		if ($gambar_wisata =''){
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar_wisata')){
				echo "Gambar Gagal Di Upload!";
			}else{
				$gambar_wisata = $this->upload->data('file_name');
			}
		} 

		$data = array(
			'nama_wisata' => $nama_wisata,
			'tempat_wisata' => $tempat_wisata,
			'kategori' => $kategori,
			'buka_tutup' => $buka_tutup,
			'harga' => $harga,
			'gambar_wisata' => $gambar_wisata
		);

		$this->model_wisata->tambah_wisata($data, 'db_wisata');
		redirect('admin/data_wisata/index');
	}

	public function edit($id)
	{
		$where = array('id_wisata'=>$id);
		$data['wisata'] = $this->model_wisata->edit_wisata($where,'db_wisata')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_wisata', $data);
		$this->load->view('templates_admin/footer');

	}

	public function update(){ 
		$id = $this->input->post('id_wisata');
		$nama_wisata = $this->input->post('nama_wisata');
		$kategori = $this->input->post('kategori');
		$tempat_wisata = $this->input->post('tempat_wisata');
		$buka_tutup = $this->input->post('buka_tutup');
		$harga = $this->input->post('harga');
		$gambar_wisata = $_FILES['gambar_wisata']['name'];
		if ($gambar_wisata =''){
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar_wisata')){
				echo "Gambar Gagal Di Upload!";
			}else{
				$gambar_wisata = $this->upload->data('file_name');
			}
		} 

		$data = array(
			'nama_wisata' => $nama_wisata,
			'tempat_wisata' => $tempat_wisata,
			'kategori' => $kategori,
			'buka_tutup' => $buka_tutup,
			'harga' => $harga,
			'gambar_wisata' => $gambar_wisata
			);

		$where = array(
			'id_wisata' => $id
		);

		$this->model_wisata->update_data($where,$data,'db_wisata');
		redirect('admin/data_wisata/index');
	}

	public function hapus($id){
		$where = array('id_wisata' => $id);
		$this->model_wisata->hapus_data($where, 'db_wisata');
		redirect('admin/data_wisata/index');
	}

	public function lihat($id){
		$where = array('id_wisata'=>$id);
		$data['wisata'] = $this->model_wisata->tampil_data($where,'db_wisata')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/lihat_wisata', $data);
		$this->load->view('templates_admin/footer');
	}
}