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

if($ubah = mysqli_query($konek, "UPDATE penerimaan SET id_penerimaan = $id_in, berat = $berat, harga = $harga , tgl_masuk = $tgl_masuk, estimasi = $estimasi, tot_harga  = $tot_harga, status = $status, keterangan = $keterangan,  id_layanan = $id_lyn)")){
	header("Location: masuk.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
