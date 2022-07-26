<?php

include "../koneksi.php";

$id_plg = $_GET['id'];

if($delete = mysqli_query($konek, "DELETE FROM pelanggan WHERE id_pelanggan='$id_plg'")){
	header("location:pelanggan.php");
}

die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>
