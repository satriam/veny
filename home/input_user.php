<?php
//Include file koneksi untuk akses ke database
include "koneksi.php";

//menerima nilai kembalian dari kiriman form pendaftaran di regristasi.php
$id_k=$_POST["id_karyawan"];
$inamakaryawan=$_POST["nama_karyawan"];
$ijeniskelamin=$_POST["jenis_kelamin"];
$tgl_lahir=$_POST["tgl_lahir"];
$alamat=$_POST["alamat_karyawan"];
$inokry=$_POST["no_karyawan"];
$iuserk=$_POST["username"];
$ipass=$_POST["password"];
$id_group="2";

//Query input menginput data kedalam tabel produk
  $sql="insert into karyawan (id_karyawan,nama_karyawan,jenis_kelamin,tgl_lahir,alamat_karyawan,no_karyawan,username,password) values
		('$id_k','$inamakaryawan','$ijeniskelamin','$tgl_lahir','$alamat','$inokry','$iuserk','$ipass')";
  $uye="insert into user (Username,Password,nama_user,jns_kelamin,no_tlp,id_group) values
  		('$iuserk','$ipass','$inamakaryawan','$ijeniskelamin','$inokry','$id_group')";
//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($konek,$sql);
  $yoman=mysqli_query($konek,$uye);

//Kondisi apakah berhasil atau tidak
  if ($yoman) {
	//echo "Berhasil tambah user";
	header('Location: ../formLogin.php?pesan=btambahuser');
	exit;
  }
else {
    //echo "gagal tambah user";
	header('Location: ../formLogin.php?pesan=gtambahuser');
	exit;
}  

?>