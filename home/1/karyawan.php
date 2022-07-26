<?php

session_start();
include "../koneksi.php";
//include "cek_user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg" style="background-color: #008B8B; ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Qita Laundry
    </a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg" style="background-color: #008B8B;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelanggan.php">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a href="karyawan.php" class="nav-link">Karyawan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaksi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="masuk.php">Penerimaan</a></li>
            <li><a class="dropdown-item" href="keluar.php">Pengembalian</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Karyawan</span>
  </div>
</nav>
</br>
<a href="#"><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalAdd" ><i class="fa fa-plus"></i>Add</button></a>
<br></br>
<table id="data" class="table table-bordered table-striped table-scalable">
	<?php
	include "dt_karyawan.php"
	?>
</table> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data Karyawan</h4>
			</div>
			<div class="modal-body">
				<form action="karyawan_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
					
					<div class="form-group">
						<label>Nama Karyawan</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
							</div>
								<input name="nama_karyawan" type="text" class="form-control" placeholder="Nama Karyawan"/>
							</div>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="p-t-10">
                                <label class="radio-container m-r-45">Laki - Laki
                                    <input type="radio" checked="checked" name="jenis_kelamin" value="pria">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Perempuan
                                    <input type="radio" name="jenis_kelamin" value="wanita">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input class="input--style-4" type="date" name="tgl_lahir">
						</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input name="alamat_karyawan" type="text" class="form-control" placeholder="Alamat"/>
							</div>
						</div>
						<div class="form-group">
							<label>NO HP</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
									<input name="no_karyawan" type="text" class="form-control" placeholder="Nomor Handphone"/>
							</div>
						</div>
						<div class="form-group">
							<label>Username</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
									<input name="username" type="text" class="form-control" placeholder="Username"/>
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input name="password" type="text" class="form-control" placeholder="Password"/>
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
	<!-- Modal Popup Dosen Edit -->
	<div id="ModalEditMahasiswa" class="modal fade" tabindex="-1" role="dialog"></div>
	<!-- Modal Popup untuk delete--> 
	<div class="modal fade" id="modal_delete">
		<div class="modal-dialog">
			<div class="modal-content" style="margin-top:100px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
				</div>    
				<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
					<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
					<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<?php
		include "script.php";
	?>
	
</body>
</html>