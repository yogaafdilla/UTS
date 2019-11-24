<div class="container-fluid">
	<h4>Detail Pembookingan Wisata <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id_invoice ?></div></h4>

	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>No</th>
			<th>Nama Wisata</th>
			<th>Jumlah Orang</th>
			<th>Harga Perorang</th>
			<th>Sub-total</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($booking as $bkn) :
			$subtotal = $bkn->jumlah_orang * $bkn->harga;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $bkn->id_booking ?></td>
		 	<td><?php echo $bkn->nama_wisata ?></td>
		 	<td><?php echo $bkn->jumlah_orang ?></td>
		 	<td align="right">Rp. <?php echo number_format($bkn->harga,0,',','.') ?></td>
		 	<td align="right">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="left">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>
	
	<div align="right">
		<a href="<?php echo base_url('admin/invoice/index') ?>" ><div class="btn btn-sm btn-primary">Kembali</div></a>
	</div>
</div>