<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables from form submission
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
//  $password = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// $confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$country = $_POST['country'];

// Example of inserting data into a table (assuming you have a 'users' table)
$sql = "INSERT INTO registration (firstname, lastname, email, password, gender, country)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>