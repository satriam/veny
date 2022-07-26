<?php

include "../koneksi.php";

$id_trm = $_GET['id'];

if($delete = mysqli_query($konek, "DELETE FROM penerimaan WHERE id='$id_trm'")){
	header("location:karyawan.php");
}

die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>
