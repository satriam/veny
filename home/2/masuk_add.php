<?php

include "../koneksi.php";

$id_in	    = $_POST["id_penerimaan"];
$id_lyn		= $_POST["id_layanan"];
$berat		= $_POST["berat"];
$harga	    = $_POST["harga"];
$tgl_masuk	= $_POST["tgl_masuk"];
$estimasi	= $_POST["estimasi"];
$tot_harga	= $_POST["tot_harga"];
$status		= $_POST["status"];
$keterangan	= $_POST["keterangan"];

if($add = mysqli_query($konek, "INSERT INTO penerimaan(id_penerimaan, id_layanan, berat, harga, tgl_masuk, estimasi, tot_harga, status, keterangan) VALUES ('$id_in', '$id_lyn', '$berat', '$harga', '$tgl_masuk', '$estimasi', '$tot_harga', '$status','$keterangan')")){
	header("Location: masuk.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>