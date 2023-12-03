<html>
<head>
    <title>hinzufügen</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abirechner";
$table = "schueler";

    $ID = "0";
    if (isset($_POST["VName"])) {
        $VName = $_POST["VName"];
    }
    
   if (isset($_POST["NName"]))
    {
        $NName = $_POST["NName"];
    }
    

    if (isset($_POST["age"])) {
        $alter = $_POST["age"];
    }
    
    if (isset($_POST["Geschlecht"])) {
        $geschlecht = $_POST["Geschlecht"];
    }
    




    if (isset($_POST["SP_1"])) {
        $SP_1 = $_POST["SP_1"];
    }
    if (isset($_POST["SP_2"])) {
        $SP_2 = $_POST["SP_2"];
    }
    if (isset($_POST["SP_3"])) {
        $SP_3 = $_POST["SP_3"];
    }
    if (isset($_POST["SP_4"])) {
        $SP_4 = $_POST["SP_4"];
    }

    


    if (isset($_POST["P2_1"])) {
        $P2_1 = $_POST["P2_1"];
    }
    if (isset($_POST["P2_2"])) {
        $P2_2 = $_POST["P2_2"];
    }
    if (isset($_POST["P2_3"])) {
        $P2_3 = $_POST["P2_3"];
    }
    if (isset($_POST["P2_4"])) {
        $P2_4 = $_POST["P2_4"];
    }




    if (isset($_POST["P3_1"])) {
        $P3_1 = $_POST["P3_1"];
    }
    if (isset($_POST["P3_2"])) {
        $P3_2 = $_POST["P3_2"];
    }
    if (isset($_POST["P3_3"])) {
        $P3_3 = $_POST["P3_3"];
    }
    if (isset($_POST["P3_4"])) {
        $P3_4 = $_POST["P3_4"];
    }

   
    

    if (isset($_POST["P4_1"])) {
        $P4_1 = $_POST["P4_1"];
    }
    if (isset($_POST["P4_2"])) {
        $P4_2 = $_POST["P4_2"];
    }
    if (isset($_POST["P4_3"])) {
        $P4_3 = $_POST["P4_3"];
    }
    if (isset($_POST["P4_4"])) {
        $P4_4 = $_POST["P4_4"];
    }




    if (isset($_POST["P5_1"])) {
        $P5_1 = $_POST["P5_1"];
    }
    if (isset($_POST["P5_2"])) {
        $P5_2 = $_POST["P5_2"];
    }
    if (isset($_POST["P5_3"])) {
        $P5_3 = $_POST["P5_3"];
    }
    if (isset($_POST["P5_4"])) {
        $P5_4 = $_POST["P5_4"];
    }

    


    if (isset($_POST["SPORT_1"])) {
        $SPORT_1 = $_POST["SPORT_2"];
    }
    if (isset($_POST["SPORT_2"])) {
        $SPORT_2 = $_POST["SPORT_2"];
    }
    if (isset($_POST["SPORT_3"])) {
        $SPORT_3 = $_POST["SPORT_3"];
    }
    if (isset($_POST["SPORT_4"])) {
        $SPORT_4 = $_POST["SPORT_4"];
    }

    


    if (isset($_POST["NW_1"])) {
        $NW_1 = $_POST["NW_1"];
    }
    if (isset($_POST["NW_2"])) {
        $NW_2 = $_POST["NW_2"];
    }
    if (isset($_POST["NW_3"])) {
        $NW_3 = $_POST["NW_3"];
    }
    if (isset($_POST["NW_4"])) {
        $NW_4 = $_POST["NW_4"];
    }

    


    if (isset($_POST["PX_1"])) {
        $PX_1 = $_POST["PX_1"];
    }
    if (isset($_POST["PX_2"])) {
        $PX_2 = $_POST["PX_2"];
    }
    if (isset($_POST["PX_3"])) {
        $PX_3 = $_POST["PX_3"];
    }
    if (isset($_POST["PX_4"])) {
        $PX_4 = $_POST["PX_4"];
    }




    if (isset($_POST["WP_1"])) {
        $WP_1 = $_POST["WP_1"];
    }
    if (isset($_POST["WP_2"])) {
        $WP_2 = $_POST["WP_2"];
    }


$conn = mysqli_connect($servername, $username, $password)
    or die("Verbindung sagt NEIN!");
echo "<br>HAI :D";    


mysqli_select_db ($conn, $dbname);

    $sql = "INSERT INTO $table  VALUES ('$ID', '$VName', '$NName', '$alter', '$geschlecht', '$SP_1', '$SP_2', '$SP_3', '$SP_4', '$P2_1', '$P2_2', '$P2_3', '$P2_4', '$P3_1', '$P3_2', '$P3_3', '$P3_4',
    '$P4_1', '$P4_2', '$P4_3', '$P4_4', '$P5_1', '$P5_2', '$P5_3', '$P5_4', '$SPORT_1', '$SPORT_2', '$SPORT_3', '$SPORT_4', '$NW_1', '$NW_2', '$NW_3', '$NW_4',
    '$PX_1', '$PX_2', '$PX_3', '$PX_4', '$WP_1', '$WP_2'  )";
    
    
    mysqli_query($conn, $sql);
    
?>
</body>
</html>  