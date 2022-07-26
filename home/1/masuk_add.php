<?php

include "../koneksi.php";

// $id_in	    = $_POST["id_penerimaan"];
$id_pel		= $_POST["id_pelanggan"];
$id_lyn		= $_POST["otherValue"];
$berat		= $_POST["berat"];
$harga	    = $_POST["harga"];
$tgl_masuk	= $_POST["tgl_masuk"];
$estimasi	= $_POST["estimasi"];
$tot_harga	= $_POST["tot_harga"];
$status		= $_POST["status"];
$keterangan	= $_POST["keterangan"];

if($add = mysqli_query($konek, "INSERT INTO penerimaan(id, id_pelanggan,id_layanan,berat, harga, tgl_masuk, estimasi, tot_harga, status, keterangan) VALUES ('','$id_pel','$id_lyn', '$berat', '$harga', '$tgl_masuk', '$estimasi', '$tot_harga', '$status','$keterangan' )")){
	header("Location: masuk.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>