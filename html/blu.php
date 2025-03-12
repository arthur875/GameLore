<?php
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form values in variables
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
}
?>