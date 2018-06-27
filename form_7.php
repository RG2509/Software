<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$idu = $_POST["idu"];
		echo $odu .'<br>';
		$sql = "INSERT INTO form_7 (idu)
		VALUES ($idu)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>