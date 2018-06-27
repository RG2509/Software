<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$odu = $_POST["odu"];
		echo $odu .'<br>';
		$sql = "INSERT INTO form_8 (odu)
		VALUES ($odu)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>