<div class="container-fluid">
	<h4>Total Pembookingan</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Wisata</th>
			<th>Jumlah Orang</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($items['price'],0,',','.')  ?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'],0,',','.') ?></td>
			</tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4">Sub Total</td>
			<td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
		</tr>

	</table>

	<div align="right">
		<a href="<?php echo base_url('wisata/hapus_booking') ?>"><div class="btn btn-sm btn-danger">
		Hapus Booking</div></a>
		<a href="<?php echo base_url('wisata/index') ?>"><div class="btn btn-sm btn-primary">
		Lanjut Booking</div></a>
		<a href="<?php echo base_url('wisata/pembayaran') ?>"><div class="btn btn-sm btn-success">
		Pembayaran</div></a>
	</div>
</div>