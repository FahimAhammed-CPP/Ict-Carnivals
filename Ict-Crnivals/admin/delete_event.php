<?php
	include("includes/function.php");
	if(isset($_GET['delete_event'])){
	echo delete_event();
}
	if(isset($_GET['delete_sub'])){
	echo delete_sub();

}

	if(isset($_GET['delete_pro'])){
	echo delete_product();

}

 ?>