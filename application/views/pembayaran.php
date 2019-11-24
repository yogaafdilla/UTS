<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($booking = $this->cart->contents()){
					foreach ($booking as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "Total Pembayaran Anda : Rp. ".number_format($grand_total,0,',','.');
					?>
				</div><br><br>

				<h3>Input Data Pembookingan</h3>

				<form method="post" action="<?php echo base_url('wisata/proses_booking') ?> ">

					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="e_mail" placeholder="E-mail Aktif Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Nomor Telepon</label>
						<input type="text" name="nomor_telepon" placeholder="Nomor Telepon Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Datang</label>
						<input type="text" name="hari_datang" placeholder="Format YYYY-MM-DD" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Jumlah Orang</label>
						<input type="text" name="jumlah_orang" placeholder="Nama Lengkap Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Pilih Bank</label>
						<select class="form-control">
							<option>BCA - XXXXXXXX</option>
							<option>BNI - XXXXXXXX</option>
							<option>BRI - XXXXXXXX</option>
							<option>BJB - XXXXXXXX</option>
							<option>MANDIRI - XXXXXXXX</option>
						</select>
					</div>

					<button type="submit" class="btn btn-sm btn-primary">Booking Sekarang</button><br><br>

				</form>

				<?php 
			}else{
				 echo "<h3>Anda Belum Membooking Apapun</h3>";
			}
			?>

		</div><br>
		
	</div>

	<div class="col-md-2"></div>
</div>
</div>