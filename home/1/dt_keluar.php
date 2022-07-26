<thead>
<tr>
		<th>ID Pengembalian</th>
		<th>ID Penerimaan</th>
		<th>ID Karyawan</th>
		<th>ID Pelanggan</th>
        <th>Tanggal Keluar</th>
		<th>Total Harga</th>
        <th>Diskon</th>
        <th>Total Bayar</th>
		<th>Status</th>
		<th>Action</th>
		
	</tr>

	<?php
	include "../koneksi.php";

	$querymsk = mysqli_query ($konek, "SELECT id, id_penerimaan, tgl_keluar, tot_harga, diskon, tot_bayar status, id_karyawan, id_pelanggan FROM pengembalian");
	if($querymsk == false){
		die ("Terjadi Kesalahan : ". mysqli_error($konek));
	}
	while ($in = mysqli_fetch_array ($querymsk)){
		?>
		<tr>
            <td><?php echo $in['id_pengembalian']; ?></td>
			<td><?php echo $in['id_penerimaan']; ?></td>
            <td><?php echo $in['id_karyawan']; ?></td>
			<td><?php echo $in['id_pelanggan']; ?></td>
            <td><?php echo $in['tgl_keluar']; ?></td>
            <td><?php echo $in['tot_harga']; ?></td>
            <td><?php echo $in['diskon']; ?></td>
            <td><?php echo $in['tot_bayar']; ?></td>
            <td><?php echo $in['status']; ?></td>
			<td>
				<a href="masuk_form_edit.php?id=<?php echo $in['id_penerimaan']; ?>">EDIT</a>
				<a href="masuk_delete.php?id=<?php echo $in['id_penerimaan']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php 
		}
		?>
</thead>
					

					
