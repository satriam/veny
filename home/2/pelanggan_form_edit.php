<?php

include "../koneksi.php";

//error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
$id_plg = $_GET['id'];

echo "$id_plg";

$queryplg = mysqli_query($konek, "SELECT * FROM pelanggan WHERE id_pelanggan ='$id_plg'");
if($queryplg == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($pelanggan = mysqli_fetch_array($queryplg)){

?>
	
<!-- Modal Popup Dosen -->
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" tabindex="-1" role="dialog">
	<div class="wrapper wrapper--w680">
		<div class="card card-4">
            <div class="card-body">
				<h2 class="title" style="text-align: center;">Tambah Data Pelanggan</h2>
				<form action="pelanggan_edit.php" method="POST">
					<div class="input-group">
						<label>ID Pelanggan</label>
						<input name="id_pelanggan" type="text" class="form-control" placeholder="ID Pelanggan" value="<?php echo $pelanggan["id_pelanggan"]; ?>"/>
					</div>
					<div class="form-group">
					<label>Nama Pelanggan</label>
							<input name="nama_pelanggan" type="text" class="form-control" value="<?php echo $pelanggan["nama_pelanggan"]; ?>"  placeholder="Nama Pelanggan"/>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
								<input name="alamat_pelanggan" type="text" class="form-control" placeholder="Alamat" value="<?php echo $pelanggan["alamat_pelanggan"]; ?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>NO HP</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
								<input name="no_pelanggan" type="text" class="form-control" placeholder="Nomor Handphone" value="<?php echo $pelanggan["no_pelanggan"]; ?>"/>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" type="submit">
							Add
						</button>
						<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
							Cancel
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
			}

?>