<html>
<head>
    <title>hinzufügen</title>
    <link rel="icon" href="photos/abi_rechner_icon.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
    <p>Hier werden die Daten ausgewertet:</p>
</header>
<nav>
    <a href="../index.html">
        <i class="material-icons" style="font-size:36px;">house</i>
    </a>
</nav>
<main>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abirechner";
$table = "schueler";
$nullp = "0";
$unterkurs = "0";
$leistungsuk = "0";
$punkteanzahl = "0";




$Bestanden= "nein";

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



    
//maximal 7 unterkurse
//300 punkte
//keine null punkte

if ($SP_1 < 5) {
    echo "nicht bestanden";
    $nullp++;
} elseif ($SP_2 < 5){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SP_3 < 5){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SP_4 < 5){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P2_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P2_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P2_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P2_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P3_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P3_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P3_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P3_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P4_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P4_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P4_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P4_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P5_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P5_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P5_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($P5_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SPORT_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SPORT_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SPORT_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($SPORT_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($NW_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($NW_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($NW_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($NW_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($PX_1 == 0){           
    echo "nicht bestanden";
    $nullp++;
} elseif ($PX_2 == 0){
    echo"nicht bestanden";
    $nullp++;
} elseif ($PX_3 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($PX_4 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($WP_1 == 0){
    echo "nicht bestanden";
    $nullp++;
} elseif ($WP_2 == 0){
    echo "nicht bestanden";
    $nullp++;
} 



if($SP_1 <5){
    $leistungsuk++;
}
if($SP_2<5){
    $leistungsuk++;
}
if($SP_3<5){
    $leistungsuk++;
}
if($SP_4<5){
    $leistungsuk++;
}

if ($P2_1 < 5){
    $unterkurs++;
}

if($P2_2 < 5){
    $unterkurs++;
}

if($P2_3 < 5){
    $unterkurs++;
}         

if($P2_4 < 5){
    $unterkurs++;
}

if($P3_1<5){
    $unterkurs++;
}
if($P3_2 < 5){
    $unterkurs++;
}
if($P3_3<5){
    $unterkurs++;
}
if($P3_4<5){
    $unterkurs++;
}
if($P4_1<5){
    $unterkurs++;
}
if($P4_2<5){
    $unterkurs++;
}if($P4_3<5){
    $unterkurs++;
}
if($P4_4<5){
    $unterkurs++;
}
if($P5_1<5){
    $unterkurs++;
}
if ($P5_2<5){
    $unterkurs++;
}    
if ($P5_3<5){
    $unterkurs++;
}
if($P5_4<5){
    $unterkurs++;
}
if($SPORT_1<5){
    $unterkurs++;
}
if($SPORT_2<5){
    $unterkurs++;
}
if($SPORT_3<5){
    $unterkurs++;
}
if($SPORT_4<5){
    $unterkurs++;
}
if($NW_1<5){
    $unterkurs++;
}
if($NW_2<5){
    $unterkurs++;
}
if($NW_3<5){
    $unterkurs++;
}    
if($NW_4<5){
    $unterkurs++;
}
if($PX_1<5){
    $unterkurs++;
}
if($PX_2<5){
    $unterkurs++;
}
if($PX_3<5){
    $unterkurs++;
}
if($PX_4<5){
    $unterkurs++;
}
if($WP_1<5){
    $unterkurs++;
}
if($WP_2<5){
    $unterkurs++;
}

if($leistungsuk== 0 && $unterkurs== 0){
    $Bestanden="ja";
}elseif($leistungsuk== 0 && $unterkurs== 1){
    $Bestanden= "ja";
}elseif($leistungsuk== 0 && $unterkurs== 2){
    $Bestanden= "ja";
}elseif($leistungsuk== 0 && $unterkurs== 3){
    $Bestanden= "ja";
}elseif($leistungsuk== 0 && $unterkurs== 4){
    $Bestanden= "ja";
}elseif($leistungsuk== 0 && $unterkurs== 5){
    $Bestanden= "ja";
}elseif($leistungsuk== 0&& $unterkurs== 6){
    $Bestanden= "ja";
}elseif($leistungsuk== 0&& $unterkurs== 7){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 0){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 0){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 1){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 2){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 3){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 4){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 5){
    $Bestanden= "ja";
}elseif($leistungsuk== 1&& $unterkurs== 6){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 1){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 2){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 3){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 4){
    $Bestanden= "ja";
}elseif($leistungsuk== 2&& $unterkurs== 5){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 0){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 1){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 2){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 3){
    $Bestanden= "ja";
}elseif($leistungsuk== 3&& $unterkurs== 4){
    $Bestanden= "ja";
}

$punkteanzahl = $SP_1 + $SP_1 + $SP_2 + $SP_2 + $SP_3 + $SP_3 + $SP_4 + $SP_4 + 
                $P2_1 + $P2_1 + $P2_2 + $P2_2 + $P2_3 + $P2_3 + $P2_4 + $P2_4 +
                $P3_1 + $P3_2 + $P3_3 + $P3_4 +
                $P4_1 + $P4_2 + $P4_3 + $P4_4 +
                $P5_1 + $P5_2 + $P5_3 + $P5_4 +
                $SPORT_1 + $SPORT_2 + $SPORT_3 + $SPORT_4 +
                $NW_1 + $NW_2 + $NW_3 + $NW_4 +
                $PX_1 + $PX_2 + $PX_3 + $PX_4 +
                $WP_1 + $WP_2 ;

$noten = [$SP_1, $SP_2, $SP_3, $SP_4,
        $P2_1,  $P2_2,  $P2_3,  $P2_4,
        $P3_1,  $P3_2,  $P3_3,  $P3_4,
        $P4_1,  $P4_2,  $P4_3,  $P4_4, 
        $P5_1,  $P5_2,  $P5_3,  $P5_4, 
        $SPORT_1,  $SPORT_2,  $SPORT_3,  $SPORT_4, 
        $NW_1,  $NW_2,  $NW_3,  $NW_4, 
        $PX_1,  $PX_2,  $PX_3,  $PX_4, 
        $WP_1,  $WP_2 ];


if($nullp >0){
    $Bestanden = "nein";
}


if ($punkteanzahl <= 200){
    echo ("<br>punktezahl ist $punkteanzahl");
    $Bestanden="nein";
}  else {
    echo ("Bestanden");
}





$durchschnitt = array_sum($noten) / count($noten);















$conn = mysqli_connect($servername, $username, $password)
    or die("Verbindung sagt NEIN!");
echo "<br>Danke für Infos";    

mysqli_select_db ($conn, $dbname);

    $sql = "INSERT INTO $table  VALUES ('$ID', '$VName', '$NName', '$alter', '$geschlecht', '$SP_1', '$SP_2', '$SP_3', '$SP_4', '$P2_1', '$P2_2', '$P2_3', '$P2_4', '$P3_1', '$P3_2', '$P3_3', '$P3_4',
    '$P4_1', '$P4_2', '$P4_3', '$P4_4', '$P5_1', '$P5_2', '$P5_3', '$P5_4', '$SPORT_1', '$SPORT_2', '$SPORT_3', '$SPORT_4', '$NW_1', '$NW_2', '$NW_3', '$NW_4',
    '$PX_1', '$PX_2', '$PX_3', '$PX_4', '$WP_1', '$WP_2' , '$punkteanzahl', '$Bestanden', '$durchschnitt' )";
    
    
    mysqli_query($conn, $sql);






    


echo "<br>Dein Durchschnitt liegt bei $durchschnitt Punkten!";
echo "<br>du hast $unterkurs unterkurse<br>";
echo "<br>du hast $leistungsuk unterkurse im leistungskurs"


?>
</main>
</body>
</html>