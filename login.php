<?php
require 'function.php';

// cek login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
// cocokin dengan db, mencari datanya ada atau ga
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
//hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
		$data = mysqli_fetch_array($cekdatabase);

        $_SESSION['user_id'] = $data['iduser'];
        header('location:index.php');
    } else{
        header('location:login.php');
    }
};

if(!isset($_SESSION['log'])){

} else{
    header('location:index.php');
}
?>

<!-- HTML start -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Assetv2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Assetv2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assetv2/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assetv2/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('Assetv2/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="login.php" method="post" class="login100-form validate-form" enctype="multipart/form-data">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Assetv2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/vendor/bootstrap/js/popper.js"></script>
	<script src="Assetv2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/vendor/daterangepicker/moment.min.js"></script>
	<script src="Assetv2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Assetv2/js/main.js"></script>

</body>
</html>
