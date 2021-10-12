<?php 
	class admin_controller{
		
		public function add_event_details($data){
			// echo "<pre>";
			// print_r($data);
			// exit();
			$db=mysqli_connect('localhost','root','','ict_carnivals');

			$date=$data['date'];
			$time=$data['time'];
			$name=$data['name'];
			$vanue=$data['vanue'];

			$sql="INSERT INTO tbl_add_event(date,time,name,vanue) VALUES ('$date','$time','$name','$vanue')";

			if(mysqli_query($db,$sql)){
				$res="process successful";
				return $res;
			}
			else{
				$res="process failed, please try again";
				return $res;
			}
		}


	}


?>