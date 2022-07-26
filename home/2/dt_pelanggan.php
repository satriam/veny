<thead>
					<tr>
						<th>ID pelanggan</th>
						<th>Nama Pelanggan</th>
						<th>ALamat</th>
						<th>Nomor HP</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryplg = mysqli_query($konek, "SELECT id_pelanggan, nama_pelanggan, alamat_pelanggan, no_pelanggan FROM pelanggan");
						if($queryplg == false){
							die("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while ($plg = mysqli_fetch_array($queryplg)){
							?>
							<tr>
								<td><?php echo $plg['id_pelanggan']; ?></td>
								<td><?php echo $plg['nama_pelanggan']; ?></td>
								<td><?php echo $plg['alamat_pelanggan']; ?></td>
								<td><?php echo $plg['no_pelanggan']; ?></td>
								<td>
									<a href="pelanggan_form_edit.php?id=<?php echo $plg['id_pelanggan']; ?>">EDIT</a>
									<a href="pelanggan_delete.php?id=<?php echo $plg['id_pelanggan']; ?>">HAPUS</a>
								</td>
							</tr>
							<?php
							}
							?>

				</tbody>