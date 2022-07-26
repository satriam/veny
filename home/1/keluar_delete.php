<?php

include "../koneksi.php";

$id_kembali = $_GET['id'];

if($delete = mysqli_query($konek, "DELETE FROM pengembalian WHERE id_pengembalian='$id_kembali'")){
	header("location:keluar.php");
}

die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>
