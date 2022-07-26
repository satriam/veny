<thead>
<tr>
		<th>ID Penerimaan</th>
        <th>ID Pelanggan</th>
        <th>Pilihan Paket</th>
		<th>Berat (Kg)</th>
        <th>Harga</th>
		<th>Tanggal Masuk</th>
        <th>Estimasi Pengembalian</th>
		<th>Alamat Pelanggan </th>
        <th>Total Harga</th>
		<th>Status</th>
        <th>Keterangan</th>
		<th>Action</th>
		
	</tr>

	<?php
	include "../koneksi.php";

	$querymsk = mysqli_query ($konek, "SELECT  penerimaan.id,nama_pelanggan,nama_layanan ,berat, harga, tgl_masuk, estimasi, tot_harga, status, keterangan, alamat_pelanggan FROM penerimaan INNER JOIN pelanggan ON penerimaan.id_pelanggan= pelanggan.id INNER JOIN layanan on penerimaan.id_layanan = layanan.id ");
	if($querymsk == false){
		die ("Terjadi Kesalahan : ". mysqli_error($konek));
	}
	while ($in = mysqli_fetch_array ($querymsk)){
		?>
		<tr>
			<td><?php echo $in['id']; ?></td>
            <td><?php echo $in['nama_pelanggan']; ?></td>
            <td><?php echo $in['nama_layanan']; ?></td>
            <td><?php echo $in['berat']; ?></td>
            <td><?php echo $in['harga']; ?></td>
            <td><?php echo $in['tgl_masuk']; ?></td>
            <td><?php echo $in['estimasi']; ?></td>
            <td><?php echo $in['alamat_pelanggan']; ?></td>
            <td><?php echo $in['tot_harga']; ?></td>
            <td><?php echo $in['status']; ?></td>
            <td><?php echo $in['keterangan']; ?></td>
			<td>
				<a href="masuk_form_edit.php?id=<?php echo $in['id']; ?>" >EDIT</a>
				<a href="masuk_delete.php?id=<?php echo $in['id']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php 
		}
		?>
</thead>
					
