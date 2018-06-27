<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$machine_location = $_POST["machine_location"];
		echo $gst .'<br>';
		$sql = "INSERT INTO form_6 (machine_location)
		VALUES ($machine_location)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>