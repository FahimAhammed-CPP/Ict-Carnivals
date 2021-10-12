









<?php
 session_start();
 $leader_email = '';
 if(!empty($_SESSION['leader_email'])){
	 $leader_email = $_SESSION['leader_email'];
}

 require_once("includes/datbs.php");


	 function view_event_details(){
 	include("includes/datbs.php");
 		$leader_email = $_SESSION['leader_email'] ?? '';
		$fetch_contestant=$con->prepare("select * from tbl_add_event  ");
		$fetch_contestant->setFetchMode(PDO:: FETCH_ASSOC);
		$fetch_contestant->execute();
		
		

		while($row=$fetch_contestant->fetch()):
		echo"<tr> 
				

				
				

				
				
				<td>".$row['id']."</td>
				<td>".$row['date']."</td>
				<td>".$row['time']."</td>
				<td>".$row['name']."</td>
				<td>".$row['vanue']."</td>
				
			</tr>";
		endwhile;
}



?>




<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Events Info</title>
   <link rel="stylesheet" href="assets/css/style1.css"/>
</head>
	<body>

<div id="">

	<div id="cus_div" >

				<div id="custext" >View Event Details</div>

				<li style="display: block;"><a style=" text-shadow: 2px 2px #000000; color: #fff; background: #0D629D; border: 2px solid #B4BCC7; font-size: 17px; font-weight: bold; margin-left: 12px; padding: 5px; padding-left: 10px; padding-right: 10px; border-radius: 5px; cursor: pointer; text-decoration: none;" href="home.php">Back</a></li>
	</div>		
		
<div id="cus_view" >

	<form method="POST" enctype="multipart/form-data">
		

		<table  >
			<tr >

				
				<th>Event ID</th>
				<th>Event Date</th>
				<th>Event Time</th>
				<th>Event Name</th>
				<th>Event Vanue</th>
				
				
			</tr>

			<?php 

				 echo view_event_details();
			 ?>

		</table>
				

	</form>

</div>
</div>


</body>


</html>
