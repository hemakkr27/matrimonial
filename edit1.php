<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

$zz = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$mname = $_POST['Middlename'];
			$address = $_POST['Address'];
			$contct = $_POST['Contact'];
			$comment = $_POST['comment'];
	

			
 include("includes/dbconn.php");
		
		//update the data
	$query = 'UPDATE customer set firstname ="'.$fname.'",
					lastname ="'.$lname.'", email="'.$mname.'",
					age="'.$address.'",height='.$contct.', 
					 sex ="'.$comment.'" WHERE
					cust_id ="'.$zz.'"';
					
					
					
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>