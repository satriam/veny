<?php

include "../koneksi.php";

// $id_kry	    = $_POST["id_karyawan"];
// $nama_kry	= $_POST["nama_karyawan"];
// $jns_kelamin= $_POST["jenis_kelamin"];
// $ttl	    = $_POST["tgl_lahir"];
// $alamat_kry	= $_POST["alamat_karyawan"];
// $no_hp		= $_POST["no_karyawan"];
// $user	    = $_POST["username"]; 
//======> jika pakai ii error terlihat akan tetapi kembali ke form

$id_kry	    = $_POST['id_karyawan'];
$nama_kry	= $_POST['nama_karyawan'];
$jns_kelamin= $_POST['jenis_kelamin'];
$ttl	    = $_POST['tgl_lahir'];
$alamat_kry	= $_POST['alamat_karyawan'];
$no_hp		= $_POST['no_karyawan'];
$user	    = $_POST['username'];

if($edit = mysqli_query($konek, "UPDATE karyawan SET nama_karyawan='$nama_kry', tgl_lahir='$ttl', jenis_kelamin='$jns_kelamin', 
	no_karyawan='$no_hp', alamat_karyawan='$alamat_kry', username='$user' WHERE id_karyawan='$id_kry'")){
		header("Location: karyawan.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>