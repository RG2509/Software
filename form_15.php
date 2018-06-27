<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$ac_brand = $_POST["ac_brand"];
		echo $ac_brand .'<br>';
		$sql = "INSERT INTO form_15 ('ac_brand')
		VALUES ($ac_brand)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>