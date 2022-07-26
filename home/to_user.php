<?php
session_start();
include "koneksi.php";

if (isset($_POST['Login'])) {
$username = $_POST["Username"];
$password = $_POST["Password"];
//$Password = md5($_POST["password"]);
}

$query = mysqli_query ($konek, "SELECT * FROM user WHERE Username='$username' AND Password='$password'");
$cek = mysqli_num_rows($query);
// Validasi Login
if ($cek > 0){
	
	$queryuser = mysqli_query ($konek, "SELECT * FROM user WHERE Username='$username'");
		
	$user = mysqli_fetch_array ($queryuser);
	
	if($user){
				
				$_SESSION["Username"] 			= $user["Username"];
				$_SESSION["Password"] 			= $user["Password"];
				//$_SESSION["id_karyawan"] 			= $user["id_karyawan"];
				$_SESSION["id_group"] 			= $user["id_group"];
				//$_SESSION["id_user"] 			= $user["id_user"];
				// $_SESSION["Foto"]				= $user["Foto"];
				$_SESSION["Login"] 				= true;
				
				if ($_SESSION["id_group"] == 1){
					header ("Location: 1/index.php");
					exit();
				}
				else if($_SESSION["id_group"] == 2){
					header ("Location: 2/index.php");
					exit();
				}
				else{
					header("Location :pagenotfound.php");
					exit();
				}
			}
			else
			{
				header ("Location: ../formLogin.php?pesan=salahpass");
				exit();
			}
	}
	else{
		header ("Location: ../formLogin.php?pesan=gagal");
		exit();
	}

	
?>