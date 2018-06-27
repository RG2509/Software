<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$contract_name = $_POST["contract_name"];
		$validity = $_POST['validity'];
		$service = $_POST['service'];
		echo $contract_name .'<br>';
		$sql = "INSERT INTO form_2 (contract_name, validity, service)
		VALUES ($contract_name,'$validity','$service')";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>