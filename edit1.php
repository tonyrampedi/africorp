<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<?php
			$eid = $_POST['id'];
			$firstname = $_POST['firstname'];
		    $lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			$comment = $_POST['comment'];
			
include("include/config.php");
		
	 			$query = 'UPDATE employees set firstname ="'.$firstname.'",
					lastname ="'.$lastname.'", 
					email="'.$email.'",
					contact="'.$contact.'", 
					Comment="'.$comment.'" 
					WHERE id ="'.$eid.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>