<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$gst = $_POST["gst"];
		echo $gst .'<br>';
		$sql = "INSERT INTO form_11 (gst)
		VALUES ($gst)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>