<?php

include "../koneksi.php";

$id_out	    = $_POST["id_pengembalian"];
$id_kry	    = $_POST["id_karyawan"];
$id_in	    = $_POST["id_penerimaan"];
$id_lyn		= $_POST["id_pelanggan"];
$tgl_out	= $_POST["tgl_keluar"];
$tot_harga	= $_POST["tot_harga"];
$diskon	    = $_POST["diskon"];
$tot_bayar	= $_POST["tot_bayar"];
$status		= $_POST["status"];

if($add = mysqli_query($konek, "INSERT INTO pengembalian(id_pengembalian, id_penerimaan, tgl_keluar, tot_harga, diskon, tot_bayar status, id_karyawan, id_pelanggan) VALUES ('$id_out','$id_in','$tgl_out','$tot_harga', '$diskon', '$tot_bayar', '$status','$keterangan', '$id_kty','$id_lyn')")){
	header("Location: keluar.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>