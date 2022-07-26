<thead>
<tr>
		<th>ID Karyawan</th>
		<th>Nama Karyawan</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Nomor HP</th>
		<th>Username</th>
		<th>Action</th>
	</tr>

	<?php
	include "../koneksi.php";

	$querykry = mysqli_query ($konek, "SELECT id_karyawan, nama_karyawan, jenis_kelamin, tgl_lahir, alamat_karyawan, no_karyawan, username FROM karyawan ");
	if($querykry == false){
		die ("Terjadi Kesalahan : ". mysqli_error($konek));
	}
	while ($karyawan = mysqli_fetch_array ($querykry)){
		?>
		<tr>
			<td><?php echo $karyawan['id_karyawan']; ?></td>
			<td><?php echo $karyawan['nama_karyawan']; ?></td>
			<td><?php echo $karyawan['jenis_kelamin']; ?></td>
			<td><?php echo $karyawan['tgl_lahir']; ?></td>
			<td><?php echo $karyawan['alamat_karyawan']; ?></td>
			<td><?php echo $karyawan['no_karyawan']; ?></td>
			<td><?php echo $karyawan['username']; ?></td>
			<td>
				<a href="karyawan_form_edit.php?id=<?php echo $karyawan['id_karyawan']; ?>">EDIT</a>
				<a href="karyawan_delete.php?id=<?php echo $karyawan['id_karyawan']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php 
		}
		?>
</thead>
					
