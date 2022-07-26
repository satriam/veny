<?php

include "../koneksi.php";

$id_kry = $_GET['id'];

if($delete = mysqli_query($konek, "DELETE FROM karyawan WHERE id_karyawan='$id_kry'")){
	header("location:karyawan.php");
}

die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>
