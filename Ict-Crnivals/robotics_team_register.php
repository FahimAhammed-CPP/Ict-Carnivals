<?php 

	include 'includes/function.php'

?>








<?php   include 'includes/header.php' ?>

	<div class="container" >
		<div class="row bg-info" style="margin: 15px;" >
			<div class="col-sm-8">
				<p style="color: green;"></p>
				<form action="" method="post" enctype="multipart/form-data" >
					Team Name: <input type="text" name="team_name" class="form-control" required="">
					Leader Name: <input type="text" name="leader_name" class="form-control" required="">
					Member-2 Name: <input type="text" name="name2" class="form-control" required="">
					Member-3 Name: <input type="text" name="name3" class="form-control" required="">
					Leader email: <input type="email"  name="email" class="form-control" required="">
					Leader mobile: <input type="number"  name="mobile" class="form-control" required="">
					Institute Name: <input type="text" name="institute_name" class="form-control" required="">
					Team picture: <input type="file"  name="your_picture" class="form-control" required="">
					University combined id picture: <input type="file" name="id_picture" class="form-control" required="">
					<h3>Payment</h3>
		            <label for="fname">Accepted Bkash Only</label>
		            
		            <label for="cname">Here is the Bkash number</label>
		            <p style="color: white;">023489032850</p>
		            <label for="ccnum">Provide Last 4 digits after Bkash</label>
		            <input type="number" id="ccnum" name="last_4_digits" class="form-control" required="">
		             
					<input type="submit" name="btn" class="form-control btn btn-success">
					<p>Check conformation message in your mobile after a while.</p>
				</form>
			</div>
		</div>

		
	</div>

<?php   include 'includes/footer.php' ?>
<?php echo robotics_registration(); ?>