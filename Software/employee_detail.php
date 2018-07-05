<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$employee_name = $_POST["employee_name"];
		$joining_date = $_POST['joining_date'];
		$birth_date = $_POST['birth_date'];
		$address = $_POST['address'];
		$contact_number1 = $_POST['contact_number1'];
		$contact_number2 = $_POST['contact_number2'];
		$contact_number3 = $_POST['contact_number3'];
		$img = $_FILES['img']['name'];
		$proof1 = $_FILES['proof1']['name'];
		$proof2 = $_FILES['proof2']['name'];
		$file_result='';
		$destination_dir="temp/";
		$destination_file_img= $destination_dir . basename($_FILES['img']['name']);
		$destination_file_proof1= $destination_dir . basename($_FILES['proof1']['name']);
		$destination_file_proof2= $destination_dir . basename($_FILES['proof2']['name']);

		if ($_FILES["img"]["size"]>1024000) {
			$file_result .= "No File uploaded or invalid file";
			$file_result .= "Error code" . $_FILES["img"]["name"] . "<br>";
		}else{
			$file_result .=
			"Upload:" . $_FILES["img"]["name"] . "<br>" .
			"Type:" . $_FILES["img"]["type"] . "<br>" .
			"Size" . ($_FILES["img"]["size"]/1024) . "kb<br>" .
			"Temp file:" . $_FILES["img"]["name"] . "<br>";
		}
		move_uploaded_file($_FILES["img"]["name"], $destination_file_img);
		$file_result = "File upload successfully";

		if ($_FILES["proof1"]["size"]>1024000) {
			$file_result .= "No File uploaded or invalid file";
			$file_result .= "Error code" . $_FILES["proof1"]["name"] . "<br>";
		}else{
			$file_result .=
			"Upload:" . $_FILES["proof1"]["name"] . "<br>" .
			"Type:" . $_FILES["proof1"]["type"] . "<br>" .
			"Size" . ($_FILES["proof1"]["size"]/1024) . "kb<br>" .
			"Temp file:" . $_FILES["proof1"]["name"] . "<br>";
		}
		move_uploaded_file($_FILES["proof1"]["name"], $destination_file_proof1);
		$file_result = "File upload successfully";

		if ($_FILES["proof2"]["size"]>1024000) {
			$file_result .= "No File uploaded or invalid file";
			$file_result .= "Error code" . $_FILES["proof2"]["name"] . "<br>";
		}else{
			$file_result .=
			"Upload:" . $_FILES["proof2"]["name"] . "<br>" .
			"Type:" . $_FILES["proof2"]["type"] . "<br>" .
			"Size" . ($_FILES["proof2"]["size"]/1024) . "kb<br>" .
			"Temp file:" . $_FILES["proof2"]["name"] . "<br>";
		}
		move_uploaded_file($_FILES["proof2"]["name"], $destination_file_proof1);
		$file_result = "File upload successfully";

		$sql = "INSERT INTO employee_details (employee_name, employee_joining_date, employee_image, employee_birth_date, employee_address, employee_proof1, employee_proof2, employee_contact_number1,  employee_contact_number2, employee_contact_number3)
		VALUES ('$employee_name','$joining_date','$img','$birth_date','$address','$proof1','$proof2','$contact_number1','$contact_number2','$contact_number3')";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>