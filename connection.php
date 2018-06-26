<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "software";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// $sql = "CREATE TABLE customer_details (
//     code BIGINT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     customer_name VARCHAR(30)  NOT NULL,
//     contact_person VARCHAR(30) NOT NULL,
//     landline BIGINT(10) UNSIGNED,
//     mobile_number1 BIGINT(10) UNSIGNED NOT NULL,
//     mobile_number2 BIGINT(10) UNSIGNED NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     address1 VARCHAR(30)  NOT NULL,
//     address2 VARCHAR(30),
//     address3 VARCHAR(30),
//     area VARCHAR(30)  NOT NULL,
//     city VARCHAR(30)  NOT NULL,
//     pincode BIGINT(6)  NOT NULL,
//     quantity BIGINT(4)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Table MyGuests created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
// } 


?>