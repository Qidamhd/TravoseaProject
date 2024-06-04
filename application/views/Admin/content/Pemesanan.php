<main id="main" class="main">
	<h1>
		Pemesanan
	</h1>

	<table class="table table-borderless datatable">
		<thead>
			<tr>
				<th scope="col">Action</th>
				<th scope="col">Nama</th>
				<th scope="col">No telpon</th>
				<th scope="col">alamat</th>
				<th scope="col">tujuan wisata</th>
				<th scope="col">jenis paket</th>
				<th scope="col">jumlah_tiket</th>
				<th scope="col">kd_pesanan</th>
				<th scope="col">tgl_pemesanan</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_pembelian as $row) : ?>
				<tr>
					<td>
						<button action="delete" type="button" class="btn btn-outline-danger btn-sm">Delete</button>
						<button action="update" type="button" class="btn btn-outline-info btn-sm">update</button>
					</td>
					<td>
						<?= $row->nama; ?>
					</td>
					<td>
						<?= $row->no_telp; ?>
					</td>
					<td>
						<?= $row->alamat; ?>
					</td>
					<td>
						<?= $row->tj_wisata; ?>
					</td>
					<td>
						<?= $row->jenis_paket; ?>
					</td>
					<td>
						<?= $row->jumlah_tiket; ?>
					</td>
					<td>
						<?= $row->kd_pesanan; ?>
					</td>
					<td>
						<?= $row->tgl_pemesenan; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>