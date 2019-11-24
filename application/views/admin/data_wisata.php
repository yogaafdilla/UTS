<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_wisata"><i class="fas fa-plus fa-sm"></i> Tambah Data Tempat Wisata </button>

	<table class="table table-bordered" >
		<tr>
			<th>ID Wisata</th>
			<th>Nama Wisata</th>
			<th>Lokasi Wisata</th>
			<th>Kategori</th>
			<th>Jam Buka - Tutup</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($wisata as $wst) :?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $wst->nama_wisata ?></td>
				<td><?php echo $wst->tempat_wisata ?></td>
				<td><?php echo $wst->kategori ?></td>
				<td><?php echo $wst->buka_tutup ?></td>
				<td><?php echo $wst->harga ?></td>
				<td><?php echo $wst->gambar_wisata ?></td>
				<td><?php echo anchor('admin/data_wisata/lihat/'.$wst->id_wisata,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_wisata/edit/'.$wst->id_wisata,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_wisata/hapus/'.$wst->id_wisata,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
			<?php 
		endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_wisata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Wisata</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'admin/data_wisata/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label>Nama Wisata</label>
						<input type="text" name="nama_wisata" class="form-control" placeholder="Masukan Nama Wisata Baru">
					</div>

					<div class="form-group">
						<label>Lokasi Wisata</label>
						<input type="text" name="tempat_wisata" class="form-control" placeholder="Masukan Lokasi Wisata">
					</div>

					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control">
							<option>Wisata Alam</option>
							<option>Wisata Sejarah</option>
							<option>Wisata Monumen</option>
							<option>Wisata Museum</option>
							<option>Wisata Pantai</option>
							<option>Wisata Taman Hiburan</option>
						</select>
					</div>

					<div class="form-group">
						<label>Jam Buka - Tutup</label>
						<input type="text" name="buka_tutup" class="form-control" placeholder="Contoh Format 08:15-21:30">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" placeholder="Masukan Biaya Masuk Wisata">
					</div>

					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar_wisata" class="form-control">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambahkan</button>
				</div>
			</form>
		</div>
	</div>
</div>