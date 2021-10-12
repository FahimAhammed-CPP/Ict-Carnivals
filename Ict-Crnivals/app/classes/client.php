<?php 
	class database_fetch{
		
		public function show_event_details(){
			$db=mysqli_connect('localhost','root','','ict_carnivals');

			$sql="SELECT * FROM tbl_add_event";

			if(mysqli_query($db,$sql)){
				$res=mysqli_fetch_assoc(mysqli_query($db,$sql));

				if($res){
					return $res;
				}
			}
			else{
				$res="Login failed, please try again";
				return $res;
			}


		}


	}


?>