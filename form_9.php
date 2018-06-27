<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$compressor_number = $_POST["compressor_number"];
		echo $compressor_number .'<br>';
		$sql = "INSERT INTO form_9 (compressor_number)
		VALUES ($compressor_number)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>