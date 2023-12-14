<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
        <p>Hier sind alle Daten!</p>
    </header>
    <nav>
        <a href="../index.html">
                <i class="material-icons" style="font-size:36px;">house</i>
        </a>
    </nav>
    <main>
    <?php
        // Datenbankverbindung herstellen
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "abirechner";
        

        
        $conn = mysqli_connect($servername, $username, $password)
            or die("Verbindung sagt NEIN!");
          
        
        mysqli_select_db ($conn, $dbname);
        
        
        
        
        
    
        //Variablen
        if(isset($_POST["VName_Search"])){
            $VName_Search = $_POST["VName_Search"];
        }

        if(isset($_POST["NName_Search"])){
            $NName_Search = $_POST["NName_Search"];
        }
        
        if(isset($_POST["bestanden"])){
            $bestanden = $_POST["bestanden"];
        }
        

        //Filter
        
        if(isset($VName_Search)){
            $result_VName = mysqli_query($conn,"SELECT * FROM schueler WHERE VName = '$VName_Search'");
            if($result_VName ->num_rows > 0){
                while($row = $result_VName -> fetch_assoc()){
                    echo "<p><b>Gefiltert nach Vornamen:</b></p><br>  <b>Vorname:</b> ".$row['VName'] ."<br> <b>Nachname:</b> " .$row['NName']. "<br><b> Alter: </b>" .$row['age']. "<br> <b>Geschlecht:</b> " .$row['geschlecht']. "<br> <b>Hast du bestanden?</b> " .$row['bestanden'] ."<br> <b>Deine Gesamtpunktzahl:</b> " .$row['punkteanzahl']. "<br><b> Dein Notendurchschnitt: </b>". $row['notendurchschnitt'] ."<br> <br>";
                }
            }else{
                echo "Keine Einträge gefunden";
            }
        }


        if(isset($NName_Search)){
            $result_NName = mysqli_query($conn,"SELECT * FROM schueler WHERE NName = '$NName_Search'");
            if($result_NName ->num_rows > 0){
                while($row = $result_NName -> fetch_assoc()){
                    echo "<p><b>Gefiltert nach Nachnamen:</b></p><br>  <b>Vorname:</b> ".$row['VName'] ."<br> <b>Nachname:</b> " .$row['NName']. "<br><b> Alter: </b>" .$row['age']. "<br> <b>Geschlecht:</b> " .$row['geschlecht']. "<br> <b>Hast du bestanden?</b> " .$row['bestanden'] ."<br> <b>Deine Gesamtpunktzahl:</b> " .$row['punkteanzahl']. "<br><b> Dein Notendurchschnitt: </b>". $row['notendurchschnitt'] ."<br> <br>";
                }
            }else{
                echo "Keine Einträge gefunden";
            }
        }





        if($bestanden == "1"){
            $result_bestanden= mysqli_query($conn,"SELECT * FROM schueler WHERE bestanden='ja'");
        
        
        
                    if($result_bestanden->num_rows > 0){
                        while($row = $result_bestanden -> fetch_assoc()){
                            echo "<p><b>Gefiltert nach Bestanden:</b></p><br>  <b>Vorname:</b> ".$row['VName'] ."<br> <b>Nachname:</b> " .$row['NName']. "<br><b> Alter: </b>" .$row['age']. "<br> <b>Geschlecht:</b> " .$row['geschlecht']. "<br> <b>Hast du bestanden?</b> " .$row['bestanden'] ."<br> <b>Deine Gesamtpunktzahl:</b> " .$row['punkteanzahl']. "<br><b> Dein Notendurchschnitt: </b>". $row['notendurchschnitt'] ."<br> <br>";
                        }
                    }else{
                        echo "Keine Einträge gefunden";
                    }
                }
        
        if($bestanden !== "1"){
            $result_bestanden_nein= mysqli_query($conn,"SELECT * FROM schueler WHERE bestanden='nein'");
        
        
        
                    if($result_bestanden_nein->num_rows > 0){
                        while($row = $result_bestanden_nein -> fetch_assoc()){
                            echo "<p><b>Gefiltert nach nicht Bestanden:</b></p><br>  <b>Vorname:</b> ".$row['VName'] ."<br> <b>Nachname:</b> " .$row['NName']. "<br><b> Alter: </b>" .$row['age']. "<br> <b>Geschlecht:</b> " .$row['geschlecht']. "<br> <b>Hast du bestanden?</b> " .$row['bestanden'] ."<br> <b>Deine Gesamtpunktzahl:</b> " .$row['punkteanzahl']. "<br><b> Dein Notendurchschnitt: </b>". $row['notendurchschnitt'] ."<br> <br>";
                        }
                    }else{
                        echo "Keine Einträge gefunden";
        }
        }   
   
   
   ?>
    </main>
</body>
</html>



