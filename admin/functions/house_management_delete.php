<?php
	include '../../connection.php';
	$house_id = $_REQUEST['id'];
		$query = "DELETE FROM houses WHERE house_id = '$house_id'";
	$result = $connection->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Property Successfully deleted\");
					window.location = (\"../house_management.php\")
				</script>";
	}
?>
