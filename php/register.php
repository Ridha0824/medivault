<?php
include "db.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (fullname, email, phone, password)
          VALUES ('$fullname', '$email', '$phone', '$password')";

if (mysqli_query($conn, $query)) {
    echo "Registration successful. <a href='../login.html'>Login</a>";
} else {
    echo "Email already exists";
}
?>
