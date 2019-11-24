<div class="container-fluid">
	<h4>Invoice Pembookingan Tempat Wisata</h4>

	<table class="table table-bordered table-hover tabel-striped">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pembooking</th>
			<th>Tanggal Pembookingan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id_invoice ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->tgl_booking ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td> <?php echo anchor('admin/invoice/detail/'.$inv ->id_invoice,'<div class="btn btn-sm btn-success">Detail</div>') ?></td>
		</tr>

	<?php endforeach; ?>
	</table>
</div>