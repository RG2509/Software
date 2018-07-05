<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$code = $_POST["code"];
		$customer_name = $_POST['customer_name'];
		$contact_person = $_POST['contact_person'];
		$landline = $_POST['landline'];
		$mobile_number1 = $_POST['mobile_number1'];
		$mobile_number2 = $_POST['mobile_number2'];
		$email = $_POST['email'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$address3 = $_POST['address3'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$quantity = $_POST['quantity']; 
		echo $customer_name .'<br>';
		$sql = "INSERT INTO customer_details (code, customer_name, contact_person, landline, mobile_number1, mobile_number2, email, address1,  address2, address3, area, city, pincode, quantity)
		VALUES ($code,'$customer_name','$contact_person',$landline,$mobile_number1,$mobile_number2,'$email','$address1','$address2','$address3','$area','$city',$pincode,$quantity)";

		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>