
<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$employee_name = $_POST["employee_name"];
		$joining_date = $_POST['joining_date'];
		$img = $_POST['img'];
		$birth_date = $_POST['birth_date'];
		$address = $_POST['address'];
		$proof1 = $_POST['proof1'];
		$proof2 = $_POST['proof2'];
		$contact_number1 = $_POST['contact_number1'];
		$contact_number2 = $_POST['contact_number2'];
		$contact_number3 = $_POST['contact_number3'];
		echo $employee_name .'<br>';
		$sql = "INSERT INTO employee_details (employee_name, joining_date, img, birth_date, address, proof1, proof2, contact_number1,  contact_number2, contact_number3)
		VALUES ($employee_name,'$joining_date','$img',$birth_date,$address,$proof1,'proof2','$contact_number1','$contact_number2','$contact_number3')";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>