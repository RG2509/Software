<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$ton = $_POST["contract_name"];
		$validity = $_POST['validity'];
		$service = $_POST['service'];
		echo $ton .'<br>';
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