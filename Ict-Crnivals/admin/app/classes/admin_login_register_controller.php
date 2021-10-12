<?php 
	class admin_login_registration{
		
		public function register($data){
			// echo "<pre>";
			// print_r($data);
			// exit();
			$db=mysqli_connect('localhost','root','','ict_carnivals');

			$name=$data['name'];
			$username=$data['username'];
			$email=$data['email'];
			$password=$data['password'];
			$mobile=$data['mobile'];

			$sql="INSERT INTO tbl_admin_login(name,username,email,password,mobile) VALUES ('$name','$username','$email','$password','$mobile')";

			if(mysqli_query($db,$sql)){
				$res="Registration successful";
				return $res;
			}
			else{
				$res="Registration failed, please try again";
				return $res;
			}
		}


		public function login($data){
			$db=mysqli_connect('localhost','root','','ict_carnivals');
			$email=$data['email'];
			$password=$data['password'];

			$sql="SELECT * FROM tbl_admin_login WHERE email='$email' AND password='$password'";

			if(mysqli_query($db,$sql)){
				$res=mysqli_fetch_assoc(mysqli_query($db,$sql));

				if($res){
					$id=$res['registration_id'];
					session_start();
					$_SESSION['user_id']=$id;
					header("location: admin_home.php");
				}
			}
			else{
				$res="Login failed, please try again";
				return $res;
			}


		}









		
	}


?>


