<div class="container-fluid">
	
	<div class="card">
		<h5 class="card-header">Lihat Wisata</h5>
		<div class="card-body">
			
			<?php foreach($wisata as $wst) : ?>
				<div class="row">	
					<div class="col-md-4">
						<img src="<?php echo base_url().'/uploads/'.$wst->gambar_wisata  ?>" class="card-img-top" >

					</div>
					<div class="cold-md-8">
						<table class="table">
							<tr>
								<td>ID Wisata</td>
								<td><strong><?php echo $wst->id_wisata ?></strong></td>
							</tr>

							<tr>
								<td>Nama Wisata</td>
								<td><strong><?php echo $wst->nama_wisata ?></strong></td>
							</tr>

							<tr>
								<td>Lokasi Wisata</td>
								<td><strong><?php echo $wst->tempat_wisata ?></strong></td>
							</tr>

							<tr>
								<td>Kategori</td>
								<td><strong><?php echo $wst->kategori ?></strong></td>
							</tr>
							
							<tr>
								<td>Jam Buka - Tutup</td>
								<td><strong><?php echo $wst->buka_tutup ?></strong></td>
							</tr>

							<tr>
								<td>Harga Masuk Perorang</td>
								<td><strong><div class="btn btn-sm btn-warning">Rp. <?php echo number_format( $wst->harga,0,',','.') ?></div></strong></td>
							</tr>

							<!-- <tr>
								<td>Keterangan</td>
								<td><strong><?php ?></strong></td>
							</tr> -->
						</table>
					</div>
				</div>

			<?php endforeach; ?>
			
			<div align="right">
				<a href="<?php echo base_url('admin/data_wisata') ?>" ><div class="btn btn-sm btn-primary mt-3 mb-4">Kembali</div></a>
			</div>

		</div>

	</div>
</div>
</div>
