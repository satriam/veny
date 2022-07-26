<?php

include "../koneksi.php";

//error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
$id_kry = $_GET['id'];

echo "$id_kry";

$querykry = mysqli_query($konek, "SELECT * FROM karyawan WHERE id_karyawan ='$id_kry'");
if($querykry == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($karyawan = mysqli_fetch_array($querykry)){

?>
	
<!-- Modal Popup Dosen -->
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" tabindex="-1" role="dialog">
	<div class="wrapper wrapper--w680">
		<div class="card card-4">
            <div class="card-body">
				<h2 class="title" style="text-align: center;">Edit Data Karyawan</h2>
				<form action="karyawan_edit.php" method="POST">
					<div class="input-group">
						<label>ID Karyawan</label>
						<input name="id_karyawan" type="text" class="form-control" placeholder="ID Karayawan" value="<?php echo $karyawan["id_karyawan"]; ?>"/>
					</div>
					<div class="form-group">
					<label>Nama Karyawan</label>
							<input name="nama_karyawan" type="text" class="form-control" value="<?php echo $karyawan["nama_karyawan"]; ?>"  placeholder="Nama Karyawan"/>
					</div>
					<div class="input-group">
						<label>Jenis Kelamin</label>
						<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user-o"></i>
									</div>
									<select name="jenis_kelamin" class="form-control">
										<option value="<?php echo $karyawan["jenis_kelamin"]; ?>" selected>
										<?php
											if ($karyawan["jenis_kelamin"]=="pria"){
												echo "Laki - laki";
											}
											else{
												echo "Perempuan";
											}
										?>
										</option>
										<?php
											if ($karyawan["jenis_kelamin"]=="pria"){
												echo "<option value='wanita'>Perempuan</option>";
											}
											else{
												echo "<option value='priL'>Laki - laki</option>";
											}
										?>
									</select>
						</div>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
							<input class="input--style-4" type="date" name="tgl_lahir" value="<?php echo $karyawan["tgl_lahir"]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
								<input name="alamat_karyawan" type="text" class="form-control" placeholder="Alamat" value="<?php echo $karyawan["alamat_karyawan"]; ?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>NO HP</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
								<input name="no_karyawan" type="text" class="form-control" placeholder="Nomor Handphone" value="<?php echo $karyawan["no_karyawan"]; ?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>Username</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
								<input name="username" type="text" class="form-control" placeholder="Username"value="<?php echo $karyawan["username"]; ?>"/>
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