<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    body {
        background-color: <?php echo $_POST["kleuren"]; ?>;
        color: <?php echo $_POST["textKleur"]; ?>;
        

    }

    table, tr, td{
        border: <?php echo $_POST["dikteRand"]; ?>px solid black;
        padding: <?php echo$_POST["ruimteTussen"]; ?>px;
    }
    
    </style>
</head>
<body>
      
            <?php
    $Metin = array(
    "naam" => "Metin",
     "leeftijd" => "22", 
     "woonplaats" => "Amsterdam", 
     "Klas" => "0D", 
     "sport" => "Voetbal");

    function maakRij($tabel1, $tabel2){
        echo '<tr>
                    <td>'.$tabel1.'</td>
                    <td>'.$tabel2.'</td>
                </tr>';
    }
 ?>
<body>
    <table>
        <tr>
        <?php 
            foreach($Metin as $eigenschap => $waarde){
               maakRij($eigenschap, $waarde); 
            }
        ?>
        </tr>
    </table>
 
</body>

                    
                   
                 

</html>