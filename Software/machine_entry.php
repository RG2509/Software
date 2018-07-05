<!DOCTYPE html>
<html>
<<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AC machine entry</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
require_once('connection.php');	
$sql = "SELECT * FROM machine_details";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $ton=$row['machine_ton'];
	$machine_type=$row['machine_type'];
	$machine_location=$row['machine_location'];
    $idu=$row['machine_idu_no'];
    $odu=$row['machine_odu_no'];
	$model_number=$row['machine_compressor_model_no'];
	}
}

$sql =  "SELECT code FROM customer_details";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$code=$row['code'];
	}
}

$sql =  "SELECT contract_name FROM contract_details";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $contract_name=$row['contract_name'];
	}
}
?>

	<form action="machine_entry.php" method="post">
		Customer code:<input type="number" name="code" placeholder="code" value = "<?php echo $code; ?>" size="10">
		Card quantity:<input type="number" name="quantity" placeholder="quantity">
		Card number:<input type="number" name="card_number" placeholder="card number">
		Number of service:<input type="number" name="number_of_service" placeholder="number of services">
		AMC type:<input type="text" name="contract_name" placeholder="AMC type" value="<?php echo $contract_name; ?>" size="10"> 
		Capacity:<input type="number" name="ton" placeholder="Capacity" value="<?php echo $ton; ?>" size="10">
		Machine type:<input type="text" name="machine_type" placeholder="machine type" value="<?php echo $machine_type; ?>" "size=10">
		Location:<input type="text" name="machine_location" placeholder="machine location" value="<?php echo $machine_location; ?>" "size=10">
		IDU model number:<input type="text" name="idu" placeholder="idu model number" value="<?php echo $idu; ?>" "size=10">
		IDU serial number:<input type="text" name="idu_serial_number" placeholder="IDU serial number">
		ODU model number:<input type="text" name="odu" placeholder="odu model number" value="<?php echo $odu; ?>" "size=10">
		ODU serial number:<input type="text" name="odu_serial_number" placeholder="odu serial number">
		Compressor model number:<input type="text" name="model_number" placeholder="model number" value="<?php echo $model_number; ?>" "size=10">
		Compressor serial number:<input type="text" name="compressor_serial_number" placeholder="compressor serial number">
		Fan motor number:<input type="text" name="fan_motor_number" placeholder="fan motor number">
		AMC start date:<input type="date" name="amc_start_date" placeholder="AMC start date">
		AMC end date:<input type="date" name="amc_end_date" placeholder="AMC end date">
	</form>


</body>
</html>