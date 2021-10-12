<?php

	require_once 'app/classes/login_register_controller.php';

	$x=new login_registration();
	$msg='';
	if(isset($_POST['btn'])){
		$msg=$x->register($_POST);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register by Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
		body{
			background-color: darkcyan;
		}
	</style>
</head>
<body>
	<section class="form my-4 mx-5">
		<div class="container">
			<div class="row col-lg-6">
				<div class="col-lg-12 px-5 pt-5">
					<h3>Create your account</h3>
					<p style="color: green;"><?php 
						if($msg){
							echo $msg;
						}
					 ?></p>
					<form action="" method="post">
						<div class="form-row">
							<div class="col-lg-7">
								Name: <input type="text" name="name" placeholder="enter your full name" class="form-control" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								Username: <input type="text" name="username" placeholder="enter your username" class="form-control" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								Email: <input type="email" name="email" placeholder="enter your email" class="form-control" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								Password: <input type="password" name="password" placeholder="enter your password" class="form-control" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								Mobile: <input type="number" name="mobile" placeholder="enter your mobile number" class="form-control" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								<input type="submit" name="btn" value="Register" class="form-control btn btn-success my-3">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								<a href="index.php">Back to login</a>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</section>


</body>
</html>