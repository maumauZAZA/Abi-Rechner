<?php
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abirechner";

$conn = mysqli_connect($servername, $username, $password)
    or die("Verbindung sagt NEIN!");
echo "<br>HAI :D";    
?>
