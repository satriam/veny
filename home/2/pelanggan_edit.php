<?php

include "../koneksi.php";

$id_plg	    = $_POST["id_pelanggan"];
$nama_plg	= $_POST["nama_pelanggan"];
$alamat_plg	= $_POST["alamat_pelanggan"];
$no_plg		= $_POST["no_pelanggan"];

if($edit = mysqli_query($konek, "UPDATE pelanggan SET nama_pelanggan='$nama_plg',no_pelanggan='$no_plg', alamat_pelanggan='$alamat_plg' WHERE id_pelanggan='$id_plg'")){
		header("Location: pelanggan.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>