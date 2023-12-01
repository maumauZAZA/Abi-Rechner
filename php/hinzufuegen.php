<?php

$servername = "Dein_DB_Servername";
$username = "Dein_DB_Benutzername";
$password = "Dein_DB_Passwort";
$dbname = "Dein_DB_Name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $VName = $_POST["Vorname"];
    $NName = $_POST["Nachname"];
    $alter = $_POST["Alter"];
    $geschlecht = $_POST["Geschlecht"];

    $SP_1 = $_POST["SP_1"];
    $SP_2 = $_POST["SP_2"];
    $SP_3 = $_POST["SP_3"];
    $SP_4 = $_POST["SP_4"];

    $P2_1 = $_POST["P2_1"];
    $P2_2 = $_POST["P2_2"];
    $P2_3 = $_POST["P2_3"];
    $P2_4 = $_POST["P2_4"];

    $P3_1 = $_POST["P3_1"];
    $P3_2 = $_POST["P3_2"];
    $P3_3 = $_POST["P3_3"];
    $P3_4 = $_POST["P3_4"];

    $P4_1 = $_POST["P4_1"];
    $P4_2 = $_POST["P4_2"];
    $P4_3 = $_POST["P4_3"];
    $P4_4 = $_POST["P4_4"];

    $P5_1 = $_POST["P5_1"];
    $P5_2 = $_POST["P5_2"];
    $P5_3 = $_POST["P5_3"];
    $P5_4 = $_POST["P5_4"];

    $SPORT_1 = $_POST["SPORT_1"];
    $SPORT_2 = $_POST["SPORT_2"];
    $SPORT_3 = $_POST["SPORT_3"];
    $SPORT_4 = $_POST["SPORT_4"];

    //EY NIKO ich hab keine ahnung ob das richtig ist, sonst guck das lieber nochmal nach
    //Am besten auch beim .sql dokument

    echo "Formular erfolgreich verarbeitet!";
}

$conn->close();
?>
