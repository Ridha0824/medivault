<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    echo "Login successful. Welcome " . $user['fullname'];
} else {
    echo "Invalid email or password";
}
?>
