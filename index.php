<?php 
    $Err = "";
    $Notif = "";
	$logout = "";
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
            $Err = "Username/Password anda salah";
        }
        else if($_GET['pesan'] == "logout"){
            $logout = "Anda Telah Logout.";
        }
        else if($_GET['pesan'] == "btambahuser"){
            $Notif = "Berhasil registrasi user";
        }
        else if($_GET['pesan'] == "gtambahuser"){
            $Err = "gagal registrasi user";
		}
		else if($_GET['pesan'] == "password salah"){
            $Err = "Password anda salah";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--==============================================================================================-->	
	<link rel="icon" type="image/png" href="images/"/>
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="home/to_user.php" method="POST">
					<span class="login100-form-title p-b-26">
						Qita Laundry
					</span>
					<span class="login100-form-title p-b-48">
						<img src="images/">
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Masukan Username">
						<input class="input100" type="text" name="Username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="Login">
								Login
							</button>
                        </div>
					</div>
					<div class="text-center p-t-30">
					<p style="color:red;"><?php echo $Err ?></p>
					<p style="color:green;"><?php echo $Notif ?></p>
					<p style="color:blue;"><?php echo $logout ?></p>
					</div>
					<div class="text-center p-t-30">
						<span class="txt1">
							Belum punya akun?
						</span>

						<a class="txt2" href="registrasi.php">
							Buat akun
						</a>
					</div>
				</form>
			</div>
		</div>

<!--===============================================================================================-->
	<!-- <script src="js/password_kelihatan.js"></script>
	<script src="js/main.js"></script> -->
<!--===============================================================================================-->

</body>
</html>