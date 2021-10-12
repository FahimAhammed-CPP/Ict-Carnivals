<?php



function all_events(){
		include("includes/datbs.php");
		$all_event=$con->prepare("select * from main_event");
		$all_event->setFetchMode(PDO:: FETCH_ASSOC);
		$all_event->execute();
		while($row=$all_event->fetch()):
		echo"<li><a href='events.php?event_id=".$row['event_id']."'>".$row['event_name']."</a></li>";
		 endwhile;
	}


function view_all_events(){
		include("includes/datbs.php");
		if(isset($_GET['event_id'])){
			$main_cat=$con->prepare("select * from main_event ");
			$main_cat->setFetchMode(PDO:: FETCH_ASSOC);
			$main_cat->execute();
			echo "<h3>Contest</h3>";
			while($row=$main_cat->fetch()):
					echo"<li><a href='events.php?event_id=".$row['event_id']."'>".$row['event_name']."</a></li>";

				
			endwhile;
			
		}
	}




		 function programming_registration(){

			include("includes/datbs.php");
			 if (isset($_POST['btn'])){

			$team_name=$_POST['team_name'];
			$leader_name=$_POST['leader_name'];
			$name2=$_POST['name2'];
			$name3=$_POST['name3'];
			$email=$_POST['email'];

			$mobile=$_POST['mobile'];
			$institute_name=$_POST['institute_name'];
			
	    	
		    $your_picture=$_FILES['your_picture'] ['name'];
	        $your_picture_tmp=$_FILES['your_picture'] ['tmp_name'];

	        $id_picture=$_FILES['id_picture'] ['name'];
	        $id_picture_tmp=$_FILES['id_picture'] ['tmp_name'];

			$last_4_digits=$_POST['last_4_digits'];

if ($_FILES['your_picture']['tmp_name']==""){}else{
				$your_picture=$_FILES['your_picture']['name'];
				$your_picture_tmp=$_FILES['your_picture']['tmp_name'];

				move_uploaded_file($your_picture_tmp,"imgs/contestant_img/$your_picture");

}


if ($_FILES['id_picture']['tmp_name']==""){}else{
				$id_picture=$_FILES['id_picture']['name'];
				$id_picture_tmp=$_FILES['id_picture']['tmp_name'];

				move_uploaded_file($id_picture_tmp,"imgs/uni_com_id_img/$id_picture");

}



        


        
	       
			$add_information=$con->prepare("insert into tbl_team_registration
    		                      (team_name, leader_name, member_1_name, member_2_name	, leader_email, 
    		                      leader_mobile, institute_name, team_picture, university_combined_id_picture, 
    		                      last_4_digits)
    		                      values
    		                      ('$team_name','$leader_name','$name2','$name3',
    		                      '$email','$mobile','$institute_name',
    		                      '$your_picture','$id_picture','$last_4_digits')");


    		if($add_information->execute()) {
    		echo "<script>alert('Programming Contest Registration Successful. Now Wait For Confermation !!!');</script>";
    		
    	}
    	else{
    		echo "<script>alert('Registration Does Not  Successful !!!');</script>";
    	    }
		}

	}






	












		 function robotics_registration(){

			include("includes/datbs.php");
			 if (isset($_POST['btn'])){

			$team_name=$_POST['team_name'];
			$leader_name=$_POST['leader_name'];
			$name2=$_POST['name2'];
			$name3=$_POST['name3'];
			$email=$_POST['email'];

			$mobile=$_POST['mobile'];
			$institute_name=$_POST['institute_name'];
			
	    	
		    $your_picture=$_FILES['your_picture'] ['name'];
	        $your_picture_tmp=$_FILES['your_picture'] ['tmp_name'];

	        $id_picture=$_FILES['id_picture'] ['name'];
	        $id_picture_tmp=$_FILES['id_picture'] ['tmp_name'];

			$last_4_digits=$_POST['last_4_digits'];

if ($_FILES['your_picture']['tmp_name']==""){}else{
				$your_picture=$_FILES['your_picture']['name'];
				$your_picture_tmp=$_FILES['your_picture']['tmp_name'];

				move_uploaded_file($your_picture_tmp,"imgs/robotics_contestant_img/$your_picture");

}


if ($_FILES['id_picture']['tmp_name']==""){}else{
				$id_picture=$_FILES['id_picture']['name'];
				$id_picture_tmp=$_FILES['id_picture']['tmp_name'];

				move_uploaded_file($id_picture_tmp,"imgs/robo_uni_com_id_img/$id_picture");

}



        


        
	       
			$add_information=$con->prepare("insert into robotics
    		                      (team_name, leader_name, member_1_name, member_2_name	, leader_email, 
    		                      leader_mobile, institute_name, team_picture, university_combined_id_picture, 
    		                      last_4_digits)
    		                      values
    		                      ('$team_name','$leader_name','$name2','$name3',
    		                      '$email','$mobile','$institute_name',
    		                      '$your_picture','$id_picture','$last_4_digits')");


    		if($add_information->execute()) {
    		echo "<script>alert('Robotics Contest Registration Successful. Now Wait for Confermation !!!');</script>";
    		
    	}
    	else{
    		echo "<script>alert('Registration Does Not  Successful !!!');</script>";
    	    }
		}

	}







	







 function gaming_registration(){

			include("includes/datbs.php");
			 if (isset($_POST['btn'])){

			$team_name=$_POST['team_name'];
			$leader_name=$_POST['leader_name'];
			$name2=$_POST['name2'];
			$name3=$_POST['name3'];
			$email=$_POST['email'];

			$mobile=$_POST['mobile'];
			$institute_name=$_POST['institute_name'];
			
	    	
		    $your_picture=$_FILES['your_picture'] ['name'];
	        $your_picture_tmp=$_FILES['your_picture'] ['tmp_name'];

	        $id_picture=$_FILES['id_picture'] ['name'];
	        $id_picture_tmp=$_FILES['id_picture'] ['tmp_name'];

			$last_4_digits=$_POST['last_4_digits'];

if ($_FILES['your_picture']['tmp_name']==""){}else{
				$your_picture=$_FILES['your_picture']['name'];
				$your_picture_tmp=$_FILES['your_picture']['tmp_name'];

				move_uploaded_file($your_picture_tmp,"imgs/gaming_contestant_img/$your_picture");

}


if ($_FILES['id_picture']['tmp_name']==""){}else{
				$id_picture=$_FILES['id_picture']['name'];
				$id_picture_tmp=$_FILES['id_picture']['tmp_name'];

				move_uploaded_file($id_picture_tmp,"imgs/gaming_uni_com_id_img/$id_picture");

}



        


        
	       
			$add_information=$con->prepare("insert into gaming
    		                      (team_name, leader_name, member_1_name, member_2_name	, leader_email, 
    		                      leader_mobile, institute_name, team_picture, university_combined_id_picture, 
    		                      last_4_digits)
    		                      values
    		                      ('$team_name','$leader_name','$name2','$name3',
    		                      '$email','$mobile','$institute_name',
    		                      '$your_picture','$id_picture','$last_4_digits')");


    		if($add_information->execute()) {
    		echo "<script>alert('Gaming Contest Registration Successful. Now Wait for Confermation !!!');</script>";
    		
    	}
    	else{
    		echo "<script>alert('Registration Does Not  Successful !!!');</script>";
    	    }
		}

	}















		function project_show_registration(){

			include("includes/datbs.php");
			 if (isset($_POST['btn'])){

			$team_name=$_POST['team_name'];
			$leader_name=$_POST['leader_name'];
			$name2=$_POST['name2'];
			$name3=$_POST['name3'];
			$email=$_POST['email'];

			$mobile=$_POST['mobile'];
			$institute_name=$_POST['institute_name'];
			
	    	
		    $your_picture=$_FILES['your_picture'] ['name'];
	        $your_picture_tmp=$_FILES['your_picture'] ['tmp_name'];

	        $id_picture=$_FILES['id_picture'] ['name'];
	        $id_picture_tmp=$_FILES['id_picture'] ['tmp_name'];

			$last_4_digits=$_POST['last_4_digits'];

if ($_FILES['your_picture']['tmp_name']==""){}else{
				$your_picture=$_FILES['your_picture']['name'];
				$your_picture_tmp=$_FILES['your_picture']['tmp_name'];

				move_uploaded_file($your_picture_tmp,"imgs/project_contestant_img/$your_picture");

}


if ($_FILES['id_picture']['tmp_name']==""){}else{
				$id_picture=$_FILES['id_picture']['name'];
				$id_picture_tmp=$_FILES['id_picture']['tmp_name'];

				move_uploaded_file($id_picture_tmp,"imgs/project_uni_com_id_img/$id_picture");

}



        


        
	       
			$add_information=$con->prepare("insert into project_show
    		                      (team_name, leader_name, member_1_name, member_2_name	, leader_email, 
    		                      leader_mobile, institute_name, team_picture, university_combined_id_picture, 
    		                      last_4_digits)
    		                      values
    		                      ('$team_name','$leader_name','$name2','$name3',
    		                      '$email','$mobile','$institute_name',
    		                      '$your_picture','$id_picture','$last_4_digits')");


    		if($add_information->execute()) {
    		echo "<script>alert('Project Shocasing Contest Registration Successful.Now Wait for Confermation !!!');</script>";
    		
    	}
    	else{
    		echo "<script>alert('Registration Does Not  Successful !!!');</script>";
    	    }
		}

	}















		function idea_sharing_registration(){

			include("includes/datbs.php");
			 if (isset($_POST['btn'])){

			$team_name=$_POST['team_name'];
			$leader_name=$_POST['leader_name'];
			$name2=$_POST['name2'];
			$name3=$_POST['name3'];
			$email=$_POST['email'];

			$mobile=$_POST['mobile'];
			$institute_name=$_POST['institute_name'];
			
	    	
		    $your_picture=$_FILES['your_picture'] ['name'];
	        $your_picture_tmp=$_FILES['your_picture'] ['tmp_name'];

	        $id_picture=$_FILES['id_picture'] ['name'];
	        $id_picture_tmp=$_FILES['id_picture'] ['tmp_name'];

			$last_4_digits=$_POST['last_4_digits'];

if ($_FILES['your_picture']['tmp_name']==""){}else{
				$your_picture=$_FILES['your_picture']['name'];
				$your_picture_tmp=$_FILES['your_picture']['tmp_name'];

				move_uploaded_file($your_picture_tmp,"imgs/idea_contestant_img/$your_picture");

}


if ($_FILES['id_picture']['tmp_name']==""){}else{
				$id_picture=$_FILES['id_picture']['name'];
				$id_picture_tmp=$_FILES['id_picture']['tmp_name'];

				move_uploaded_file($id_picture_tmp,"imgs/idea_uni_com_id_img/$id_picture");

}



        


        
	       
			$add_information=$con->prepare("insert into idea_sharing
    		                      (team_name, leader_name, member_1_name, member_2_name	, leader_email, 
    		                      leader_mobile, institute_name, team_picture, university_combined_id_picture, 
    		                      last_4_digits)
    		                      values
    		                      ('$team_name','$leader_name','$name2','$name3',
    		                      '$email','$mobile','$institute_name',
    		                      '$your_picture','$id_picture','$last_4_digits')");


    		if($add_information->execute()) {
    		echo "<script>alert('Idea Sharing Contest Registration Successful.Now Wait For Confermation !!!');</script>";
    		
    	}
    	else{
    		echo "<script>alert('Registration Does Not  Successful !!!');</script>";
    	    }
		}

	}










?>