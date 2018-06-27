<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$machine_type = $_POST["machine_type"];
		echo $machine_type .'<br>';
		$sql = "INSERT INTO form_4 (ton)
		VALUES ($ton)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>