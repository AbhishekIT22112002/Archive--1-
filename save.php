<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "contact_database") or die("connection failed");
$sql = "INSERT INTO contact_table(user_name,user_email,user_phoneno,user_message) VALUES ('{$name}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
mysqli_close($conn);
?>
