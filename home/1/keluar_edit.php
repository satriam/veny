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

if($ubah = mysqli_query($konek, "UPDATE pengembalian SET id_pengembalian = $id_out,id_penerimaan = $id_in,id_karyawan = $id_kry, tgl_keluar = $tgl_out, tot_harga  = $tot_harga,diskon = $diskon,tot_bayar  = $tot_bayar, status = $status, id_layanan = $id_lyn)")){
	header("Location: keluar.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>