<?php
	$code = $_POST['code'];
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
?>
<!DOCTYPE HTML>
<html>
<title>Customer details</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h1>Customer details</h1>
<form>
	Customer code: <input type="number" placeholder="Customer code" name="code">
	Customer name: <input type="text" placeholder="Customer name" name="customer_name">
  	Contact person: <input type="text" placeholder="Contact person" name="contact_person">
  	Landline number: <input type="number" placeholder="Landline" name="landline">
  	Mobile number 1: <input type="number" placeholder="mobile number1" name="mobile_number1">
  	Mobile number 2: <input type="number" placeholder="mobile number2" name="mobile_number2">
  	Email id: <input type="email" placeholder="abc@xyz.com" name="email">
  	Address 1: <input type="text" placeholder="address1" name="address1">
  	Address 2: <input type="text" placeholder="address2" name="address2">
  	Address 3: <input type="text" placeholder="address3" name="address3">
  	Area: <input type="text" placeholder="area" name="area">
  	City: <input type="text" placeholder="city" name="city">
  	Pincode: <input type="number" placeholder="pincode" name="pincode">
  	Quantity: <input type="number" placeholder="Quantity of machine" name="quantity">
  	<input type="submit" name="submit">
</form>