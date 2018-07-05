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
// echo "Connected successfully";

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

// $sql = "CREATE TABLE contract_details (
//         contract_id BIGINT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//         contract_name VARCHAR(30)  NOT NULL,
//         contact_validity BIGINT(4) NOT NULL,
//         service BIGINT(10) UNSIGNED
//         )";

    // $sql = "CREATE TABLE customer_company_details (
    //         company_id BIGINT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //         company_name VARCHAR(30)  NOT NULL,
    //         company_address VARCHAR(30)  NOT NULL,
    //         company_contact_no BIGINT(10) NOT NULL,
    //         company_email VARCHAR(50) NOT NULL,
    //         company_bank_name VARCHAR(30)  NOT NULL,
    //         company_branch_name VARCHAR(30)  NOT NULL,
    //         company_account_no VARCHAR(30)  NOT NULL,
    //         company_IFCS_no VARCHAR(30)  NOT NULL,
    //         company_pan_no VARCHAR(30)  NOT NULL,
    //         company_gst_no VARCHAR(30)  NOT NULL
    //         )";


// $sql = "CREATE TABLE machine_details (
//     machine_id BIGINT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     machine_number VARCHAR(30)  NOT NULL,
//     machine_name VARCHAR(30)  NOT NULL,
//     machine_brand VARCHAR(30)  NOT NULL,
//     machine_ton INT(3) UNSIGNED NOT NULL, 
//     machine_type VARCHAR(30)  NOT NULL,
//     machine_location VARCHAR(30)  NOT NULL,
//     machine_idu_no VARCHAR(30) NOT NULL,
//     machine_odu_no VARCHAR(30) NOT NULL,
//     machine_compressor_model_no VARCHAR(30) NOT NULL
//     )";

//     $sql = "CREATE TABLE employee_details (
//         employee_id BIGINT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//         employee_name VARCHAR(30)  NOT NULL,
//         employee_joining_date DATE NOT NULL,
//         employee_image VARCHAR(30) NOT NULL,
//         employee_birth_date DATE NOT NULL,
//         employee_address VARCHAR(30)  NOT NULL,
//         employee_proof1 VARCHAR(30)  NOT NULL,
//         employee_proof2 VARCHAR(30)  NOT NULL,
//         employee_contact_number1 BIGINT(10) UNSIGNED NOT NULL,
//         employee_contact_number2 BIGINT(10) UNSIGNED NOT NULL,
//         employee_contact_number3 BIGINT(10) UNSIGNED NOT NULL
//         )";

    
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Table MyGuests created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
// } 


?>