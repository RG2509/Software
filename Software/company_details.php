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
		echo ' '. $account_number .'<br>';
		$sql = "INSERT INTO customer_company_details (company_name, company_address, company_contact_no, company_email, company_bank_name, company_branch_name, company_account_no, company_IFCS_no,  company_pan_no, company_gst_no)
		VALUES ('$company_name','$address',$contact_no,'$email','$bank_name','$branch_name','$account_number','$ifcscode','$pan_number','$gst_number')";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>