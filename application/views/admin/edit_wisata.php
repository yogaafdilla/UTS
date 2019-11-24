<div class="container">
	<h3><i class="fas fa-edit"></i>EDIT DATA WISATA</h3>

	<?php  foreach ($wisata as $wst) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_wisata/update' ?>" enctype="multipart/form-data">

			<div class="for-group">
				<label>Nama Wisata</label>
				<input type="text" name="nama_wisata" class="form-control" value="<?php echo $wst->nama_wisata ?>">
			</div>

			<div class="for-group">
				<label>Lokasi Wisata</label>
				<input type="hidden" name="id_wisata" class="form-control" value="<?php echo $wst->id_wisata ?>">
				<input type="text" name="tempat_wisata" class="form-control" value="<?php echo $wst->tempat_wisata ?>">
			</div>

			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $wst->kategori ?>">
			</div>			

			<div class="for-group">
				<label>Jam Buka - Tutup</label>
				<input type="text" name="buka_tutup" class="form-control" value="<?php echo $wst->buka_tutup ?>">
			</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $wst->harga ?>">
			</div>

			<div class="for-group">
				<label>Gambar</label>
				<input type="file" name="gambar_wisata" class="form-control" value="<?php echo $wst->gambar_wisata ?>">
			</div>

			<button type="submit" class=" btn btn-primary btn-sm mt-3">Simpan Perubahan</button>
			
		</form>

	<?php endforeach; ?>
</div>