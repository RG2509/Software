<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$machine_number = $_POST["machine_number"];
		$machine_name = $_POST["machine_name"];
		$brand = $_POST["brand"];
		$ton = $_POST["ton"];
		$machine_type = $_POST["machine_type"];
		$machine_location = $_POST["machine_location"];
		$idu = $_POST["idu"];
		$odu = $_POST["odu"];
		$model_number = $_POST["model_number"];
		echo $ton .'<br>';
		$sql = "INSERT INTO machine_details (machine_number, machine_name, brand, ton, machine_type, machine_location, idu, odu, model_number)
		VALUES ($machine_number, '$machine_name','$brand', $ton,'$machine_type','$machine_location','$idu','$odu',$model_number)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>
