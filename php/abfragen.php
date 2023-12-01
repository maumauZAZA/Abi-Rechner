<?php
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "uroot";
$password = "";
$dbname = "abirechner";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Formulardaten verarbeiten
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $e = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    // Hier könnten Sie die Daten in die Datenbank einfügen oder andere Aktionen durchführen.
    // Zum Beispiel: $sql = "INSERT INTO deine_tabelle (benutzername, passwort) VALUES ('$benutzername', '$passwort')";
    // $conn->query($sql);

    // Nach erfolgreicher Verarbeitung Weiterleitung oder Erfolgsmeldung
    echo "Die daten wurden erfolgreich eingeschickt!";
}

// Datenbankverbindung schließen
$conn->close();
?>
