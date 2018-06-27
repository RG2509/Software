<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$model_no = $_POST["model_no"];
		echo $model_no .'<br>';
		$sql = "INSERT INTO form_14 (model_no)
		VALUES ($model_no)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>