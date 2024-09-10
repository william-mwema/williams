<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "biggy";
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];


    $sql = "INSERT INTO biggy (FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER, MESSAGE)
            VALUES ('$fname', '$lname', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Information Received.  You are much welcome!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>