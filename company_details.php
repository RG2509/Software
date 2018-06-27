<?php
	require_once('connection.php');	
	if(isset($_POST['submit'])){
		$company_name = $_POST["company_name"];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$email = $_POST['email'];
		$bank_name = $_POST['bank_name'];
		$branch_name = $_POST['branch_name'];
		$account_number = $_POST['account_number'];
		$ifcscode = $_POST['ifcscode'];
		$pan_number = $_POST['pan_number'];
		$gst_number = $_POST['gst_number']; 
		echo $company_name .'<br>';
		$sql = "INSERT INTO company_details (company_name, address, contact_no, email, bank_name, branch_name, account_number, ifcscode,  pan_number, gst_number)
		VALUES ('$company_name','$address',$contact_no,'$email','$bank_name','$branch_name',$account_number,$ifcscode,$pan_number,$gst_number)";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>