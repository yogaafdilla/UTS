<div class="container-fluid">
	
	<div class="card">
		<h5 class="card-header">Detail Wisata</h5>
		<div class="card-body">
			
			<?php foreach($wisata as $wst) : ?>
				<div class="row">	
					<div class="col-md-4">
						<img src="<?php echo base_url().'/uploads/'.$wst->gambar_wisata  ?>" class="card-img-top" >

					</div>
					<div class="cold-md-8">
						<table class="table">
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

				<div align="center">
					<?php echo anchor('wisata/booking/'.$wst->id_wisata,'<div class="btn btn-sm btn-primary"> Booking Sekarang </div>')?>
					<?php echo anchor('wisata/index/'.$wst->id_wisata,'<div class="btn btn-sm btn-danger"> Kembali </div>')?>
				</div>

			<?php endforeach; ?>


		</div>
	</div>
</div>
