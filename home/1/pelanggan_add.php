<?php

include "../koneksi.php";

$id_plg	    = $_POST["id_pelanggan"];
$nama_plg	= $_POST["nama_pelanggan"];
$alamat_plg	= $_POST["alamat_pelanggan"];
$no_plg		= $_POST["no_pelanggan"];

if($add = mysqli_query($konek, "INSERT INTO pelanggan(id_pelanggan,nama_pelanggan,alamat_pelanggan,no_pelanggan) VALUES ('$id_plg', '$nama_plg','$alamat_plg', '$no_plg')")){
	header("Location: pelanggan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
