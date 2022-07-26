<?php

include "../koneksi.php";

$id_kry	    = $_POST["id_karyawan"];
$nama_kry	= $_POST["nama_karyawan"];
$jns_kelamin= $_POST["jenis_kelamin"];
$ttl	    = $_POST["tgl_lahir"];
$alamat_kry	= $_POST["alamat_karyawan"];
$no_hp		= $_POST["no_karyawan"];
$user	    = $_POST["username"];
$pass		= $_POST["password"];

if($add = mysqli_query($konek, "INSERT INTO karyawan(id_karyawan,nama_karyawan,jenis_kelamin,tgl_lahir,alamat_karyawan,no_karyawan,username,password) VALUES ('$id_kry', '$nama_kry', '$jns_kelamin', '$ttl', '$alamat_kry', '$no_hp', '$user', '$pass')")){
	header("Location: karyawan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>