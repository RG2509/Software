<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$item_name = $_POST["item_name"];
		echo $machine_type .'<br>';
		$sql = "INSERT INTO form_17 (item_name)
		VALUES ($item_name)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>