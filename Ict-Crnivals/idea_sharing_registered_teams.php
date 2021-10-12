
<?php
 session_start();
 $leader_email = '';
 if(!empty($_SESSION['leader_email'])){
	 $leader_email = $_SESSION['leader_email'];
}

 require_once("includes/datbs.php");


	 function view_idea_sharing_contestant(){
 	include("includes/datbs.php");
 		$leader_email = $_SESSION['leader_email'] ?? '';
		$fetch_contestant=$con->prepare("select * from idea_sharing  ");
		$fetch_contestant->setFetchMode(PDO:: FETCH_ASSOC);
		$fetch_contestant->execute();
		
		

		while($row=$fetch_contestant->fetch()):
		echo"<tr> 
				

				<td style='min-wdith:350px;'>
				<img src='imgs/idea_contestant_img/".$row['team_picture']."' 
				/>  </td>
				

				<td style='min-wdith:350px;'>
				<img src='imgs/idea_uni_com_id_img/".$row['university_combined_id_picture']."' /> </td>

				
				<td>".$row['team_id']."</td>
				<td>".$row['team_name']."</td>
				<td>".$row['leader_name']."</td>
				<td>".$row['member_1_name']."</td>
				<td>".$row['member_2_name']."</td>
				<td>".$row['leader_email']."</td>
				<td>".$row['leader_mobile']."</td>
				<td>".$row['institute_name']."</td>
				<td>".$row['last_4_digits']."</td>
				<td>".$row['accept_reject']."</td>
				

			</tr>";
		endwhile;
}



?>




<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Contestant Profile</title>
   <link rel="stylesheet" href="assets/css/style1.css"/>
</head>
	<body>

<div id="">

	<div id="cus_div" >

				<div id="custext" >View Contestant Profile</div>

				<li style="display: block;"><a style=" text-shadow: 2px 2px #000000; color: #fff; background: #0D629D; border: 2px solid #B4BCC7; font-size: 17px; font-weight: bold; margin-left: 12px; padding: 5px; padding-left: 10px; padding-right: 10px; border-radius: 5px; cursor: pointer; text-decoration: none;" href="home.php">Back</a></li>
	</div>		
		
<div id="cus_view" >

	<form method="POST" enctype="multipart/form-data">
		

		<table  >
			<tr >

				<th>Team Image</th>
				<th>Uni ID Image</th>
				<th>Team ID</th>
				<th>Team Name</th>
				<th>Leader Name</th>
				<th>Member1 Name</th>
				<th>Member2 Name</th>
				<th>Leader Email</th>
				<th>Leader mobile</th>
				<th>Institute Name</th>
				<th>Digits</th>
				<th>Accept/Reject</th>
				
			</tr>

			<?php 

				 echo view_idea_sharing_contestant();
			 ?>

		</table>
				

	</form>

</div>
</div>


</body>


</html>
